<?php
require_once ('resources/smarty/smartyHeader.php');
include ('session.php');

$smarty = new Smarty;
$custData = [];

// Add customer account
if(isset($_POST['custSubmit'])) {

	if(empty($_POST['custSearch'])) {
		$errors[] = 'Please enter a valid search key.';
	} else {
		$custSearch = mysqli_real_escape_string($connection, trim($_POST['custSearch']));
	}
	
	if (empty($errors)) { 
		$custQuery = "SELECT * FROM customers WHERE customer_id = '{$custSearch}'";  
		$custResult = mysqli_query($connection, $custQuery);
			while($custRow = mysqli_fetch_assoc($custResult)) {
				$custData[] = $custRow;
				// Save customer information
				$_SESSION['late_fee'] = $custRow['late_fee']; 
				$_SESSION['customer_id'] = $custRow['customer_id'];
				$_SESSION['first_name'] = $custRow['first_name'];
				$_SESSION['last_name'] = $custRow['last_name'];
				$_SESSION['street_address'] = $custRow['street_address'];
				$_SESSION['city'] = $custRow['city'];
				$_SESSION['state'] = $custRow['state'];
				$_SESSION['zip'] = $custRow['zip'];
				$_SESSION['phone'] = $custRow['phone'];
				$_SESSION['member_since'] = $custRow['member_since'];
			}
	}
}

// Display data on template
$smarty->assign('custData', $custData);
$smarty->assign('title', 'Sale');
$smarty->assign('navTitle', 'Sale');
$smarty->assign('currPage', 'Sale');
$smarty->display('resources/smarty/templates/sale.tpl');
?>