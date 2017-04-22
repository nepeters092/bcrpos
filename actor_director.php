<?php
require_once ('resources/smarty/smartyHeader.php');
include ('session.php');

$smarty = new Smarty;
$msg = "";

// Default values
$requestData = "SELECT movies.film_id AS film_id, movies.title, GROUP_CONCAT(DISTINCT directors.director_name SEPARATOR ', ') AS director_name, movies.genre, movies.release_year, movies.rental_category, GROUP_CONCAT(DISTINCT actors.name SEPARATOR ', ') AS actor_name FROM movies LEFT JOIN director_film ON movies.film_id = director_film.film_id LEFT JOIN directors ON director_film.director_id = directors.director_id LEFT JOIN actor_film ON movies.film_id = actor_film.film_id LEFT JOIN actors ON actor_film.actor_id = actors.actor_id WHERE title = '{$_SESSION['title']}' AND release_year = '{$_SESSION['year']}' GROUP BY movies.film_id";
$dataResult = mysqli_query($connection,$requestData);
				
// Get new film data
while ($row = mysqli_fetch_assoc($dataResult)) {
	$data[] = $row;
	$_SESSION['film_id'] = $row['film_id'];
}

mysqli_free_result($dataResult);

if (isset($_POST['add'])) {
	
	if (!empty($_POST['actor'])) {
		$actor = mysqli_real_escape_string($connection, trim($_POST['actor']));
		
		// Search for existing actor
		$searchActor = "SELECT actor_id FROM actors WHERE name = '{$actor}'";
		$searchResult = mysqli_query($connection,$searchActor);
		// If there's a match
		if (mysqli_affected_rows($connection)) {
			// Store actor ID as variable
			while($actRow = mysqli_fetch_assoc($searchResult)) {
				$actorId = $actRow['actor_id'];
			}
			// Check to see if actor entry already exists
			mysqli_free_result($searchResult);
			$duplicateCheck = "SELECT actor_id FROM actor_film WHERE actor_id = '{$actorId}' AND film_id = '{$_SESSION['film_id']}'";
			$duplicateResult = mysqli_query($connection,$duplicateCheck);
			// If there's no existing row
			if(mysqli_num_rows($duplicateResult) == NULL) {
				// Link the actor to the film
				$actorAdd = "INSERT INTO actor_film (actor_id, film_id) VALUES ('{$actorId}', '{$_SESSION['film_id']}')";
				$actorResult = mysqli_query($connection,$actorAdd);
				// If all is good
				if (mysqli_affected_rows($connection)) {
					$msg = 'Actor added successfully.';
					echo "<meta http-equiv='refresh' content='0'>";	
				} else { // If there's a problem
					$msg = 'There was a problem with your request. Please try again';
				}
			} else {
				$msg = "Duplicate entry.";
			}
		} else { // If there is no existing actor
			// Add a new entry for the actor
			$newActor = mysqli_prepare($connection, "INSERT INTO actors (name) VALUES ('{$actor}')");
			mysqli_stmt_execute($newActor);
			// If insertion is successful
			if (mysqli_affected_rows($connection)) {
				$retrieveNew = "SELECT actor_id FROM actors WHERE name = '{$actor}'";
				$retrieveResult = mysqli_query($connection, $retrieveNew);
				while($newRow = mysqli_fetch_assoc($retrieveResult)) {
					$actorId = $newRow['actor_id'];
				}
				// Link actor to film entry
				$linkNew = "INSERT INTO actor_film (actor_id, film_id) VALUES ('{$actorId}', '{$_SESSION['film_id']}')";
				$linkResult = mysqli_query($connection,$linkNew);
				// If successful link is made
				if(mysqli_affected_rows($connection)) {
					$msg = 'Actor added successfully.';
					echo "<meta http-equiv='refresh' content='0'>";	
				} else {
					$msg = 'There was a problem with your request. Please try again';
				} 
			} else {
				$msg = 'There was a problem with your request. Please try again';
			}
		}
	}
	
}

if (isset($_POST['addDir'])) {
	
	if (!empty($_POST['director'])) {
		$director = mysqli_real_escape_string($connection, trim($_POST['director']));
		
		// Search for existing director
		$searchdirector = "SELECT director_id FROM directors WHERE director_name = '{$director}'";
		$dirResult = mysqli_query($connection,$searchdirector);
		// If there's a match
		if (mysqli_affected_rows($connection)) {
			// Store director ID as variable
			while($dirRow = mysqli_fetch_assoc($dirResult)) {
				$directorId = $dirRow['director_id'];
			}
			// Check to see if director entry already exists
			mysqli_free_result($dirResult);
			$duplicateCheck = "SELECT director_id FROM director_film WHERE director_id = '{$directorId}' AND film_id = '{$_SESSION['film_id']}'";
			$duplicateResult = mysqli_query($connection,$duplicateCheck);
			// If there's no existing row
			if(mysqli_num_rows($duplicateResult) == NULL) {
				// Link the director to the film
				$directorAdd = "INSERT INTO director_film (director_id, film_id) VALUES ('{$directorId}', '{$_SESSION['film_id']}')";
				$directorResult = mysqli_query($connection,$directorAdd);
				// If all is good
				if (mysqli_num_rows($directorResult)) {
					$msg = 'Director added successfully.';
					echo "<meta http-equiv='refresh' content='0'>";	
				} else { // If there's a problem
					$msg = 'There was a problem with your request. Please try again';
				}
			} else {
				$msg = "Duplicate entry.";
			}
		} else { // If there is no existing director
			// Add a new entry for the director
			$newDirector = mysqli_prepare($connection, "INSERT INTO directors (director_name) VALUES ('{$director}')");
			mysqli_stmt_execute($newDirector);
			// If insertion is successful
			if (mysqli_affected_rows($connection)) {
				$retrieveNew = "SELECT director_id FROM directors WHERE director_name = '{$director}'";
				$retrieveResult = mysqli_query($connection, $retrieveNew);
				while($newRow = mysqli_fetch_assoc($retrieveResult)) {
					$directorId = $newRow['director_id'];
				}
				// Link director to film entry
				$linkNew = "INSERT INTO director_film (director_id, film_id) VALUES ('{$directorId}', '{$_SESSION['film_id']}')";
				$linkResult = mysqli_query($connection,$linkNew);
				// If successful link is made
				if(mysqli_affected_rows($connection)) {
					$msg = 'director added successfully.';
					echo "<meta http-equiv='refresh' content='0'>";	
				} else {
					$msg = 'There was a problem with your request. Please try again';
				} 
			} else {
				$msg = 'There was a problem with your request. Please try again';
			}
		}
	}
	
}
	
// Display data on template
$smarty->assign('msg', $msg);
$smarty->assign('data', $data);
$smarty->assign('title', 'Add Details');
$smarty->assign('navTitle', 'Add Details');
$smarty->assign('currPage', '<a href="/movies.php">Movies</a> / Add Details');
$smarty->display('resources/smarty/templates/actor_director.tpl');
?>