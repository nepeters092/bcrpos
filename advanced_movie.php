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
	if(!empty($_POST['filmId'])) {
		
		$filmId = mysqli_real_escape_string($connection, trim($_POST['filmId'])); 
		$filmIdQuery = "movies.film_id = '{$filmId}'";
		array_push($searchParam, $filmIdQuery);
		
	}
	
	if(!empty($_POST['filmTitle'])) {
		
		$filmTitle = mysqli_real_escape_string($connection, trim($_POST['filmTitle'])); 
		$filmTitleQuery = "movies.title = '{$filmTitle}'";
		array_push($searchParam, $filmTitleQuery);
		
	}
	
	if(!empty($_POST['genre'])) {
		$genre = $_POST['genre'];
		$genreQuery = "movies.genre = '{$genre}'";
		array_push($searchParam, $genreQuery);
	}
	
	if(!empty($_POST['rentalCat'])) {
		$cat = $_POST['rentalCat'];
		$catQuery = "movies.rental_category = '{$cat}'";
		array_push($searchParam, $catQuery);
	}
	
	
	// Determines number of results
	if(isset($_POST['isRented'])) {
		$rentQuery = "movies.rented = 1";
		array_push($searchParam, $rentQuery);
	}
	
	// If any field is completed
	if(empty($searchParam)) {
		
		$msg = "You must enter at least one search parameter.";
		
	} else {
		
		$addendum = implode(" ". "AND" . " ", $searchParam) . " " .		$entryLimitQuery;
		
		$sql = "SELECT movies.film_id, movies.title, movies.genre, movies.release_year, movies.rental_category, movies.customer_rating, GROUP_CONCAT(DISTINCT actors.name SEPARATOR ', ') AS actor, GROUP_CONCAT(DISTINCT directors.director_name SEPARATOR ', ') AS director FROM movies
				LEFT JOIN actor_film ON actor_film.film_id = movies.film_id
				LEFT JOIN actors ON actors.actor_id = actor_film.actor_id
				LEFT JOIN director_film ON director_film.film_id = movies.film_id
				LEFT JOIN directors ON directors.director_id = director_film.director_id
				WHERE " . $addendum . "GROUP BY movies.film_id";
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
$smarty->assign('title', 'Advanced Search');
$smarty->assign('navTitle', 'Advanced Search');
$smarty->assign('currPage', '<a href="/movies.php">Movies</a> / Advanced Search');
$smarty->display('resources/smarty/templates/advanced_movie.tpl');
?>