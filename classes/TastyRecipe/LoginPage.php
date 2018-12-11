<?php
namespace TastyRecipe;
use Id1354fw\View\AbstractRequestHandler;
use TastyRecipe\Util\Constants;
class LoginPage extends AbstractRequestHandler{
    private $username;
    private $password;


    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    protected function doExecute()
    {
        $this->session->restart();
        $contr = $this->session->get(Constants::TASTY_CONTR_KEY);
    echo $this->username;
            if($contr->login($this->username, $this->password)) {
                $this->addVariable(Constants::TASTY_USERNAME_VAR, $contr->getUsername());
                $this->session->set(Constants::TASTY_ISLOGGEDIN, true);
                $this->addVariable(Constants::TASTY_ISLOGGEDIN, true);
                $this->session->set(Constants::TASTY_CONTR_KEY,$contr);
                echo "You have successfully logged in!";
                return Constants::TASTY_LOGIN_VIEW;
            }

        return Constants::TASTY_LOGINP_VIEW;

    }
}