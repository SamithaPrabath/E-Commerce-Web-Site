<?php 

	require '../db_connect.php';
	require 'check_admin.php';
	if(isset($_GET['id'])){
		$id=$_GET['id'];
		echo $id;
		$query="delete from message where message_id = $id";
		if(mysqli_query($con,$query)){
			echo "<script>alert('Message Deleted')</script>";
			header('location:message.php');
		}
		else{
			echo mysqli_error($con);
		}
	}
	


 ?>