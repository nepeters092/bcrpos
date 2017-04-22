<?php
require_once ('resources/smarty/smartyHeader.php');
include ('session.php');

$smarty = new Smarty;

// Display all transaction data
$sql = "SELECT transactions.transaction_id, CONCAT(customers.last_name, ', ', customers.first_name) AS customer_name, GROUP_CONCAT(DISTINCT movies.title SEPARATOR '; ') AS title, admin.first_name, transactions.date, transactions.time, transactions.total
FROM transactions
INNER JOIN customers ON transactions.customer_id = customers.customer_id
INNER JOIN orderline ON transactions.transaction_id = orderline.transaction_id
INNER JOIN movies ON orderline.film_id = movies.film_id
INNER JOIN admin ON transactions.employee_id = admin.user_id
GROUP BY transactions.transaction_id
ORDER BY transaction_id DESC LIMIT 12";

$result = mysqli_query($connection,$sql);

while($row = mysqli_fetch_assoc($result)) {
	$data[] = $row;
}

// Close the connection
mysqli_free_result($result);
mysqli_close($connection);

// Display data on template
$smarty->assign('title', 'Transactions');
$smarty->assign('data', $data);
$smarty->assign('navTitle', 'Transactions');
$smarty->assign('currPage', 'Transactions');
$smarty->display('resources/smarty/templates/transactions.tpl');
$smarty->display('resources/smarty/templates/nav.tpl');
?>