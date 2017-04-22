<?php
require_once ('resources/smarty/smartyHeader.php');
include ('session.php');

$smarty = new Smarty;
$errors = "";
$filmTitle = "";
$msg = "";
$confirm = "";

// If submit button is clicked
if (isset($_POST['return'])) {
	
	// Search film ID
	if(!empty($_POST['returnId'])) {
		$returnId = mysqli_real_escape_string($connection, trim($_POST['returnId']));
		$_SESSION['returnId'] = $returnId;
	} else {
		$errors = "You must enter a film ID.";
	}
	
	if(empty($errors)) {
		
		// Select film information
		$sql = "SELECT title, rented FROM movies WHERE film_id = '{$returnId}'";
		$result = mysqli_query($connection, $sql);
		
		while($row = mysqli_fetch_assoc($result)) {
			$rentValue = $row['rented'];
			// Check to see if film is checked out
			if ($rentValue == 0) {
				
				$msg = "This film is not checked out.";
				
			}
			
			// If it isn't, assign a value
			if (empty($msg)) {
				
				$filmTitle = $row['title'];
				
			}
			
		}
	}
	
}

$returnId = $_SESSION['returnId'];

	// If click yes to return
if (isset($_POST['yes'])) { 

	$updateSql = "UPDATE movies SET rented = 0 WHERE film_id = '{$returnId}' LIMIT 1";
	$updateResult = mysqli_query($connection,$updateSql);
		
	if ($updateResult) {
		$confirm = "Film has been returned.";
		$_SESSION['returnId'] = "";
	} else {
		$confirm = "There was an error. Please try again.";
	}
	
} elseif (isset($_POST['cancel'])) {
		
	$filmTitle = "";
		
}



// Display data on template
$smarty->assign('confirm', $confirm);
$smarty->assign('msg', $msg);
$smarty->assign('errors', $errors);
$smarty->assign('filmTitle', $filmTitle);
$smarty->assign('title', 'Return');
$smarty->assign('navTitle', 'Return');
$smarty->assign('currPage', 'Return');
$smarty->display('resources/smarty/templates/returns.tpl');
?>