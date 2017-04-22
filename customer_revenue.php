<?php 
require_once ('resources/smarty/smartyHeader.php');
include ('session.php');

$smarty = new Smarty;

$previous = "";
$next = "";
$firstLink = "";
$nextLink = "";
$prevLink = "";
$lastLink = "";
$pagenum = 1;
$page_rows= "";
$last = "";
$data = [];
$data2 = [];

// Checks if page number is set
if(isset($_GET['pagenum'])) {
	$pagenum = $_GET['pagenum'];
}

// Grab data
$sql = "SELECT CONCAT(customers.first_name, ' ', customers.last_name) AS customer, SUM(total) AS total FROM transactions INNER JOIN customers ON transactions.customer_id = customers.customer_id GROUP BY customers.customer_id ORDER BY total DESC";
$result = mysqli_query($connection, $sql);
while($row = mysqli_fetch_assoc($result)) {
	$data[] = $row;
}

// Counts and limits number of results
$rows = mysqli_num_rows($result);
$page_rows = 12;

$last = ceil($rows/$page_rows);
	if ($pagenum < 1) {
		$pagenum = 1;
	} else if ($pagenum > $last) {
		$pagenum = $last;
	}
	$max = 'LIMIT '.($pagenum-1)*$page_rows .',' .$page_rows;

// Grabs SQL data with limit 
$sql = "SELECT CONCAT(customers.first_name, ' ', customers.last_name) AS customer, SUM(total) AS total FROM transactions INNER JOIN customers ON transactions.customer_id = customers.customer_id GROUP BY customers.customer_id ORDER BY total DESC ".$max;
	$result = mysqli_query($connection,$sql);
while($row = mysqli_fetch_assoc($result)) {
	$data2[] = $row;
}

if($pagenum == 1) {
				
} else {
	$firstLink = "<a href='{$_SERVER['PHP_SELF']}?pagenum=1'><i class='fa fa-angle-double-left' aria-hidden='true'></i> First</a>";
	$previous = $pagenum-1;
	$prevLink = "<a href='{$_SERVER['PHP_SELF']}?pagenum=$previous'><i class='fa fa-angle-left' aria-hidden='true'></i> Previous</a>";
}
if ($pagenum == $last) {
			
} else {
	$next = $pagenum +1;
	$nextLink = "<a href='{$_SERVER['PHP_SELF']}?pagenum=$next'>Next <i class='fa fa-angle-right' aria-hidden='true'></i></a>";
	$lastLink = "<a href='{$_SERVER['PHP_SELF']}?pagenum=$last'>Last <i class='fa fa-angle-double-right' aria-hidden='true'></i></a>";
}

$smarty->assign('data', $data2);
$smarty->assign('page_rows', $page_rows);
$smarty->assign('pagenum', $pagenum);
$smarty->assign('last', $last);
$smarty->assign('previous', $previous);
$smarty->assign('next', $next);
$smarty->assign('firstLink', $firstLink);
$smarty->assign('lastLink', $lastLink);
$smarty->assign('nextLink', $nextLink);
$smarty->assign('prevLink', $prevLink);
$smarty->assign('title', 'Customer Revenue Report');
$smarty->assign('navTitle', 'Customer Revenue Report');
$smarty->assign('currPage', '<a href="reports.php">Reports</a> / Customer Revenue');
$smarty->display('resources/smarty/templates/customer_revenue.tpl');
?>