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
$data = [];
$data2 = [];
$msg = "";
$backButton = "";
$test = "";


// NOTE : The code on this page is very redundant. Should consider checking to see if there is a more efficient way to do this.

if($_SERVER['REQUEST_METHOD'] == "POST") { // If search button is pressed

	if(empty($_POST['search'])) { // If form is empty
		$msg = 'Please enter a valid search key.'; // Return an error

		// Checks if page number is set
		if(isset($_GET['pagenum'])) {
			$pagenum = $_GET['pagenum'];
		}

		// Grabs 10 latest movies (default view)
		$sql = "SELECT LPAD(movies.film_id, 7, 0) AS film_id, movies.title, GROUP_CONCAT(DISTINCT directors.director_name SEPARATOR ', ') AS director_name, movies.genre, movies.release_year, GROUP_CONCAT(DISTINCT actors.name SEPARATOR ', ') AS actor_name FROM movies LEFT JOIN director_film ON movies.film_id = director_film.film_id LEFT JOIN directors ON director_film.director_id = directors.director_id LEFT JOIN actor_film ON movies.film_id = actor_film.film_id LEFT JOIN actors ON actor_film.actor_id = actors.actor_id GROUP BY movies.film_id ORDER BY movies.film_id DESC LIMIT 10";
		$result = mysqli_query($connection,$sql);
		while($row = mysqli_fetch_assoc($result)) {
			$data[] = $row;
			$id = $row['film_id'];
		}
	
	} else { // If form is not empty, begin query	
		$search = mysqli_real_escape_string($connection, trim($_POST['search']));
		$sql = "SELECT LPAD(movies.film_id, 7, 0) AS film_id, movies.title, GROUP_CONCAT(DISTINCT directors.director_name SEPARATOR ', ') AS director_name, movies.genre, movies.release_year, GROUP_CONCAT(DISTINCT actors.name SEPARATOR ', ') AS actor_name FROM movies LEFT JOIN director_film ON movies.film_id = director_film.film_id LEFT JOIN directors ON director_film.director_id = directors.director_id LEFT JOIN actor_film ON movies.film_id = actor_film.film_id LEFT JOIN actors ON actor_film.actor_id = actors.actor_id WHERE movies.film_id='{$search}' OR movies.title LIKE '%{$search}%' GROUP BY movies.film_id";
		$result = mysqli_query($connection, $sql);
		$rows = mysqli_num_rows($result);
	
		if($rows >= 1) { // Query should return at least one result
		
			while($row = mysqli_fetch_assoc($result)) {
				$data[] = $row;
				$id = $row['film_id'];
				$backButton = '<a href="" name="backButton">Clear Search</a>'; // Allows you to return to default view
			} 
			
		} else { // If there are no results
			$msg = 'Your search yielded no results.';
			
			/* Allow rows to be sortable
			$orderBy = array('id', 'last_name', 'first_name', 'street_address', 'city', 'state', 'zip', 'email', 'phone');
			$order = 'customer_id';
			if (isset($_GET['orderBy']) && in_array($_GET['orderBy'], $orderBy)) {
				$order = $_GET['orderBy'];
			} */

			// Grab all last 10 movie entries
			$sql = "SELECT LPAD(movies.film_id, 7, 0) AS film_id, movies.title, GROUP_CONCAT(DISTINCT directors.director_name SEPARATOR ', ') AS director_name, movies.genre, movies.release_year, GROUP_CONCAT(DISTINCT actors.name SEPARATOR ', ') AS actor_name FROM movies LEFT JOIN director_film ON movies.film_id = director_film.film_id LEFT JOIN directors ON director_film.director_id = directors.director_id LEFT JOIN actor_film ON movies.film_id = actor_film.film_id LEFT JOIN actors ON actor_film.actor_id = actors.actor_id GROUP BY movies.film_id ORDER BY movies.film_id DESC LIMIT 10";
			$result = mysqli_query($connection,$sql);
			while($row = mysqli_fetch_assoc($result)) {
				$data[] = $row;
				$id = $row['film_id'];
			}
		
		}
	}
	
} else { // Default page view
	/* Allow rows to be sortable
	$orderBy = array('id', 'last_name', 'first_name', 'street_address', 'city', 'state', 'zip', 'email', 'phone');
	$order = 'customer_id';
	if (isset($_GET['orderBy']) && in_array($_GET['orderBy'], $orderBy)) {
		$order = $_GET['orderBy'];
	} */

	// Grab all last 10 movie entries
	$sql = "SELECT LPAD(movies.film_id, 7, 0) AS film_id, movies.title, GROUP_CONCAT(DISTINCT directors.director_name SEPARATOR ', ') AS director_name, movies.genre, movies.release_year, GROUP_CONCAT(DISTINCT actors.name SEPARATOR ', ') AS actor_name FROM movies LEFT JOIN director_film ON movies.film_id = director_film.film_id LEFT JOIN directors ON director_film.director_id = directors.director_id LEFT JOIN actor_film ON movies.film_id = actor_film.film_id LEFT JOIN actors ON actor_film.actor_id = actors.actor_id GROUP BY movies.film_id ORDER BY movies.film_id DESC LIMIT 10";
	$result = mysqli_query($connection,$sql);
	while($row = mysqli_fetch_assoc($result)) {
		$data[] = $row;
	}
}

// Returns to default view as if back button is pushed
if(isset($_POST['backButton'])) {
	/* Allow rows to be sortable
	$orderBy = array('id', 'last_name', 'first_name', 'street_address', 'city', 'state', 'zip', 'email', 'phone');
	$order = 'customer_id';
	if (isset($_GET['orderBy']) && in_array($_GET['orderBy'], $orderBy)) {
		$order = $_GET['orderBy'];
	} */
	
	// Grab all last 10 movie entries
	$sql = "SELECT LPAD(movies.film_id, 7, 0) AS film_id, movies.title, GROUP_CONCAT(DISTINCT directors.director_name SEPARATOR ', ') AS director_name, movies.genre, movies.release_year, GROUP_CONCAT(DISTINCT actors.name SEPARATOR ', ') AS actor_name FROM movies LEFT JOIN director_film ON movies.film_id = director_film.film_id LEFT JOIN directors ON director_film.director_id = directors.director_id LEFT JOIN actor_film ON movies.film_id = actor_film.film_id LEFT JOIN actors ON actor_film.actor_id = actors.actor_id GROUP BY movies.film_id ORDER BY movies.film_id DESC LIMIT 10";
	$result = mysqli_query($connection,$sql);
	while($row = mysqli_fetch_assoc($result)) {
		$data[] = $row;
	}
}

// Clear connection
mysqli_close($connection);

// Display results to template
$smarty->assign('data', $data);
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
$smarty->assign('title', 'Movies');
$smarty->assign('navTitle', 'Movies');
$smarty->assign('currPage', 'Movies');
$smarty->display('resources/smarty/templates/movies.tpl');
?>