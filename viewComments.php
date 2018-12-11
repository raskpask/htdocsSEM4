<?php
require_once 'ENTRY.php';
session_start();
if($_SESSION['recipepage'] == "pancake"){
    $filename = __DIR__ . '/conversation/pancakeComments.txt' ;
}else{
    $filename = __DIR__ . '/conversation/meatballsComments.txt' ;
}

$entries = explode(";\n", file_get_contents($filename));
$entriesA= array();
for ($i = count($entries) - 1; $i >= 0; $i--) {
    $entry = unserialize($entries[$i]);
    if ($entry instanceof Entry and !($entry->isDeleted())) {
        $entriesA[] = array("username"=>$entry->getUsername(),
                            "message"=>$entry->getMessage(),
                            "timestamp"=>$entry->getTimestamp(),
                            "deleted"=>$entry->isDeleted(),
                            "deletebutton"=>deletebutton($entry->getUsername()));




    }
}
echo \json_encode($entriesA,JSON_PRETTY_PRINT);


function deletebutton($username)
{
   if($_SESSION['username'] == $username){
       return true;
   }

    return false;
}


