<?php
require_once ('resources/smarty/smartyHeader.php');
include ('session.php');

$msg = ' ';

// If form is submitted
if($_SERVER['REQUEST_METHOD'] == 'POST') {

	// Check for form completion
	if(empty($_POST['search'])) {
		$errors[] = 'Please enter a valid search key.';
	} else {
		$search = mysqli_real_escape_string($connection, trim($_POST['search']));
	}
	
	if (empty($errors)) { // If everything's OK.
		$query = "select movies.film_id, movies.title, movies.genre, movies.release_year, rental_categories.price
		from movies
		inner join rental_categories
		on movies.rental_category = rental_categories.category
		where film_id = '{$search}'";
		  
		$result = mysqli_query($connection, $query);
		  
		if (mysqli_affected_rows($connection) == 1) { // Should be one row affected by previous query.
			 
			while($row = mysqli_fetch_assoc($result)) {
				
				$data[] = $row;
				$_SESSION['data'] = $data;
				$_SESSION['film_id'] = $row['film_id'];
				$_SESSION['price'] = $row['price'];
				$_SESSION['title'] = $row['title'];
				
			} 
			  
		}	  
	} else {
		
		
	}
	
} 

// Display data on template
$smarty->assign('title', 'ID Lookup');
$smarty->assign('data', $_SESSION['data']);
$smarty->assign('navTitle', 'Sale');
$smarty->assign('msg', $msg);
$smarty->assign('currPage', 'ID Lookup');
$smarty->display('resources/smarty/templates/id_lookup.tpl');
?>