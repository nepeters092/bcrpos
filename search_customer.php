<?php
require('/libs/Smarty.class.php');
$smarty = new Smarty;
include('C:/wamp64/config.php');

// Default
$data = [];

// if form is submitted
if($_SERVER['REQUEST_METHOD'] == 'POST') {
	
	if (!(isset($_POST['search']))) { // If nothing was entered
		$msg = "Please enter a valid search key.";
	} else { // Initiate query
		$msg = ' ';
		$search = mysqli_real_escape_string($connection, trim($_POST['search']));
		$query = "SELECT LPAD(customer_id, 7, 0) AS customer_id, first_name, last_name, phone, email, street_address, city, state, zip FROM customers WHERE customer_id='{$search}' OR phone='{$search}'";
		$result = mysqli_query($connection, $query);
		$rows = mysqli_num_rows($result);
				 
		if ($rows == 1) { // If anything happened
			while($row = mysqli_fetch_assoc($result)) {
				$data[] = $row;
			} 
		} else { // If nothing happened
			$msg = "There was an error in your query. Please try again.";
			header("location: /customers.php");
		}
	}
	
} else {
	// Defaut: Display all employee data
	$sql = 'SELECT * FROM customers';

	$result = mysqli_query($connection,$sql);

	while($row = mysqli_fetch_assoc($result)) {
		$data[] = $row;
	}

}

/* Close the connection
mysqli_free_result($result);
mysqli_close($connection); */

// Display data on template
$smarty->assign('title', 'Customers');
$smarty->assign('data', $data);
$smarty->assign('msg', $msg);
$smarty->assign('navTitle', 'Customers');
$smarty->assign('currPage', 'Customers');
$smarty->display('resources/smarty/templates/customer_search.tpl');
?>