<?php
namespace TastyRecipe;

use Id1354fw\View\AbstractRequestHandler;
use TastyRecipe\Util\Constants;

class SignupPage extends AbstractRequestHandler{
    protected function doExecute()
    {
        $this->session->restart();
        return Constants::TASTY_SIGNUPP_VIEW;
    }
}