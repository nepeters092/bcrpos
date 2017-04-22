<?php
require('/libs/Smarty.class.php');
$smarty = new Smarty;
include('C:/wamp64/config.php');

if($_SERVER['REQUEST_METHOD'] == 'POST') {
	  
	$errors = array();
	  
	if(empty($_POST['first'])) {
		$errors[] = 'Please enter a first name.';
	} else {
		$first = mysqli_real_escape_string($connection, trim($_POST['first']));
	}
	  
	if(empty($_POST['last'])) {
		$errors[] = 'Please enter a last name.';
	} else {
		$last = mysqli_real_escape_string($connection, trim($_POST['last']));
	}
	  
	if(empty($_POST['addr'])) {
		$errors[] = 'Please enter an address.';
	} else {
		$addr = mysqli_real_escape_string($connection, trim($_POST['addr']));
	}
	  
	if(empty($_POST['city'])) {
		$errors[] = 'Please enter a city.';
	} else {
		$city = mysqli_real_escape_string($connection, trim($_POST['city']));
	}
	  
	if(empty($_POST['state'])) {
		$errors[] = 'Please enter a state.';
	} else {
		$state = mysqli_real_escape_string($connection, trim($_POST['state']));
	}
	  
	if(empty($_POST['zip'])) {
		$errors[] = 'Please enter a zip code.';
	} else {
		$zip = mysqli_real_escape_string($connection, trim($_POST['zip']));
	}
	  
	if(empty($_POST['email'])) {
		$errors[] = 'Please enter an email address.';
	} else {
		$email = mysqli_real_escape_string($connection, trim($_POST['email']));
	}
	  
	if(empty($_POST['phone'])) {
		$errors[] = 'Please enter a phone number.';
	} else {
		$phone = mysqli_real_escape_string($connection, trim($_POST['phone']));
	}
	  
	if (empty($errors)) { // If everything's OK.
		$query = "INSERT INTO employees (first_name, last_name, street_address, city, state, zip, email, phone) VALUES ('{$first}', '{$last}', '{$addr}', '{$city}', '{$state}', '{$zip}', '{$email}', '{$phone}')"; 
		  
		$result = mysqli_query($connection, $query);
		  
		if (mysqli_affected_rows($connection) == 1) { // Should be one row affected by previous query.
			  
		// Print message
		echo 'You have successfully added a new employee.';
			  
		} else { // If something went wrong.
		
		// Print message
			  
			echo 'Error.';
		}
		  
	} else {
		
		echo implode("<br />", $errors);

	}
	  
}

$smarty->display('resources/smarty/templates/insert.tpl');
?>