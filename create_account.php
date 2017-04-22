<?php
require_once ('resources/smarty/smartyHeader.php');
include('../config.php');

session_start();

$smarty = new Smarty;

$msg = [];

if (isset($_POST['createAcct'])) {
	
	// Check to make sure all fields are complete
	if (!empty($_POST['first'])) {
		$first = mysqli_real_escape_string($connection, trim($_POST['first']));
	} else {
		array_push($msg, "First name is required.");
	}
	
	if (!empty($_POST['last'])) {
		$last = mysqli_real_escape_string($connection, trim($_POST['last']));
	} else {
		array_push($msg, "Last name is required.");
	}
	
	if (!empty($_POST['email'])) {
		$email = mysqli_real_escape_string($connection, trim($_POST['email']));
	} else {
		array_push($msg, "Email is required.");
	}
	
	if (!empty($_POST['username'])) {
		$username = mysqli_real_escape_string($connection, trim($_POST['username']));
	} else {
		array_push($msg, "Username is required.");
	}
	
	if (!empty($_POST['password'])) {
		$pass = mysqli_real_escape_string($connection, trim($_POST['password']));
	} else {
		array_push($msg, "Password is required.");
	}
	
	if (!empty($_POST['verify'])) {
		$verify = mysqli_real_escape_string($connection, trim($_POST['verify']));
	} else {
		array_push($msg, "You must verify your password.");
	}
	
	if (!empty($_POST['security1'])) {
		$security1 = mysqli_real_escape_string($connection, trim($_POST['security1']));
	} else {
		array_push($msg, "You must answer all security questions.");
	}
	
	if (!empty($_POST['security2'])) {
		$security2 = mysqli_real_escape_string($connection, trim($_POST['security2']));
	} else {
		array_push($msg, "You must answer all security 	questions.");
	}
	
	if ($_POST['password'] != $_POST['verify']) {
		array_push($msg, "Your passwords do not match.");
	}
	
	if (empty($msg)) {
		
		// Check for duplicate account
		$sql = "SELECT * FROM admin WHERE username = '{$username}'";
		$result = mysqli_query($connection,$sql);
		
		// If there's a match 
		if (mysqli_num_rows($result) == 1) {
			array_push($msg, "Username taken. Please try again.");
		} else {
			// Create a new account
			$sql = "INSERT INTO admin (username, passcode, first_name, last_name, email, security_question1, security_question2) VALUES ('$username', SHA1('$pass'), '$first', '$last', '$email', SHA1('$security1'), SHA1('$security2'))";
			$confirm = mysqli_query($connection, $sql);
			// If creation was successful
			if (mysqli_affected_rows($connection)) {
				
				$_SESSION['login_user'] = $username; // Initialize
				header("location: /dashboard.php"); // Redirect
				
			} else {
				
				array_push($msg, "There was an error. Please try again.");
				
			}
			
		}
		
	}
	
}

$smarty->assign('msg', implode("<br />", $msg));
$smarty->assign('title', 'Create Account');
$smarty->display('resources/smarty/templates/create_account.tpl');
?>