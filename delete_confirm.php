<?php
require_once ('resources/smarty/smartyHeader.php');
include ('session.php');

$smarty = new Smarty;



$smarty->assign('title', 'Edit Customer');
$smarty->assign('navTitle', 'Edit Customer');
$smarty->assign('currPage', '<a href="/customers.php">Customers</a> / Edit Customer');
$smarty->display('resources/smarty/templates/delete_confirm.tpl');
?>