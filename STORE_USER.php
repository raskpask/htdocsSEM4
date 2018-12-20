<?php
require_once 'LOGIN_Entry.php';
require_once 'keys.php';

session_start();
$filename = __DIR__ . '/Users/Users.txt';

$entry = new LOGIN_ENTRY($_GET['username'], $_GET['password']);

file_put_contents($filename, serialize($entry) . CHAT_ENTRY_DELIMITER, FILE_APPEND);
echo \json_encode("success");
?>
