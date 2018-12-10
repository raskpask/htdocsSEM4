<?php
namespace TastyRecipe\Util;

use Id1354fw\Util\Classes;

class Constants{
    const TASTY_CONTR_KEY = 'TASTY_CONTR_KEY';
    const TASTY_FIRST_PAGE_HANDLER = 'TastyRecipe/FirstPage';
    const TASTY_RECIPE_VIEW = 'recipe';
    const TASTY_LOGIN_VIEW = 'login';
    const TASTY_USERNAME_VAR = 'username';
    const TASTY_PASSWORD_VAR = 'password';
    const TASTY_ENTRIES_VAR = 'entries';
    const TASTY_LOGINP_VIEW = 'loginP';
    const TASTY_SIGNUPP_VIEW = 'signupP';
    const TASTY_MEATBALL_VIEW = 'meatballs';
    const CHAT_ENTRY_DELIMITER = ';\n';
    const TASTY_ISLOGGEDIN = 'loggedin';
    const TASTY_RECIPE= 'reciepeNumber';
    const TASTY_CALENDAR_VIEW= 'calendar';

    public static function getViewFragmentsDir(){
        return $_SERVER['DOCUMENT_ROOT'] . Classes::getContextPath() . '/resourses/fragments/';
    }
}