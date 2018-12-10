<?php
namespace TastyRecipe;

use Id1354fw\View\AbstractRequestHandler;
use TastyRecipe\Util\Constants;

class MeatballPage extends AbstractRequestHandler{
    protected function doExecute()
    {
        $this->session->restart();
        $contr = $this->session->get(Constants::TASTY_CONTR_KEY);
        $this->session->set((Constants::TASTY_RECIPE),"1");
        $this->addVariable(Constants::TASTY_USERNAME_VAR, $contr->getUsername());
        $this->addVariable(Constants::TASTY_ISLOGGEDIN, $this->session->get(TASTY_ISLOGGEDIN));
        $this->addVariable(Constants::TASTY_ENTRIES_VAR, $contr->getConversation("1"));
        return Constants::TASTY_MEATBALL_VIEW;
    }
}