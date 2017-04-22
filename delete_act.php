<?php
require_once ('resources/smarty/smartyHeader.php');
include ('session.php');

$smarty = new Smarty;

// Display customer information
$id = $_GET['actor_id'];
$filmId = $_SESSION['trimId'];
$msg = "";

$sql = "SELECT actor_film.actor_id, actors.name, actor_film.film_id, movies.title FROM actor_film INNER JOIN actors ON actor_film.actor_id = actors.actor_id INNER JOIN movies ON actor_film.film_id = movies.film_id WHERE actor_film.actor_id = '{$id}' AND actor_film.film_id = '{$filmId}'";
$result = mysqli_query($connection,$sql);

$delete = "DELETE FROM actor_film WHERE actor_id = '{$id}' AND film_id = '{$filmId}' LIMIT 1";
$deleteSql = mysqli_prepare($connection,$delete);

while ($row = mysqli_fetch_assoc($result)) {
	$data[] = $row;
	$actName = $row['name'];
	$filmName = $row['title'];
	
	$msg = 'Are you sure you wish to delete actor <strong>' . $actName . '</strong> from <strong>' . $filmName . '</strong>?<br />';
	
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
$smarty->display('resources/smarty/templates/delete_act.tpl');
?>