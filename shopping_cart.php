<?php
require('../smarty/libs/Smarty.class.php');
include('../config.php');

$smarty = new Smarty;

$sql = "SELECT film_title, film_price FROM cart";

$result = mysqli_query($connection,$sql);

while($row = mysqli_fetch_assoc($result)) {
	$data[] = $row;
}

mysqli_free_result($result);
mysqli_close($connection);

$smarty->assign('data', $data);
$smarty->display('resources/smarty/templates/shopping_cart.tpl');
?>