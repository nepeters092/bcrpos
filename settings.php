<?php
// TO DO: Make rows sortable.
require_once ('resources/smarty/smartyHeader.php');
include ('session.php');

$smarty = new Smarty;
$errors = [];
$msg = [];
$userId = $_SESSION['user_id'];
$data = [];
$editParam = [];
$note = "";

// Change password
if (isset($_POST['changePass'])) {
	
	// Verify form completion
	if (!empty($_POST['oldpass1'])) {
		$oldpass1 = mysqli_real_escape_string($connection, trim($_POST['oldpass1']));
	} else {
		array_push($errors, "You must enter your current password.");
	}
	
	if (!empty($_POST['oldpass2'])) {
		$oldpass2 = mysqli_real_escape_string($connection, trim($_POST['oldpass2']));
	} else {
		array_push($errors, "You must enter your current password.");
	}
	
	if (!empty($_POST['newpass1'])) {
		$newpass1 = mysqli_real_escape_string($connection, trim($_POST['newpass1']));
	} else {
		array_push($errors, "You must enter a new password.");
	}
	
	if (!empty($_POST['newpass2'])) {
		$newpass2 = mysqli_real_escape_string($connection, trim($_POST['newpass2']));
	} else {
		array_push($errors, "You must verify your new password.");
	}
	
	if (empty($errors)) {
		
		// Confirm that current passwords match
		if ($oldpass1 !== $oldpass2) {
			array_push($msg, "Your current passwords do not match.");
		} else { // If they do match
			// Verify current password accuracy
			$getPass = "SELECT * FROM admin WHERE user_id = '{$userId}' AND passcode = SHA1('{$oldpass1}')";
			$passResult = mysqli_query($connection, $getPass);
			$rows = mysqli_num_rows($passResult);
			
			if ($rows == NULL) {
				array_push($msg, "Your current password is incorrect.");
			}
		}
		
		// Confirm that new passwords match
		if ($newpass1 !== $newpass2) {
			array_push($msg, "Your new passwords do not match.");
		}
		
		if (empty($msg)) {
			
			$sql = "UPDATE admin SET passcode = SHA1('{$newpass2}') WHERE user_id = '{$userId}' LIMIT 1";
			$result = mysqli_query($connection,$sql);

			if(mysqli_affected_rows($connection) == 1) {
				
				array_push($msg, "Your password has been updated.");
				
			} else {
				
				array_push($msg, "There was an error. Please try again.");
				
			}
			
		}
		
	}
	
}

// Edit account information
$sql = "SELECT * FROM admin WHERE user_id = '{$_SESSION['user_id']}'";
$result = mysqli_query($connection,$sql);
while($row = mysqli_fetch_assoc($result)) {
	$data[] = $row;
}

// If submit button is clicked
if (isset($_POST['editAccount'])) {

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

	if(!empty($_POST['email'])) {
		$email = mysqli_real_escape_string($connection, trim($_POST['email']));
		$emailQuery = "email = '{$email}'";
		array_push($editParam, $emailQuery);
	}
	
	if (!empty($editParam)) { // If there's something to edit
		
		$addendum = implode(", ", $editParam);
		$updateSql = "UPDATE admin SET " .$addendum . " WHERE user_id = '{$_SESSION['user_id']}' LIMIT 1";
		$updateResult = mysqli_query($connection,$updateSql);
		
		if(mysqli_affected_rows($connection) >= 1) {
			$note = "Update successful.";
			echo "<meta http-equiv='refresh' content='0'>";	
		} else {
			$note = "There was an error with your request. Please try again.";
		}	
	}	

}

$smarty->assign('note', $note);
$smarty->assign('data', $data);
$smarty->assign('errors', implode("<br />", $errors));
$smarty->assign('msg', implode("<br />", $msg));
$smarty->assign('title', 'Settings');
$smarty->assign('navTitle', 'Settings');
$smarty->assign('currPage', 'Settings');
$smarty->display('resources/smarty/templates/settings.tpl');
?>