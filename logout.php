<?php
require('../smarty/libs/Smarty.class.php');
include('../config.php');

$smarty = new Smarty;

session_start();

if(session_destroy()) {
	header("Location: /login.php");
}

// Display data on template
$smarty->display('resources/smarty/templates/header.tpl');
?>