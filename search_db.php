<?php
require('/libs/Smarty.class.php');
$smarty = new Smarty;
include('C:/wamp64/config.php');

// if form is submitted
if($_SERVER['REQUEST_METHOD'] == 'POST') {

	// Check for form completion
	if(empty($_POST['search'])) {
		$errors[] = 'Please enter a valid search key.';
	} else {
		$search = mysqli_real_escape_string($connection, trim($_POST['search']));
	}
	
	if (empty($errors)) { // If everything's OK.
		$query = "SELECT * FROM employees WHERE last_name LIKE '{$search}'";
		  
		$result = mysqli_query($connection, $query);
		  
		if (mysqli_affected_rows($connection) == 1) { // Should be one row affected by previous query.
			 
			while($row = mysqli_fetch_assoc($result)) {
				$data[] = $row;
			} 
			  
		}	  
	}
} else {
	// Defaut: Display all employee data
	$sql = 'SELECT * FROM employees';

	$result = mysqli_query($connection,$sql);

	while($row = mysqli_fetch_assoc($result)) {
		$data[] = $row;
	}

}

/* Close the connection
mysqli_free_result($result);
mysqli_close($connection); */

// Display data on template
$smarty->assign('title', 'Employees');
$smarty->assign('data', $data);
$smarty->assign('navTitle', 'Employees');
$smarty->assign('currPage', 'Employees');
$smarty->display('resources/smarty/templates/employees_search.tpl');
?>