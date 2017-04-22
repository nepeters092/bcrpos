<?php
require_once ('resources/smarty/smartyHeader.php');
include ('session.php');

$smarty = new Smarty;

// Find sales total and average sale 
$sql_avg_total = "SELECT ROUND(AVG(total),2) AS avg_sales, SUM(total) AS total_sales FROM transactions";  

$result1 = mysqli_query($connection,$sql_avg_total);
$row1 = mysqli_fetch_assoc($result1);
$avg = $row1['avg_sales'];
$total = $row1['total_sales'];

// Find total of last sale made
$sql_last = "SELECT total FROM transactions ORDER BY transaction_id DESC LIMIT 1";

$result2 = mysqli_query($connection, $sql_last);
$row2 = mysqli_fetch_assoc($result2);
$last_sale = $row2['total'];


// Find latest 10 movies added
$sql_last_movies = "SELECT film_id, title, genre, release_year FROM movies ORDER BY film_id DESC LIMIT 10";

$result3 = mysqli_query($connection,$sql_last_movies);

while($row3 = mysqli_fetch_assoc($result3)) {
	$data1[] = $row3;
}

// Find latest 5 transactions
$sql_last_transactions = "SELECT transactions.transaction_id, CONCAT(customers.last_name, ', ', customers.first_name) AS customer_name, admin.first_name, transactions.date, transactions.time, transactions.total FROM transactions INNER JOIN customers ON transactions.customer_id=customers.customer_id INNER JOIN admin ON transactions.employee_id=admin.user_id ORDER BY transaction_id DESC LIMIT 5";

$result4 = mysqli_query($connection,$sql_last_transactions);

while($row4 = mysqli_fetch_assoc($result4)) {
	$data2[] = $row4;
}

// Find most frequently sold titles

$sql_most_popular = "SELECT movies.title, COUNT(orderline.film_id) AS count FROM orderline 
INNER JOIN movies ON orderline.film_id = movies.film_id 
GROUP BY orderline.film_id
ORDER BY count DESC LIMIT 5";

$result5 = mysqli_query($connection, $sql_most_popular);

while($row5 = mysqli_fetch_assoc($result5)) {
	$data3[] = $row5;
}

// Find number of customers
$sql_customer_number = "SELECT count(*) AS count FROM customers";

$result6 = mysqli_query($connection, $sql_customer_number);
$row6 = mysqli_fetch_assoc($result6);
$customerCount = $row6['count'];

// Find number of customers
$sql_movie_number = "SELECT count(*) AS count FROM movies";

$result7 = mysqli_query($connection, $sql_movie_number);
$row7 = mysqli_fetch_assoc($result7);
$movieCount = $row7['count'];


// Close connection
mysqli_free_result($result1);
mysqli_close($connection);

$smarty->assign('title', 'Home');
$smarty->assign('navTitle', 'Dashboard');
$smarty->assign('currPage', 'Dashboard');
$smarty->assign('customerCount', $customerCount);
$smarty->assign('avg', $avg);
$smarty->assign('total', $total);
$smarty->assign('last_sale', $last_sale);
$smarty->assign('movieCount', $movieCount);
$smarty->assign('data1', $data1);
$smarty->assign('data2', $data2);
$smarty->assign('data3', $data3);
$smarty->display('resources/smarty/templates/dashboard.tpl');
?>