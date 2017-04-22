<?php
// TO DO: Make rows sortable.
require_once ('resources/smarty/smartyHeader.php');
include ('session.php');

$smarty = new Smarty;

// Default values 
$previous = "";
$next = "";
$firstLink = "";
$nextLink = "";
$prevLink = "";
$lastLink = "";
$pagenum = 1;
$page_rows= "";
$last = "";
$data2 = "";
$msg = "";
$backButton = "";
$test = "";


// NOTE : The code on this page is very redundant. Should consider checking to see if there is a more efficient way to do this.

if($_SERVER['REQUEST_METHOD'] == "POST") { // If search button is pressed

	if(empty($_POST['search'])) { // If form is empty
		$msg = 'Please enter a valid search key.'; // Return an error
		
		// Allow rows to be sortable
		$orderBy = array('id', 'last_name', 'first_name', 'street_address', 'city', 'state', 'zip', 'email', 'phone');
		$order = 'customer_id';
		if (isset($_GET['orderBy']) && in_array($_GET['orderBy'], $orderBy)) {
			$order = $_GET['orderBy'];
		}

		// Checks if page number is set
		if(isset($_GET['pagenum'])) {
			$pagenum = $_GET['pagenum'];
		}

		// Grab all customer data
		$sql = 'SELECT * FROM customers ORDER BY '.$order;
		$result = mysqli_query($connection,$sql);
		while($row = mysqli_fetch_assoc($result)) {
			$data[] = $row;
			$id = $row['customer_id'];
		}

		// Counts and limits number of results
		$rows = mysqli_num_rows($result);
		$page_rows = 12;

		$last = ceil($rows/$page_rows);
		if ($pagenum < 1) {
			$pagenum = 1;
		} else if ($pagenum > $last) {
			$pagenum = $last;
		}
		$max = 'LIMIT '.($pagenum-1)*$page_rows .',' .$page_rows;

		// Grabs SQL data with limit 
		$sql = 'SELECT * FROM customers '.$max;
		$result = mysqli_query($connection,$sql);
		while($row = mysqli_fetch_assoc($result)) {
			$data2[] = $row;
			$id = $row['customer_id'];
		}

		if($pagenum == 1) {
				
		} else {
			$firstLink = "<a href='{$_SERVER['PHP_SELF']}?pagenum=1'><i class='fa fa-angle-double-left' aria-hidden='true'></i> First</a>";
			$previous = $pagenum-1;
			$prevLink = "<a href='{$_SERVER['PHP_SELF']}?pagenum=$previous'><i class='fa fa-angle-left' aria-hidden='true'></i> Previous</a>";
		}
		if ($pagenum == $last) {
			
		} else {
			$next = $pagenum +1;
			$nextLink = "<a href='{$_SERVER['PHP_SELF']}?pagenum=$next'>Next <i class='fa fa-angle-right' aria-hidden='true'></i></a>";
			$lastLink = "<a href='{$_SERVER['PHP_SELF']}?pagenum=$last'>Last <i class='fa fa-angle-double-right' aria-hidden='true'></i></a>";
		}
	
	} else { // If form is not empty, begin query	
		$search = mysqli_real_escape_string($connection, trim($_POST['search']));
		$sql = "SELECT LPAD(customer_id, 7, 0) AS customer_id, first_name, last_name, phone, email, street_address, city, state, zip FROM customers WHERE customer_id='{$search}' OR phone='{$search}'";
		$result = mysqli_query($connection, $sql);
		$rows = mysqli_num_rows($result);
	
		if($rows >= 1) { // Query should return at least one result
			while($row = mysqli_fetch_assoc($result)) {
				$data2[] = $row;
				$id = $row['customer_id'];
				$backButton = '<a href="" name="backButton">Clear Search</a>'; // Allows you to return to default view
			} 
		} else { 
			$msg = 'Your search yielded no results.';
			
			// Allow rows to be sortable
			$orderBy = array('id', 'last_name', 'first_name', 'street_address', 'city', 'state', 'zip', 'email', 'phone');
			$order = 'customer_id';
			if (isset($_GET['orderBy']) && in_array($_GET['orderBy'], $orderBy)) {
				$order = $_GET['orderBy'];
			}

			// Checks if page number is set
			if(isset($_GET['pagenum'])) {
				$pagenum = $_GET['pagenum'];
			}

			// Grab all customer data
			$sql = 'SELECT * FROM customers ORDER BY '.$order;
			$result = mysqli_query($connection,$sql);
			while($row = mysqli_fetch_assoc($result)) {
				$data[] = $row;
				$id = $row['customer_id'];
			}

			// Counts and limits number of results
			$rows = mysqli_num_rows($result);
			$page_rows = 12;

			$last = ceil($rows/$page_rows);
			if ($pagenum < 1) {
				$pagenum = 1;
			} else if ($pagenum > $last) {
				$pagenum = $last;
			}
			$max = 'LIMIT '.($pagenum-1)*$page_rows .',' .$page_rows;

			// Grabs SQL data with limit 
			$sql = 'SELECT * FROM customers '.$max;
			$result = mysqli_query($connection,$sql);
			while($row = mysqli_fetch_assoc($result)) {
				$data2[] = $row;
				$id = $row['customer_id'];
			}

			if($pagenum == 1) {
					
			} else {
				$firstLink = "<a href='{$_SERVER['PHP_SELF']}?pagenum=1'><i class='fa fa-angle-double-left' aria-hidden='true'></i> First</a>";
				$previous = $pagenum-1;
				$prevLink = "<a href='{$_SERVER['PHP_SELF']}?pagenum=$previous'><i class='fa fa-angle-left' aria-hidden='true'></i> Previous</a>";
			}
			if ($pagenum == $last) {
				
			} else {
				$next = $pagenum +1;
				$nextLink = "<a href='{$_SERVER['PHP_SELF']}?pagenum=$next'>Next <i class='fa fa-angle-right' aria-hidden='true'></i></a>";
				$lastLink = "<a href='{$_SERVER['PHP_SELF']}?pagenum=$last'>Last <i class='fa fa-angle-double-right' aria-hidden='true'></i></a>";
			}
		}
		
	}
	
} else { // Default page view
		// Allow rows to be sortable
		$orderBy = array('id', 'last_name', 'first_name', 'street_address', 'city', 'state', 'zip', 'email', 'phone');
		$order = 'customer_id';
		if (isset($_GET['orderBy']) && in_array($_GET['orderBy'], $orderBy)) {
			$order = $_GET['orderBy'];
		}

		// Checks if page number is set
		if(isset($_GET['pagenum'])) {
			$pagenum = $_GET['pagenum'];
		}

		// Grab all customer data
		$sql = 'SELECT * FROM customers ORDER BY '.$order;
		$result = mysqli_query($connection,$sql);
		while($row = mysqli_fetch_assoc($result)) {
			$data[] = $row;
		}

		// Counts and limits number of results
		$rows = mysqli_num_rows($result);
		$page_rows = 12;

		$last = ceil($rows/$page_rows);
		if ($pagenum < 1) {
			$pagenum = 1;
		} else if ($pagenum > $last) {
			$pagenum = $last;
		}
		$max = 'LIMIT '.($pagenum-1)*$page_rows .',' .$page_rows;

		// Grabs SQL data with limit 
		$sql = 'SELECT * FROM customers '.$max;
		$result = mysqli_query($connection,$sql);
		while($row = mysqli_fetch_assoc($result)) {
			$data2[] = $row;
			$id = $row['customer_id'];
		}

		if($pagenum == 1) {
				
		} else {
			$firstLink = "<a href='{$_SERVER['PHP_SELF']}?pagenum=1'><i class='fa fa-angle-double-left' aria-hidden='true'></i> First</a>";
			$previous = $pagenum-1;
			$prevLink = "<a href='{$_SERVER['PHP_SELF']}?pagenum=$previous'><i class='fa fa-angle-left' aria-hidden='true'></i> Previous</a>";
		}
		if ($pagenum == $last) {
			
		} else {
			$next = $pagenum +1;
			$nextLink = "<a href='{$_SERVER['PHP_SELF']}?pagenum=$next'>Next <i class='fa fa-angle-right' aria-hidden='true'></i></a>";
			$lastLink = "<a href='{$_SERVER['PHP_SELF']}?pagenum=$last'>Last <i class='fa fa-angle-double-right' aria-hidden='true'></i></a>";
		}
		
}

// Returns to default view as if back button is pushed
if(isset($_POST['backButton'])) {
	// Allow rows to be sortable
	$orderBy = array('id', 'last_name', 'first_name', 'street_address', 'city', 'state', 'zip', 'email', 'phone');
	$order = 'customer_id';
	if (isset($_GET['orderBy']) && in_array($_GET['orderBy'], $orderBy)) {
		$order = $_GET['orderBy'];
	}

	// Checks if page number is set
	if(isset($_GET['pagenum'])) {
		$pagenum = $_GET['pagenum'];
	}

	// Grab all customer data
	$sql = 'SELECT * FROM customers ORDER BY '.$order;
	$result = mysqli_query($connection,$sql);
	while($row = mysqli_fetch_assoc($result)) {
		$data[] = $row;
		$backButton = "";
		$id = $row['customer_id'];
	}

	// Counts and limits number of results
	$rows = mysqli_num_rows($result);
	$page_rows = 12;

	$last = ceil($rows/$page_rows);
	if ($pagenum < 1) {
		$pagenum = 1;
	} else if ($pagenum > $last) {
		$pagenum = $last;
	}
	$max = 'LIMIT '.($pagenum-1)*$page_rows .',' .$page_rows;

	// Grabs SQL data with limit 
	$sql = 'SELECT * FROM customers '.$max;
	$result = mysqli_query($connection,$sql);
	while($row = mysqli_fetch_assoc($result)) {
		$data2[] = $row;
	}

	if($pagenum == 1) {
				
	} else {
		$firstLink = "<a href='{$_SERVER['PHP_SELF']}?pagenum=1'><i class='fa fa-angle-double-left' aria-hidden='true'></i> First</a>";
		$previous = $pagenum-1;
		$prevLink = "<a href='{$_SERVER['PHP_SELF']}?pagenum=$previous'><i class='fa fa-angle-left' aria-hidden='true'></i> Previous</a>";
	}
	if ($pagenum == $last) {
			
	} else {
		$next = $pagenum +1;
		$nextLink = "<a href='{$_SERVER['PHP_SELF']}?pagenum=$next'>Next <i class='fa fa-angle-right' aria-hidden='true'></i></a>";
		$lastLink = "<a href='{$_SERVER['PHP_SELF']}?pagenum=$last'>Last <i class='fa fa-angle-double-right' aria-hidden='true'></i></a>";
	}
}

// Clear connection
mysqli_close($connection);

// Display results to template
$smarty->assign('data', $data2);
$smarty->assign('page_rows', $page_rows);
$smarty->assign('pagenum', $pagenum);
$smarty->assign('last', $last);
$smarty->assign('previous', $previous);
$smarty->assign('next', $next);
$smarty->assign('firstLink', $firstLink);
$smarty->assign('lastLink', $lastLink);
$smarty->assign('nextLink', $nextLink);
$smarty->assign('prevLink', $prevLink);
$smarty->assign('msg', $msg);
$smarty->assign('backButton', $backButton);
$smarty->assign('title', 'Customers');
$smarty->assign('navTitle', 'Customers');
$smarty->assign('currPage', 'Customers');
$smarty->display('resources/smarty/templates/customers.tpl');
$smarty->display('resources/smarty/templates/nav.tpl');
?>