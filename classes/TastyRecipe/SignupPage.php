<?php
namespace TastyRecipe;

use Id1354fw\View\AbstractRequestHandler;
use TastyRecipe\Util\Constants;

class SignupPage extends AbstractRequestHandler{
    private $username;
    private $password;

    public function setUsername(){
        return $this->username;
    }

    public function setPassword(){
        return $this->password;
    }
    protected function doExecute()
    {
        $this->session->restart();

        echo "username: ". $this->username . "password: ".$this->password;

                $contr = $this->session->get(Constants::TASTY_CONTR_KEY);
                if ($contr->signup($this->username, $this->password)) {
                    echo "You have signed up!";
                    return Constants::TASTY_LOGIN_VIEW;
                }




        return Constants::TASTY_SIGNUPP_VIEW;
    }




}