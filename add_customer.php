<?php
require_once ('resources/smarty/smartyHeader.php');
include ('session.php');

$smarty = new Smarty;

// Default values
$hasPhotoId = 'false';
$hasAddrVer = 'false';
$photoId_arr = [];
$addrVer_arr = [];
$errors = [];
$success = "";
$firstName = "";
$lastName = "";
$email = "";
$phone = "";
$streetAddr = "";
$city = "";
$state = "";
$zip = "";


// If submit button is clicked
if (isset($_POST['submitNewCustForm'])) {
	
	// Begin by checking if fields are completed
	if(empty($_POST['firstName'])) {
		array_push($errors, "You must enter a first name.");
	} else {
		$firstName = mysqli_real_escape_string($connection, trim($_POST['firstName']));
	}
	
	if(empty($_POST['lastName'])) {
		array_push($errors, "You must enter a last name.");
	} else {
		$lastName = mysqli_real_escape_string($connection, trim($_POST['lastName']));
	}
	
	// Email is not required
	if(!empty($_POST['email'])) {
		$email = mysqli_real_escape_string($connection, trim($_POST['email']));
	} else {
		$email = NULL;
	}
	
	if(empty($_POST['phone'])) {
		array_push($errors, "You must enter a phone number.");
	} else {
		$phone = mysqli_real_escape_string($connection, trim($_POST['phone']));
	}
	
	if(empty($_POST['streetAddr'])) {
		array_push($errors, "You must enter a street address.");
	} else {
		$streetAddr = mysqli_real_escape_string($connection, trim($_POST['streetAddr']));
	}
	
	if(empty($_POST['city'])) {
		array_push($errors, "You must enter a city.");
	} else {
		$city = mysqli_real_escape_string($connection, trim($_POST['city']));
	}
	
	if(empty($_POST['usState'])) {
		array_push($errors, "You must enter a state.");
	} else {
		$state = mysqli_real_escape_string($connection, trim($_POST['usState']));
	}
	
	if(empty($_POST['zip'])) {
		array_push($errors, "You must enter a zip code.");
	} else {
		$zip = mysqli_real_escape_string($connection, trim($_POST['zip']));
	}
	
	// There should be two forms of photo ID selected
	if(empty($_POST['photoId'])) { // If nothing is entered
		array_push($errors, "You must verify two forms of photo ID to add a customer.");
	}
	
	if(empty($_POST['addrVer'])) { // If nothing is entered
		array_push($errors, "Two official documents are required to verify address.");
	}
		
	if(!empty($_POST['photoId'])) { 
		$photoId_arr = $_POST['photoId'];
		if(count($photoId_arr) >= 2) {
			$hasPhotoId = 'true';
		} else {
			array_push($errors, "You must verify two forms of photo ID to add a customer.");
		}
	}
		
	if(!empty($_POST['addrVer'])) {
		$addrVer_arr = $_POST['addrVer'];
		if(count($addrVer_arr) >= 2) {
			$hasAddrVer = 'true';
		} else {
			array_push($errors, "Two official documents are required to verify address.");
		}
	}
	
	// If there are no errors 
	if (empty($errors)) {
		
		if(mysqli_affected_rows($connection)){
			
			// Check for duplicates
			$duplicateQuery = "SELECT * FROM customers WHERE phone = '{$phone}' LIMIT 1";
			$duplicateResult = mysqli_query($connection, $duplicateQuery);
			
			if(mysqli_num_rows($duplicateResult) == 1) {
				array_push($errors, "An account with this information already exists.");
			} else { // Otherwise, add customer
				$custAddQuery = "INSERT INTO customers (first_name, last_name, phone, email, street_address, city, state, zip, photo_id, addr_verification) VALUES ('{$firstName}', '{$lastName}', '{$phone}', '{$email}', '{$streetAddr}', '{$city}', '{$state}', '{$zip}', '{$hasPhotoId}', '{$hasAddrVer}')";
				$custAddResult = mysqli_query($connection, $custAddQuery);
				
				if(mysqli_affected_rows($connection) == 1) {
					
					$msg = 'A new account has been created.';
					
				} else {
					
					$msg = 'An error occured with your request. Please try again.';
					
				}
				
			}
		} 
	}	
}


// Display data on template
$smarty->assign('firstName', $firstName);
$smarty->assign('lastName', $lastName);
$smarty->assign('email', $email);
$smarty->assign('phone', $phone);
$smarty->assign('streetAddr', $streetAddr);
$smarty->assign('city', $city);
$smarty->assign('state', $state);
$smarty->assign('zip', $zip);
$smarty->assign('errors', implode('<br />', $errors));
$smarty->assign('success', $success);
$smarty->assign('title', 'Add Customer');
$smarty->assign('navTitle', 'Add Customer');
$smarty->assign('currPage', '<a href="/customers.php">Customers</a> / Add Customer');
$smarty->display('resources/smarty/templates/add_customer.tpl');
?>