<?php
session_start();
ob_start();
include('../config.php');

$smarty = new Smarty;

$user_check= $_SESSION['login_user'];

$ses_sql= mysqli_query($connection, "select user_id, username, first_name from admin where username='$user_check'");
$row = mysqli_fetch_assoc($ses_sql);
$login_session = $row['username'];
$first_name = $row['first_name'];
$_SESSION['clerk_name'] = $row['first_name'];
$_SESSION['user_id'] = $row['user_id'];

if(!isset($login_session)) {
	mysqli_close($connection);
	header('location: login.php');
}

$smarty->assign('nameGreet', $first_name);
$smarty->assign('title', 'Home');
$smarty->display('resources/smarty/templates/header.tpl');

// ob_end_flush();	
?>