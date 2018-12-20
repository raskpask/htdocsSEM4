<?php
require_once 'Entry.php';
require_once 'keys.php';

session_start();

if ($_SESSION[LATEST_RECIPE_PAGE] == "pancake") {
    $filename = __DIR__ . '/conversation/pancakeComments.txt';
} else {
    $filename = __DIR__ . '/conversation/meatballsComments.txt';
}

if (!empty($_GET['comment'])) {
    if (isset($_SESSION[LOGIN_USERNAME])) {
        $entry = new ENTRY($_SESSION[LOGIN_USERNAME], $_GET['comment']);
        file_put_contents($filename, serialize($entry) . CHAT_ENTRY_DELIMITER, FILE_APPEND);
        echo \json_encode("success");
    } else {
        echo "Please login before posting a comment!";
    }
}

?>
