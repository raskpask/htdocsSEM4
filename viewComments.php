<?php
require_once 'ENTRY.php';
session_start();
if($_SESSION['recipepage'] == "pancake"){
    $filename = __DIR__ . '/conversation/pancakeComments.txt' ;
}else{
    $filename = __DIR__ . '/conversation/meatballsComments.txt' ;
}

$entries = explode(";\n", file_get_contents($filename));
$entriesR= array();
for ($i = count($entries) - 1; $i >= 0; $i--) {
    $entry = unserialize($entries[$i]);
    if ($entry instanceof Entry and !($entry->isDeleted())) {
        $entriesR = new ENTRY($entry->getUsername(),$entry->getMessage());

        $array =  (array) $entry;
        echo \json_encode($array);

    }
}


function object_to_array($data)
{
    if(is_array($data) || is_object($data))
    {
        $result = array();

        foreach($data as $key => $value) {
            $result[$key] = $this->object_to_array($value);
        }

        return $result;
    }

    return $data;
}


