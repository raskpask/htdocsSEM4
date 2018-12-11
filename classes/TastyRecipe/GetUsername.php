<?php
namespace TastyRecipe;

use Id1354fw\View\AbstractRequestHandler;
use TastyRecipe\Controller\Controller;
use TastyRecipe\Util\Constants;

class GetUsername extends AbstractRequestHandler{

    protected function doExecute()
    {

        $this->session->restart();
        $contr = $this->session->get(Constants::TASTY_CONTR_KEY);
        $this->addVariable(Constants::CHAT_JSON_DATA_VAR,
            $contr->getUsername());
        $this->session->set(Constants::TASTY_CONTR_KEY.$contr);
        return Constants::CHAT_JSON_VIEW;

    }
}