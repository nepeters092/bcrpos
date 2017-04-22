<?php
require_once ('resources/smarty/smartyHeader.php');
include ('session.php');

$smarty = new Smarty;
$mdata = [];
$cartData = [];
$msg = "";


if(isset($_POST['movieSubmit'])) { // If form is submitted

	if(empty($_POST['search'])) { // If the form is empty
		$msg = 'Please enter a valid search key.';
	} else { // If not empty, creates a query
		$search = mysqli_real_escape_string($connection, trim($_POST['search']));
		$query = "select movies.film_id, movies.title, movies.genre, movies.release_year, rental_categories.price
		from movies
		inner join rental_categories
		on movies.rental_category = rental_categories.category
		where film_id = '{$search}'";
			  
		$result = mysqli_query($connection, $query);
			  
		if (mysqli_affected_rows($connection) == 1) { // Should be one row affected by previous query.
					 
			while($row = mysqli_fetch_assoc($result)) {
				
				$mdata[] = $row;
				$_SESSION['film_id'] = $row['film_id'];
				$_SESSION['title'] = $row['title'];
				$_SESSION['price'] = $row['price'];
			}
				  
		} else {
			$msg = "Your search returned no results.";
		}	
	}
	
}

// Display all shopping cart data
$sql = "SELECT film_title, film_price FROM cart";

$result = mysqli_query($connection,$sql);

while($cartRow = mysqli_fetch_assoc($result)) {
	$cartData[] = $cartRow;
}

// Add to cart
if(isset($_POST['addToCart'])) {
	
	$csql = mysqli_prepare($connection, "INSERT INTO cart (film_id, film_title, film_price) 
		VALUES ( '{$_SESSION['film_id']}', '{$_SESSION['title']}', '{$_SESSION['price']}' )");
		
	mysqli_stmt_execute($csql);
				
	if(mysqli_affected_rows($connection)){
	   
		mysqli_stmt_close($csql);
		
		echo "<meta http-equiv='refresh' content='0'>";

	}

	// Clear session variables
	$_SESSION['film_id'] = "";
	$_SESSION['title'] = "";
	$_SESSION['price'] = "";
	
}

// Clear Cart
if(isset($_POST['clearCart'])) {
	
	$clear = mysqli_prepare($connection, "DELETE FROM cart");
		
	mysqli_stmt_execute($clear);
				
	if(mysqli_affected_rows($connection)){
	   
		mysqli_stmt_close($clear);
		
		echo "<meta http-equiv='refresh' content='0'>";

	} 
	
}

if(isset($_POST['changeCust'])) {
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
}

//  Display subtotal
$subsql = "SELECT SUM(film_price) AS 'subtotal' FROM cart";
$subresult = mysqli_query($connection, $subsql);
$subrow = mysqli_fetch_assoc($subresult);
$subtotal = $subrow['subtotal'];

// Display Tax
$taxsql = "SELECT ROUND((SUM(film_price)*0.05),2) AS 'tax' FROM cart";
$taxresult = mysqli_query($connection, $taxsql);
$taxrow = mysqli_fetch_assoc($taxresult);
$taxamt = $taxrow['tax'];

// Display Grand Total
$grandsql = "SELECT ROUND((SUM(film_price)*1.05),2) AS 'grand_total' FROM cart";
$grandresult = mysqli_query($connection, $grandsql);
$grandrow = mysqli_fetch_assoc($grandresult);
$grandTotal = $grandrow['grand_total'];

// Display data on template
$smarty->assign('lateFee', $_SESSION['late_fee']);
$smarty->assign('customerId', $_SESSION['customer_id']);
$smarty->assign('customerName', $_SESSION['first_name'] . ' ' . $_SESSION['last_name']);
$smarty->assign('address', $_SESSION['street_address'] . '<br />' . $_SESSION['city'] . ', ' . $_SESSION['state'] . ' ' . $_SESSION['zip']);
$smarty->assign('phone', $_SESSION['phone']);
$smarty->assign('member_since', $_SESSION['member_since']);
$smarty->assign('mdata', $mdata);
$smarty->assign('cartData', $cartData);
$smarty->assign('subtotal', $subtotal);
$smarty->assign('taxamt', $taxamt);
$smarty->assign('grandTotal', $grandTotal);
$smarty->assign('msg', $msg);
$smarty->assign('custData', 'Sale');
$smarty->assign('navTitle', 'Sale');
$smarty->assign('currPage', 'Sale');
$smarty->display('resources/smarty/templates/select_film.tpl');
?>