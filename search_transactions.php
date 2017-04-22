<?php
require_once ('resources/smarty/smartyHeader.php');
include ('session.php');

$data = [];
$addendum = "";
$searchParam = []; 
$entryLimitQuery = "";
$msg = "";

if($_SERVER['REQUEST_METHOD'] == "POST") { // If search button is pressed
	
	// If a field is completed, values are added to the end of the array
	if(!empty($_POST['custId'])) {
		
		$custId = mysqli_real_escape_string($connection, trim($_POST['custId'])); 
		$custIdQuery = "transactions.customer_id = '{$custId}'";
		array_push($searchParam, $custIdQuery);
		
	}
	
	if(!empty($_POST['custName'])) {
		
		$custName = mysqli_real_escape_string($connection, trim($_POST['custName'])); 
		$custNameQuery = "customers.last_name = '{$custName}'";
		array_push($searchParam, $custNameQuery);
		
	}
	
	if(!(empty($_POST['filmId']))) {
		
		$filmId = mysqli_real_escape_string($connection, trim($_POST['filmId'])); 
		$filmIdQuery = "orderline.film_id = '{$filmId}'";
		array_push($searchParam, $filmIdQuery);
		
	}
	
	if(!(empty($_POST['filmTitle']))) {
		
		$filmTitle = mysqli_real_escape_string($connection, trim($_POST['filmTitle'])); 
		$filmTitleQuery = "movies.title = '{$filmTitle}'";
		array_push($searchParam, $filmTitleQuery);
		
	} 
	
	if(!(empty($_POST['transDate']))) {
		
		$transDate = mysqli_real_escape_string($connection, trim($_POST['transDate'])); 
		$transDateQuery = "transactions.date = '{$transDate}'";
		array_push($searchParam, $transDateQuery);
		
	} 
	
	if(!empty($_POST['empName'])) {
		
		$empName = mysqli_real_escape_string($connection, trim($_POST['empName']));
		$empNameQuery = "employees.first_name = '{$empName}'";
		array_push($searchParam, $empNameQuery);
		
	}
	
	// Determines number of results
	if(isset($_POST['entryLimit'])) {
		
		if(empty($searchParam)) {

			$msg = "You must enter at least one search paramter.";
		
		} else {
			
			if(($_POST['entryLimit']) == 'lastFive' ) {
				
				$entryLimitQuery = 'LIMIT 5';
				
			}
			
			if(($_POST['entryLimit']) == 'lastFifty' ) {
				
				$entryLimitQuery = 'LIMIT 50';
				
			}
			
			if(($_POST['entryLimit']) == 'lastHundred' ) {
				
				$entryLimitQuery = 'LIMIT 100';
				
			}
			
		}
		
	}
	
	// If any field is completed
	if(empty($searchParam)) {
		
		$msg = "You must enter at least one search parameter.";
		
	} else {
		
		$addendum = implode(" ". "AND" . " ", $searchParam) . " " .		$entryLimitQuery;
		
		$sql = 'SELECT transactions.customer_id, transactions.transaction_id, CONCAT(customers.first_name, " ", customers.last_name) AS customer_name, employees.first_name, transactions.time, transactions.date, transactions.total FROM transactions INNER JOIN customers ON transactions.customer_id = customers.customer_id INNER JOIN employees ON transactions.employee_id = employees.employee_id INNER JOIN orderline ON transactions.transaction_id = orderline.transaction_id INNER JOIN movies ON orderline.film_id = movies.film_id WHERE ' .$addendum;
		$result = mysqli_query($connection,$sql);
		
		if(mysqli_affected_rows($connection) >= 1) {
			while($row = mysqli_fetch_assoc($result)) {
				$data[] = $row;
			}
			mysqli_free_result($result);
		} else {
			$msg = "Your search returned zero results.";
		}
	}
}

// Clear connection
mysqli_close($connection);

// Display results to template
$smarty->assign('data', $data);
$smarty->assign('msg', $msg);
$smarty->assign('title', 'Search Transactions');
$smarty->assign('navTitle', 'Search Transactions');
$smarty->assign('currPage', '<a href="/transactions.php">Transactions</a> / Search');
$smarty->display('resources/smarty/templates/search_transactions.tpl');
?>