<?php 
	require 'db_connect.php';
	session_start();
	if(!isset($_SESSION['email'])){
		header('location: logout.php');
	}
	else{
		if(isset($_GET['id'])){
			$id=$_GET['id'];
			$email=$_SESSION['email'];

			$query="delete from cart where product_id=$id and email='$email';";
			$result=mysqli_query($con,$query);
			if($result){
				header('location: wishlist.php');
			}

		}
	}


?>