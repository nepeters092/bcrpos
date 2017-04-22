<?php
require_once ('resources/smarty/smartyHeader.php');
include ('session.php');

$smarty = new Smarty;

// Display customer information
$id = $_GET['director_id'];
$filmId = $_SESSION['trimId'];
$msg = "";

$sql = "SELECT director_film.director_id, directors.director_name, director_film.film_id, movies.title FROM director_film INNER JOIN directors ON director_film.director_id = directors.director_id INNER JOIN movies ON director_film.film_id = movies.film_id WHERE director_film.director_id = '{$id}' AND director_film.film_id = '{$filmId}'";
$result = mysqli_query($connection,$sql);

$delete = "DELETE FROM director_film WHERE director_id = '{$id}' AND film_id = '{$filmId}' LIMIT 1";
$deleteSql = mysqli_prepare($connection,$delete);

while ($row = mysqli_fetch_assoc($result)) {
	$data[] = $row;
	$dirName = $row['director_name'];
	$filmName = $row['title'];
	
	$msg = 'Are you sure you wish to delete director <strong>' . $dirName . '</strong> from <strong>' . $filmName . '</strong>?<br />';
	
}

if(isset($_POST['deleteFrom'])) {

	mysqli_stmt_execute($deleteSql);
	header("Location: edit_film.php?film_id={$filmId}");
	
}

$smarty->assign('filmId', $filmId);
$smarty->assign('msg', $msg);
$smarty->assign('sql', $sql);
$smarty->assign('title', 'Edit Movie');
$smarty->assign('navTitle', 'Edit Movie');
$smarty->assign('currPage', '<a href="/movies.php">Movies</a> / Edit Movie');
$smarty->display('resources/smarty/templates/delete_dir.tpl');
?>