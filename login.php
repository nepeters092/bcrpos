<?php
require('../smarty/libs/Smarty.class.php');
include('../config.php');

$smarty = new Smarty;

session_start();
$msg = ' ';

if($_SERVER["REQUEST_METHOD"] == "POST") {
	// username and password from form
	$username = mysqli_real_escape_string($connection, $_POST['username']);
	$password = mysqli_real_escape_string($connection, $_POST['password']);

	$sql = "SELECT * FROM admin WHERE username ='$username' and passcode = SHA1('$password')";
	
	$result = mysqli_query($connection, $sql);
	$rows = mysqli_num_rows($result);

	// Only one row should be affected

	if($rows == 1) {
		$_SESSION['login_user'] = $username; // Initialize
		header("location: dashboard.php"); // Redirect
	
		
		while($row = mysqli_fetch_assoc($result)) {
			$data[] = $row;
		}
	
	} else  {
		$msg = "Your Login Name or Password is invalid";
	}
} 

// Display data on template
$smarty->assign('title', 'Login');
$smarty->assign('msg', $msg);
$smarty->display('resources/smarty/templates/login.tpl');
?>