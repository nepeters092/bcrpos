<?php
require_once ('resources/smarty/smartyHeader.php');
include ('session.php');

$smarty = new Smarty;

// Retrieve information from last transaction

$sql = "SELECT transactions.transaction_id, CONCAT(customers.first_name, ' ', customers.last_name) AS customer_name, employees.first_name AS clerk_name, transactions.date, transactions.time, transactions.total 
FROM transactions 
INNER JOIN customers
ON customers.customer_id = transactions.customer_id
INNER JOIN employees
ON employees.employee_id = transactions.employee_id
ORDER BY transaction_id DESC LIMIT 1";
$result = mysqli_query($connection,$sql);
while($row = mysqli_fetch_assoc($result)) {
	$data[] = $row;
}

// Display data on template
$smarty->assign('change', $_SESSION['change']);
$smarty->assign('data', $data);
$smarty->assign('title', 'Customers');
$smarty->assign('navTitle', 'Customers');
$smarty->assign('currPage', 'Customers');
$smarty->display('resources/smarty/templates/checkout_confirm.tpl');
?>