<?php
// TO DO: Make rows sortable.
require_once ('resources/smarty/smartyHeader.php');
include ('session.php');

$smarty = new Smarty;

$editParam = [];
$data = [];
$actorData = [];
$dirData = [];
$msg = "";
$addtlInput = "";
$errors = [];


// Display custom film information
$id = $_GET['film_id'];
$trimId = ltrim($id, "0");
$_SESSION['trimId'] = $trimId;

$sql = "SELECT LPAD(movies.film_id, 7, 0) AS film_id, movies.title, movies.rental_category, GROUP_CONCAT(DISTINCT directors.director_name SEPARATOR ', ') AS director_name, movies.genre, movies.release_year, GROUP_CONCAT(DISTINCT actors.name SEPARATOR ', ') AS actor_name FROM movies LEFT JOIN director_film ON movies.film_id = director_film.film_id LEFT JOIN directors ON director_film.director_id = directors.director_id LEFT JOIN actor_film ON movies.film_id = actor_film.film_id LEFT JOIN actors ON actor_film.actor_id = actors.actor_id WHERE movies.film_id = '{$trimId}' GROUP BY movies.film_id LIMIT 1";
$result = mysqli_query($connection,$sql);

while($row = mysqli_fetch_assoc($result)) {
	$data[] = $row;
	$rent = $row['rental_category'];
	$genre = $row['genre'];
	$_SESSION['title'] = $row['title'];
	$_SESSION['year'] = $row['release_year'];
}

mysqli_free_result($result);

// Grabs actors for mulitple select
$actorQuery = "SELECT actors.name, actor_film.actor_id FROM actor_film INNER JOIN actors ON actor_film.actor_id = actors.actor_id WHERE actor_film.film_id = '{$trimId}'";
$actorResult = mysqli_query($connection,$actorQuery);

while ($actorRow = mysqli_fetch_assoc($actorResult)) {
	$actorData[] = $actorRow;
}

mysqli_free_result($actorResult);

// Grabs directors for mulitple select
$dirQuery = "SELECT director_film.director_id, directors.director_name FROM director_film INNER JOIN directors ON director_film.director_id = directors.director_id WHERE director_film.film_id = '{$trimId}'";
$dirResult = mysqli_query($connection,$dirQuery);

while ($dirRow = mysqli_fetch_assoc($dirResult)) {
	$dirData[] = $dirRow;
	$id = $dirRow['director_id'];
}

mysqli_free_result($dirResult);

// Determine default value of rental category
switch ($rent) {
	case "pop":
		echo "<script type='text/javascript'>$(document).ready(function() { $('#rentalCat').val('pop'); });</script>";
		break;
	case "crel":
		echo "<script type='text/javascript'>$(document).ready(function() { $('#rentalCat').val('crel'); });</script>";
		break;
	case "chit":
		echo "<script type='text/javascript'>$(document).ready(function() { $('#rentalCat').val('chit'); });</script>";
		break;
	case "reg":
		echo "<script type='text/javascript'>$(document).ready(function() { $('#rentalCat').val('reg'); });</script>";
}

// Determine default value of genre category
switch ($genre) {
	case "action":
		echo "<script type='text/javascript'>$(document).ready(function() { $('#genre').val('action'); });</script>";
		break;
	case "comedy":
		echo "<script type='text/javascript'>$(document).ready(function() { $('#genre').val('comedy'); });</script>";
		break;
	case "documentary":
		echo "<script type='text/javascript'>$(document).ready(function() { $('#genre').val('documentary'); });</script>";
		break;
	case "drama":
		echo "<script type='text/javascript'>$(document).ready(function() { $('#genre').val('drama'); });</script>";
		break;
	case "family":
		echo "<script type='text/javascript'>$(document).ready(function() { $('#genre').val('family'); });</script>";
		break;
	case "fantasy":
		echo "<script type='text/javascript'>$(document).ready(function() { $('#genre').val('fantasy'); });</script>";
		break;
	case "horror":
		echo "<script type='text/javascript'>$(document).ready(function() { $('#genre').val('horror'); });</script>";
		break;
	case "romance":
		echo "<script type='text/javascript'>$(document).ready(function() { $('#genre').val('romance'); });</script>";
		break;
	case "scifi":
		echo "<script type='text/javascript'>$(document).ready(function() { $('#genre').val('scifi'); });</script>";
		break;
	case "thriller":
		echo "<script type='text/javascript'>$(document).ready(function() { $('#genre').val('thriller'); });</script>";
		break;
	default: 
		echo "<script type='text/javascript'>$(document).ready(function() { $('#genre').val('uncat'); });</script>";
}

// If submit button is clicked
if (isset($_POST['editCustomer'])) {
	
	// Title field has content
	if (!empty($_POST['title'])) {
		$title = mysqli_real_escape_string($connection, trim($_POST['title']));
		$titleQuery = "title = '{$title}'";
		array_push($editParam, $titleQuery);
	}
	
	// Release year field has content
	if(!empty($_POST['releaseYear'])) {
		$year = mysqli_real_escape_string($connection, trim($_POST['releaseYear']));
		$yearQuery = "release_year = '{$year}'";
		array_push($editParam, $yearQuery);
	}
	
	if(!empty($_POST['genre'])) {
		$genre = $_POST['genre'];
		$genreQuery = "genre = '{$genre}'";
		array_push($editParam, $genreQuery);
	}
	
	if(!empty($_POST['rentalCat'])) {
		$rentalCat = $_POST['rentalCat'];
		$rentalQuery = "rental_category = '{$rentalCat}'";
		array_push($editParam, $rentalQuery);
	}
	
	// If the additional actor field is filled out
	if(!empty($_POST['addAct'])) {
		$addedActor = mysqli_real_escape_string($connection, trim($_POST['addAct']));
		
		// Check for existing actor
		$check = "SELECT actor_id FROM actors WHERE name = '{$addedActor}'";
		$checkResult = mysqli_query($connection,$check);
		
		// If there's a match
		if(mysqli_affected_rows($connection) == 1) {
			
			// Store the actor ID
			while($matchRow = mysqli_fetch_assoc($checkResult)) {
				$matchId = $matchRow['actor_id'];
			}
			
			// Add the entry to actor_film table
			$linkRequest = "INSERT INTO actor_film (actor_id, film_id) VALUES ('{$matchId}', '{$trimId}')";
			$linkResult = mysqli_query($connection,$linkRequest);
				
			// If the entry was successfully added
			if(mysqli_affected_rows($connection) == 1) {
				$msg = "Actor added successfully.";
				mysqli_free_result($linkResult);
				echo "<meta http-equiv='refresh' content='0'>";
			} else {
				$msg = "There was an error in your request. Please try again.";
			}
			
		} else { // If there is not an existing match, actor not in database
			
			// Add the actor to database
			$addRequest = "INSERT INTO actors (name) VALUES ('{$addedActor}')";
			$addResult = mysqli_query($connection,$addRequest);
			mysqli_free_result($addResult);
			
			// Retrieve the new actor id
			$idRequest = "SELECT actor_id FROM actors WHERE name='{$addedActor}'";
			$idResult = mysqli_query($connection,$idRequest);
			while($idRow = mysqli_fetch_assoc($idResult)) {
				$newId = $idRow['actor_id'];
			}
			
			// Add the entry to actor_film table
			$linkRequest = "INSERT INTO actor_film (actor_id, film_id) VALUES ('{$newId}', '{$trimId}')";
			$linkResult = mysqli_query($connection,$linkRequest);
			
			// If the entry was successfully added
			if(mysqli_affected_rows($connection) == 1) {
				$msg = "Actor added successfully.";
				mysqli_free_result($linkResult);
				echo "<meta http-equiv='refresh' content='0'>";
			} else {
				$msg = "There was an error in your request. Please try again.";
			}

		}
		
	}
	
	// If there's something to edit
	if (!empty($editParam)) { 
		// Statement for updating table
		$addendum = implode(", ", $editParam);
		$updateSql = "UPDATE movies SET " .$addendum . " WHERE film_id = '{$trimId}' LIMIT 1";
		$updateResult = mysqli_query($connection,$updateSql);
		
		// If it works
		if(mysqli_affected_rows($connection) >= 1) {
			$msg = "Update successful.";
			echo "<meta http-equiv='refresh' content='0'>";
		} else {
			array_push($errors, "There was an error with your request. Please try again.");
		}
		
	}	
}

$smarty->assign('addtlInput', $addtlInput);
$smarty->assign('msg', $msg);
$smarty->assign('rent', $rent);
$smarty->assign('trimId', $trimId);
$smarty->assign('data', $data);
$smarty->assign('actorData', $actorData);
$smarty->assign('dirData', $dirData);
$smarty->assign('title', 'Edit Movie');
$smarty->assign('navTitle', 'Edit Movie');
$smarty->assign('currPage', '<a href="/movies.php">Movies</a> / Edit Movie');
$smarty->display('resources/smarty/templates/edit_film.tpl');
?>