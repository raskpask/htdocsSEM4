<?php
session_start();
require_once 'keys.php';
require_once 'LOGIN_ENTRY.php';


    $userN = $_GET['username'];
    $passW = $_GET['password'];



    $filename = __DIR__ . '/Users/Users.txt';

    $entries = explode(";\n", file_get_contents($filename));
    for ($i = count($entries) - 1; $i >= 0; $i--) {
        $entry = unserialize($entries[$i]);

        if ($entry instanceof LOGIN_ENTRY and (trim($entry->getUsername()) == $userN) and (trim($entry->getPassword()) == $passW)) {
            $_SESSION[LOGIN_USERNAME] = $userN;
            echo \json_encode("success");
        }

    }




