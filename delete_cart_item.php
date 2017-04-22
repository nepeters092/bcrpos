<?php
require_once ('resources/smarty/smartyHeader.php');
include ('session.php');

$smarty = new Smarty;

// Display customer information
$id = $_GET['film_id'];
$msg = "";
$movieTitle = "";

$sql = "SELECT * FROM cart WHERE film_id = '{$id}'";
$result = mysqli_query($connection,$sql);

while ($row = mysqli_fetch_assoc($result)) {
	$movieTitle = $row['film_title'];
}

mysqli_free_result($result);


if(isset($_POST['deleteFrom'])) {

	$delete = "DELETE FROM cart WHERE film_id = '{$id}' LIMIT 1";
	$deleteResult = mysqli_query($connection,$delete);
	
	if(mysqli_affected_rows($connection)) {
		
		header("location: /checkout.php"); // Redirect
		
	}
	
}

$smarty->assign('movieTitle', $movieTitle);
$smarty->assign('title', 'Edit Movie');
$smarty->assign('navTitle', 'Edit Movie');
$smarty->assign('currPage', '<a href="/movies.php">Movies</a> / Edit Movie');
$smarty->display('resources/smarty/templates/delete_cart_item.tpl');
?>