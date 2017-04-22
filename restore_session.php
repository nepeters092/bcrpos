<?php
require_once ('resources/smarty/smartyHeader.php');
include ('session.php');

$smarty = new Smarty;
$custData = [];

if(isset($_POST['yes'])) {
	
	header('location: select_film.php');
	
}

if(isset($_POST['no'])) {
	
	// Clear session variable
	$_SESSION['customer_id'] = "";
	header('location: select_customer.php');
	
}


// Display data on template
$smarty->assign('custData', $custData);
$smarty->assign('title', 'Select Customer');
$smarty->assign('navTitle', 'Select Customer');
$smarty->assign('currPage', '<a href="/sale.php">Sale</a> / Select Customer');
$smarty->display('resources/smarty/templates/restore_session.tpl');
?>