<?php
/* NOTE: Make changes so that navigation to checkout.php URL will redirect if there is no active shopping cart */

require_once ('resources/smarty/smartyHeader.php');
include ('session.php');

$smarty = new Smarty;
$today = strtotime("+5 day");
$dueDate = date('M d, Y', $today);
$change = "0.00";
$msg = "";
$amtPaid = "";
$currTime = date("h:i:s");
$currDate = date("Y-m-d");
$partPay = "";
$_SESSION['change'] = 0.00;


$data = []; // Defines $data as empty array. Prevents error msg from undefined index.

// Grab shopping cart data
$sql = "SELECT film_id, film_title, film_price FROM cart";
$result = mysqli_query($connection,$sql);

while($row = mysqli_fetch_assoc($result)) {
	$data[] = $row;
	$movies[] = $row['film_id'];
}

$_SESSION['movies'] = $movies;


$subsql = "SELECT ROUND(SUM(film_price),2) AS 'subtotal' FROM cart";
$subresult = mysqli_query($connection, $subsql);
$subrow = mysqli_fetch_assoc($subresult);
$subtotal = $subrow['subtotal'];
$subtotalPlusLateFee = number_format(($subtotal + $_SESSION['late_fee']),2); 
$taxAmt = number_format(($subtotalPlusLateFee * 0.05),2);
$grandTotal = number_format(($taxAmt + $subtotalPlusLateFee),2);

if (isset($_POST['payNow'])) { // If confirm button submitted
	
	$amtPaid = $_POST['amtPaid'];
	
	if($amtPaid >= $grandTotal) { 
	
		$change = number_format(($amtPaid - $grandTotal),2);
		$_SESSION['change'] = $change;
		$msg = "";
		
		// Create a transaction record
		$insertSql = mysqli_prepare($connection, "INSERT INTO transactions (customer_id, employee_id, time, date, subtotal, tax, latefee, total) VALUES ('{$_SESSION['customer_id']}', '{$_SESSION['user_id']}', '{$currTime}', '{$currDate}', '{$subtotal}', '{$taxAmt}', '{$_SESSION['late_fee']}', '{$grandTotal}')");
		
		mysqli_stmt_execute($insertSql);
		mysqli_stmt_close($insertSql);
		
		
		// Retrieve ID of latest transaction
		$idSql = "SELECT transaction_id from transactions ORDER BY transaction_id DESC LIMIT 1";
		$idResult = mysqli_query($connection,$idSql);

		while ($idRow = mysqli_fetch_assoc($idResult)) {
			$lastId = $idRow['transaction_id'];
		}
		

		// Loop through movies in cart and add entry for each in orderline table
		foreach ($data as $item) {
			for ($i=0; $i < (count($_SESSION['movies'])); $i++) {
			$itemSql = "INSERT INTO orderline (transaction_id, film_id) VALUES ('{$lastId}', '{$_SESSION['movies'][$i]}')";
			$itemResult = mysqli_query($connection,$itemSql);
			mysqli_free_result($itemResult);
			
			// Update film as rented
			$updateSql = mysqli_prepare($connection, "UPDATE movies SET rented = 1 WHERE film_id = '{$_SESSION['movies'][$i]}'");
			mysqli_stmt_execute($updateSql);
			mysqli_stmt_close($updateSql);
			}
		} 

		// Remove cart data
		$deleteSql = mysqli_prepare($connection, "DELETE FROM cart");
		
		mysqli_stmt_execute($deleteSql);
		mysqli_stmt_close($deleteSql);
		mysqli_close($connection); 
		
		// Clear session variables
		$_SESSION['late_fee'] = "";
		$_SESSION['customer_id'] = "";
		$_SESSION['first_name'] = "";
		$_SESSION['last_name'] = "";
		$_SESSION['street_address'] = "";
		$_SESSION['city'] = "";
		$_SESSION['state'] = "";
		$_SESSION['zip'] = "";
		$_SESSION['phone'] = "";
		$_SESSION['member_since'] = "";
		
		header('location: /checkout_confirm.php');

	
	} else { // Did not pay entire bill
		
		$msg = 'Insufficient payment.';
		
	}
	
}

// Display data on template
$smarty->assign('currTime', $currTime);
$smarty->assign('currDate', $currDate);
$smarty->assign('data', $data);
$smarty->assign('change', $change);
$smarty->assign('msg', $msg);
$smarty->assign('dueDate', $dueDate);
$smarty->assign('lateFee', $_SESSION['late_fee']);
$smarty->assign('customerId', $_SESSION['customer_id']);
$smarty->assign('customerName', $_SESSION['first_name'] . ' ' . $_SESSION['last_name']);
$smarty->assign('address', $_SESSION['street_address'] . '<br />' . $_SESSION['city'] . ', ' . $_SESSION['state'] . ' ' . $_SESSION['zip']);
$smarty->assign('phone', $_SESSION['phone']);
$smarty->assign('member_since', $_SESSION['member_since']);
$smarty->assign('clerkName', $_SESSION['clerk_name']);
$smarty->assign('taxAmt', $taxAmt);
$smarty->assign('grandTotal', $grandTotal);
$smarty->assign('subtotalPlusLateFee', $subtotalPlusLateFee);
$smarty->assign('partPay', $partPay);
$smarty->assign('title', 'Checkout');
$smarty->assign('navTitle', 'Checkout');
$smarty->assign('currPage', 'Checkout');
$smarty->display('resources/smarty/templates/checkout.tpl');
?>