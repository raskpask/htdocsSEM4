<?php
session_start();
require_once 'keys.php';
$_SESSION[LATEST_RECIPE_PAGE]= "pancake";
$_SESSION['RECIPE_NUMBER']= 0;
include 'recipepage.php';

?>
