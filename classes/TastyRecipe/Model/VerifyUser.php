<?php

namespace TastyRecipe\Model;

use TastyRecipe\Integration\UserStore;
class VerifyUser
{
    private $dbHandler;

    public function __construct(){
        $this->dbHandler = new UserStore();
    }
    public function verifyUser($username, $password)
    {
        $result = $this->dbHandler->login($username,$password);
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while ($row = mysqli_fetch_assoc($result)) {
                if ((trim($row["username"]) == $username)) {
                    if (password_verify($password, $row['password'])) {
                        return true;
                    } else {
                        return false;
                    }
                }
            }
        } else {
            return false;
        }
    }
}