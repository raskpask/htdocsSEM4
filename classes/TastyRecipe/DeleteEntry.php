<?php

namespace TastyRecipe;

use Id1354fw\View\AbstractRequestHandler;
use TastyRecipe\Util\Constants;
use TastyRecipe\Model\Entry;

class DeleteEntry extends AbstractRequestHandler
{

    private $timestamp;

    /**
     * @param mixed $timestamp
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;
    }

    protected function doExecute()
    {
        $this->session->restart();
        $this->timestamp = $_POST['timestamp'];
        $contr = $this->session->get(Constants::TASTY_CONTR_KEY);


        if ($this->session->get(Constants::TASTY_RECIPE) == 0) {
            $contr->deleteEntry((integer)$this->timestamp,0);
            $this->addVariable(Constants::TASTY_ENTRIES_VAR, $contr->getConversation(0));
            $this->addVariable(Constants::TASTY_USERNAME_VAR, $contr->getUsername());
            $this->session->set(Constants::TASTY_CONTR_KEY, $contr);
            return Constants::TASTY_RECIPE_VIEW;
        } else
            $contr->deleteEntry((integer)$this->timestamp,1);
            $this->addVariable(Constants::TASTY_ENTRIES_VAR, $contr->getConversation(1));
            $this->addVariable(Constants::TASTY_USERNAME_VAR, $contr->getUsername());
            $this->session->set(Constants::TASTY_CONTR_KEY, $contr);
            return Constants::TASTY_MEATBALL_VIEW;
    }


}


