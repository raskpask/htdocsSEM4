<?php
require_once 'keys.php';
require_once 'Entry.php';
session_start();
if (!empty($_GET[CHAT_TIMESTAMP_KEY])) {
    if ($_SESSION[LATEST_RECIPE_PAGE] == "pancake") {
        $filename = __DIR__ . '/conversation/pancakeComments.txt';
    } else {
        $filename = __DIR__ . '/conversation/meatballsComments.txt';
    }
    $entries = explode(CHAT_ENTRY_DELIMITER, file_get_contents($filename));
    for ($i = count($entries) - 1; $i >= 0; $i--) {
        $entry = unserialize($entries[$i]);
        if ($entry instanceof Entry and ($entry->getTimestamp() == $_GET[CHAT_TIMESTAMP_KEY])) {
            $entry->setDeleted(true);
            $entries[$i] = serialize($entry);
            break;
        }
    }
    file_put_contents($filename, implode(CHAT_ENTRY_DELIMITER, $entries));
    include 'recipepage.php';
}
?>
