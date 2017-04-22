<?php
// TO DO: Make rows sortable.
require_once ('resources/smarty/smartyHeader.php');
include ('session.php');

$smarty = new Smarty;

$editParam = [];
$msg = "";

// Display customer information
$id = $_GET['employee_id'];

$sql = "SELECT * FROM employees WHERE employee_id = '{$id}'";
$result = mysqli_query($connection,$sql);
while($row = mysqli_fetch_assoc($result)) {
	$data[] = $row;
}

// If submit button is clicked
if (isset($_POST['editEmployee'])) {

	if(!empty($_POST['lastName'])) {
		$lastName = mysqli_real_escape_string($connection, trim($_POST['lastName']));
		$lastNameQuery = "last_name = '{$lastName}'";
		array_push($editParam, $lastNameQuery);
	}
	
	if(!empty($_POST['firstName'])) {
		$firstName = mysqli_real_escape_string($connection, trim($_POST['firstName']));
		$firstNameQuery = "first_name = '{$firstName}'";
		array_push($editParam, $firstNameQuery);
	}
	
	if(!empty($_POST['streetAddr'])) {
		$streetAddr = mysqli_real_escape_string($connection, trim($_POST['streetAddr']));
		$streetAddrQuery = "street_address = '{$streetAddr}'";
		array_push($editParam, $streetAddrQuery);
	}
	
	if(!empty($_POST['city'])) {
		$city = mysqli_real_escape_string($connection, trim($_POST['city']));
		$cityQuery = "city = '{$city}'";
		array_push($editParam, $cityQuery);
	}
	
	if(!empty($_POST['state'])) {
		$state = mysqli_real_escape_string($connection, trim($_POST['state']));
		$stateQuery = "state = '{$state}'";
		array_push($editParam, $stateQuery);
	}
	
	if(!empty($_POST['zip'])) {
		$zip = mysqli_real_escape_string($connection, trim($_POST['zip']));
		$zipQuery = "zip = '{$zip}'";
		array_push($editParam, $zipQuery);
	}
	
	if(!empty($_POST['email'])) {
		$email = mysqli_real_escape_string($connection, trim($_POST['email']));
		$emailQuery = "email = '{$email}'";
		array_push($editParam, $emailQuery);
	}
	
	if(empty($_POST['phone'])) {
		$phone = mysqli_real_escape_string($connection, trim($_POST['phone']));
		$phoneQuery = "phone = '{$phone}'";
		array_push($editParam, $phoneQuery);
	}
	
	if (!empty($editParam)) { // If there's something to edit
		
		$addendum = implode(", ", $editParam);
		$updateSql = "UPDATE employees SET " .$addendum . " WHERE employee_id = '{$id}' LIMIT 1";
		$updateResult = mysqli_query($connection,$updateSql);
		
		if(mysqli_affected_rows($connection) >= 1) {
			$msg = "Update successful.";
			echo "<meta http-equiv='refresh' content='0'>";
		} else {
			$msg = "There was an error with your request. Please try again.";
		}	
	}	
}

$smarty->assign('msg', $msg);
$smarty->assign('data', $data);
$smarty->assign('title', 'Edit Employee');
$smarty->assign('navTitle', 'Edit Employee');
$smarty->assign('currPage', '<a href="/employees.php">Employees</a> / Edit Employee');
$smarty->display('resources/smarty/templates/edit_employee.tpl');
?>