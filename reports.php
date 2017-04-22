<?php 
require_once ('resources/smarty/smartyHeader.php');
include ('session.php');



// Instead you can query your database and parse into JSON etc etc
$smarty->assign('title', 'Reports');
$smarty->assign('navTitle', 'Reports');
$smarty->assign('currPage', 'Reports');
$smarty->display('resources/smarty/templates/reports.tpl');
?>