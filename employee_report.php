<?php 
require_once ('resources/smarty/smartyHeader.php');
include ('session.php');

$data = [];

$sql = "SELECT MONTH(date) AS month, SUM(total) AS total FROM transactions
WHERE YEAR(date) = 2017
GROUP BY month
ORDER BY month DESC";
$result = mysqli_query($connection, $sql);
mysqli_close($connection);

$table = array();
$table['cols'] = array(
	array('id' => '', 'label' => 'Month', 'type' => 'string'),
	array('id' => '', 'label' => 'Total', 'type' => 'number')
	);

$rows = array();
foreach($result as $row) {
	$temp = array();

	// Values
	$temp[] = array('v' => (string) $row['month']);
	$temp[] = array('v' => (float) $row['total']);
	$rows[] = array('c' => $temp);
}

$result->free();

$table['rows'] = $rows;
$jsonTable = json_encode($table, true);

$fp = fopen('totals.json', 'w');
fwrite($fp, $jsonTable);
fclose($fp);

// Instead you can query your database and parse into JSON etc etc
$smarty->assign('title', 'Reports');
$smarty->assign('navTitle', 'Reports');
$smarty->assign('currPage', 'Reports');
$smarty->display('resources/smarty/templates/dashboard.tpl');
?>