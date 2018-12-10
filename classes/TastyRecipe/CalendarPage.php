<?php
namespace TastyRecipe;

use Id1354fw\View\AbstractRequestHandler;
use TastyRecipe\Util\Constants;

class CalendarPage extends AbstractRequestHandler{
    protected function doExecute()
    {
        $this->session->restart();
        $contr = $this->session->get(Constants::TASTY_CONTR_KEY);
        $this->addVariable(Constants::TASTY_USERNAME_VAR, $contr->getUsername());
        return Constants::TASTY_CALENDAR_VIEW;
    }
}