<?php 
	require 'db_connect.php';
	$id=$_POST['id'];
	$qty=$_POST['qty'];

	$query="update cart set qty=$qty where product_id=$id;";
	$result=mysqli_query($con,$query);


?>