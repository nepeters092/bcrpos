<?php
require_once ('resources/smarty/smartyHeader.php');
include('../config.php');

session_start();

$smarty = new Smarty;

$msg = [];

if (isset($_POST['submit'])) {
	
	// Check to make sure all fields are complete
	if (!empty($_POST['username'])) {
		$username = mysqli_real_escape_string($connection, trim($_POST['username']));
	} else {
		array_push($msg, "Username is required.");
	}
	
	if (!empty($_POST['security1'])) {
		$security1 = mysqli_real_escape_string($connection, trim($_POST['security1']));
	} else {
		array_push($msg, "You must answer all security questions.");
	}
	
	if (!empty($_POST['security2'])) {
		$security2 = mysqli_real_escape_string($connection, trim($_POST['security2']));
	} else {
		array_push($msg, "You must answer all security questions.");
	}
	
	if (empty($msg)) {
		
		// Check for security question match
		$sql = "SELECT * FROM admin WHERE username = '{$username}' and security_question1 = SHA1('$security1') and security_question2 = SHA1('$security2')";
		$result = mysqli_query($connection,$sql);
		$rows = mysqli_num_rows($result);
		
		// If there's a match
		if ($rows == 1) {
			
			while($row = mysqli_fetch_assoc($result)) {
				$to = $row['email'];
				$name = $row['first_name'];
				$pass = $row['passcode'];
			}
			
			$subject = "BCR password recovery";
			$body = "Hi {$name}, \n\nYour password is:" . $pass;
			if (mail($to, $subject, $body)) {
				array_push($msg, "An message has been sent to the email associated with this account.");
			}
			
		} else {
			
			array_push($msg, "Account not found. Please check your username and/or security questions and try again.");
			
		}
	
		
	}
	
}

$smarty->assign('msg', implode("<br />", $msg));
$smarty->assign('title', 'Create Account');
$smarty->display('resources/smarty/templates/forgot_password.tpl');
?>