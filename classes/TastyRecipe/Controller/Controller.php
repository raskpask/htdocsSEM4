<?php

namespace TastyRecipe\Controller;

use TastyRecipe\Integration\ConversationStore;
use TastyRecipe\Integration\UserStore;
use TastyRecipe\Model\Entry;
use TastyRecipe\Model\verifyUser;
use TastyRecipe\Util\Constants;
use TastyRecipe\Model\Entry_user;

class Controller
{


    private $conversation;
    private $username;
    private $users;
    private $verify;

    public function __construct()
    {

        $this->conversation = new ConversationStore();
        $this->users = new UserStore();
        $this->verify = new VerifyUser();
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function addEntry(Entry $entry,$recipe)
    {
        return $this->users->addEntry($entry,$recipe);
    }

    public function getConversation($recipe)
    {
        return $this->users->getConversation($recipe);
    }

    public function login($username, $password)
    {
       if($this->verify->verifyUser($username,$password)){
       $this->username=$username;
       return true;
    }
    return false;
    }

    public function deleteEntry($timestamp)
    {
        $this->users->deleteEntry($timestamp);
    }

    public function signup($username, $password)
    {
        return $this->users->storeUser($username,password_hash($password, PASSWORD_DEFAULT));
    }

    public function logout(){
        $this->username = null;
    }
}