<?php
// TO DO: Make rows sortable.
require_once ('resources/smarty/smartyHeader.php');
include ('customers.php');

$smarty = new Smarty;

$id = $_GET['customer_id'];
mysqli_query($connection, "SELECT * FROM customers WHERE id = '".$id."'");
mysqli_close($connection);

$smarty->assign('title', 'Customers');
$smarty->assign('navTitle', 'Customers');
$smarty->assign('currPage', 'Customers');
$smarty->display('resources/smarty/templates/view_customer.tpl');
?>