<?php
session_start();
require_once 'keys.php';
$_SESSION[LATEST_RECIPE_PAGE]= "meatballs";
$_SESSION['RECIPE_NUMBER']= 1;

include 'recipepage.php';
 ?>
