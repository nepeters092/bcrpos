<?php 
require_once ('resources/smarty/smartyHeader.php');
include ('session.php');

$data = [];

$sql = "SELECT movies.rental_category, SUM(transactions.total) AS total FROM movies
INNER JOIN orderline ON movies.film_id = orderline.film_id
INNER JOIN transactions ON orderline.transaction_id = transactions.transaction_id
GROUP BY movies.rental_category";
$result = mysqli_query($connection, $sql);

while ($row = mysqli_fetch_assoc($result)) {
	$data[] = $row;
}

mysqli_close($connection);

$table = array();
$table['cols'] = array(
	array('id' => '', 'label' => 'Category', 'type' => 'string'),
	array('id' => '', 'label' => 'Total', 'type' => 'number')
	);

$rows = array();
foreach($result as $row) {
	$temp = array();

	// Values
	$temp[] = array('v' => (string) $row['rental_category']);
	$temp[] = array('v' => (float) $row['total']);
	$rows[] = array('c' => $temp);
}

$result->free();

$table['rows'] = $rows;
$jsonTable = json_encode($table, true);

$fp = fopen('categories.json', 'w');
fwrite($fp, $jsonTable);
fclose($fp);

// Instead you can query your database and parse into JSON etc etc
$smarty->display('resources/smarty/templates/genre_reports.tpl');
?>