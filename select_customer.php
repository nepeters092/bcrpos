<?php
require_once ('resources/smarty/smartyHeader.php');
include ('session.php');

$smarty = new Smarty;
$custData = [];

if(!empty($_SESSION['customer_id'])) {
	
	header('location: restore_session.php');
	
}

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

// If they confirm
if(isset($_POST['confirmCust'])) {
	
	header('location: select_film.php');
	
}

// If they cancel
if(isset($_POST['cancelCust'])) {
	
	// Clear session variable
	$_SESSION['customer_id'] = "";
	header('location: sale.php');
	
}

// Display data on template
$smarty->assign('custData', $custData);
$smarty->assign('title', 'Select Customer');
$smarty->assign('navTitle', 'Select Customer');
$smarty->assign('currPage', '<a href="/sale.php">Sale</a> / Select Customer');
$smarty->display('resources/smarty/templates/select_customer.tpl');
?>