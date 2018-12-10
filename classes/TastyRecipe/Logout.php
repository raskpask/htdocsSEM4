<?php
namespace TastyRecipe;

use Id1354fw\View\AbstractRequestHandler;
use TastyRecipe\Controller\Controller;
use TastyRecipe\Util\Constants;

class Logout extends AbstractRequestHandler{
    protected function doExecute()
    {
        $contr = $this->session->get(Constants::TASTY_CONTR_KEY);
        $contr->logout();
        $this->addVariable(Constants::TASTY_ISLOGGEDIN, false);
        $this->session->set(Constants::TASTY_ISLOGGEDIN,false);
        $this->session->set(Constants::TASTY_CONTR_KEY,$contr);
        return Constants::TASTY_LOGIN_VIEW;
    }
}