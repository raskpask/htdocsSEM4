<?php

namespace TastyRecipe\Integration;

use TastyRecipe\Model\Entry_user;
use TastyRecipe\Model\Entry;

class UserStore
{

    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "myDB";

    public function __construct()
    {
    }

    public function storeUser($username, $password)
    {
        $conn = $this->openConnection();
        $sql = "INSERT INTO user (username, password)
        VALUES ('$username', '$password')";

        if ($conn->query($sql) === TRUE) {
            $conn->close();
            return true;
        }
        $conn->close();
        return false;
    }

    public function login($username, $password)
    {
        $conn = $this->openConnection();
        $sql = "SELECT username, password FROM user";
        $result = $conn->query($sql);
        return $result;
    }


    public function openConnection()
    {
        $conn = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        return $conn;
    }
// functions for storing and viewing comments.
    public function addEntry(Entry $entry, $recipe)
    {
        // save the variables of the object entry.
        $time= $entry->getTimestamp(); $message=$entry->getMessage();$del=$entry->isDeleted(); $user=$entry->getUsername();
        $conn = $this->openConnection();
        $sql = "INSERT INTO comments (timestamp, recipe, message, isDeleted,user)
        VALUES ('$time',  '$recipe', '$message', '$del','$user' )";

        if ($conn->query($sql) === TRUE) {
            $conn->close();
            return true;
        }
        $conn->close();
        return false;
    }

    public function getConversation($recipe)
    {
        $conn = $this->openConnection();
        $sql= "SELECT timestamp,message, isDeleted, user FROM comments WHERE recipe = $recipe";
        $result = $conn->query($sql);
        $entries;
        while ($row = mysqli_fetch_assoc($result)) {
            if(!$row['isDeleted']) {
                $entry = new Entry($row['user'], $row['message']);
                $entry->setTimestamp($row['timestamp']);
                $entry->setDeleted($row['isDeleted']);
                $entries[] = $entry;
            }
        }
        return $entries;
    }
    public function deleteEntry($timestamp)
    {
        $conn = $this->openConnection();
        $sql = "DELETE FROM comments WHERE timestamp=$timestamp";
        $conn->query($sql);
    }
}