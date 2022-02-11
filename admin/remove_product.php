<?php 
	require '../db_connect.php';
	require 'check_admin.php';

	if(isset($_GET['id'])){
		$id=$_GET['id'];
		$query="delete from product where product_id='$id';";
		$result1=mysqli_query($con,$query);

		$query="delete from product_image where product_id='$id';";
		$result2=mysqli_query($con,$query);

		$query="delete from cart where product_id='$id';";
		$result3=mysqli_query($con,$query);
		if($result1 && $result2 && $result3){
			header('location:all-product.php');
		}
		

	}
	else{
		header('location: index.php');
	}



?>