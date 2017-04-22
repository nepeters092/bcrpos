<?php
if (isset($_POST['action'])) {

	$csql = mysqli_prepare($connection, "INSERT INTO cart (film_id, film_title, film_price) 
			VALUES ( '{$_SESSION['film_id']}', '{$_SESSION['title']}', '{$_SESSION['price']}' )");
			
	mysqli_stmt_execute($csql);
				
	if(mysqli_affected_rows($connection)){
	   
		mysqli_stmt_close($csql);

	} 
}
?>