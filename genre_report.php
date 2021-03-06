<?php 
require_once ('resources/smarty/smartyHeader.php');
include ('session.php');

$data = [];

$sql = "SELECT movies.genre, SUM(transactions.total) AS total FROM movies
INNER JOIN orderline ON movies.film_id = orderline.film_id
INNER JOIN transactions ON orderline.transaction_id = transactions.transaction_id
GROUP BY movies.genre";
$result = mysqli_query($connection, $sql);
mysqli_close($connection);

$table = array();
$table['cols'] = array(
	array('id' => '', 'label' => 'Genre', 'type' => 'string'),
	array('id' => '', 'label' => 'Total', 'type' => 'number')
	);

$rows = array();
foreach($result as $row) {
	$temp = array();

	// Values
	$temp[] = array('v' => (string) $row['genre']);
	$temp[] = array('v' => (float) $row['total']);
	$rows[] = array('c' => $temp);
}

$result->free();

$table['rows'] = $rows;
$jsonTable = json_encode($table, true);

$fp = fopen('transactions.json', 'w');
fwrite($fp, $jsonTable);
fclose($fp);

// Instead you can query your database and parse into JSON etc etc
$smarty->assign('title', 'Reports');
$smarty->assign('navTitle', 'Reports');
$smarty->assign('currPage', "<a href='/reports.php'>Reports</a> / Genre Report");
$smarty->display('resources/smarty/templates/dashboard.tpl');
?>