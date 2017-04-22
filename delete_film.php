<?php
require_once ('resources/smarty/smartyHeader.php');
include ('session.php');

$smarty = new Smarty;

// Display customer information
$id = $_GET['film_id'];
$msg = "";

$delete = "DELETE FROM cart WHERE film_id = '{$id}' LIMIT 1";
$deleteSql = mysqli_prepare($connection,$delete);

if(isset($_POST['deleteFrom'])) {

	
	
}

$smarty->assign('filmId', $filmId);
$smarty->assign('msg', $msg);
$smarty->assign('sql', $sql);
$smarty->assign('title', 'Edit Movie');
$smarty->assign('navTitle', 'Edit Movie');
$smarty->assign('currPage', '<a href="/movies.php">Movies</a> / Edit Movie');
$smarty->display('resources/smarty/templates/delete_film.tpl');
?>