<?php
require_once ('resources/smarty/smartyHeader.php');
include ('session.php');

$smarty = new Smarty;

// Default values
$hasPhotoId = 'false';
$hasAddrVer = 'false';
$photoId_arr = [];
$addrVer_arr = [];
$errors = [];
$msg = "";
$data = [];


// If submit button is clicked
if (isset($_POST['submitNewCustForm'])) {
	
	// Begin by checking if fields are completed
	if(empty($_POST['title'])) {
		array_push($errors, "You must enter a title.");
	} else {
		$title = mysqli_real_escape_string($connection, trim($_POST['title']));
		$_SESSION['title'] = $title;
	}
	
	if(empty($_POST['year'])) {
		array_push($errors, "You must enter a release year.");
	} else { // If not empty
		if (strlen($_POST['year']) !== 4) { // String length must be 4
			array_push($errors, "Invalid year format.");
		} else {
			$year = mysqli_real_escape_string($connection, trim($_POST['year']));
			$_SESSION['year'] = $year;
		}
	}
	
	if(empty($_POST['genre'])) {
		array_push($errors, "You must select a genre.");
	} else {
		$genre = $_POST['genre'];
	}
	
	if(empty($_POST['rentalCat'])) {
		array_push($errors, "You must select a rental category.");
	} else {
		$category = $_POST['rentalCat'];
	}
	
	// If there are no errors 
	if (empty($errors)) {
			
		// Check for duplicates
		$duplicateQuery = "SELECT * FROM movies WHERE title = '{$title}' AND release_year = '{$year}'";
		$duplicateResult = mysqli_query($connection, $duplicateQuery);

		// If there is a match
		if(mysqli_affected_rows($connection)) {
			array_push($errors, "Duplicate entry. Please try again.");
				
		} else { // If it's an original
			
			$movieAdd = "INSERT INTO movies (title, release_year, genre, rental_category) VALUES ('{$title}', '{$year}', '{$genre}', '{$category}')";
			$movieResult = mysqli_query($connection, $movieAdd);
				
			if(mysqli_affected_rows($connection)) {
					
				header("Location: actor_director.php");
					
			} else {
					
				array_push($errors, 'An error occured with your request. Please try again.');
					
			}
				
		}
	} 	
}


// Display data on template
$smarty->assign('msg', $msg);
$smarty->assign('errors', implode('<br />', $errors));
$smarty->assign('title', 'Add Movie');
$smarty->assign('navTitle', 'Add Movie');
$smarty->assign('currPage', '<a href="/movies.php">Movies</a> / Add Movies');
$smarty->display('resources/smarty/templates/add_film.tpl');
?>