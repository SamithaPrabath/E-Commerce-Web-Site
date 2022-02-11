<?php 

	session_start();
	if(!isset($_SESSION['role'])){
		header('location: ../logout.php');
	}
	else if($_SESSION['role']!="admin"){
		header('location: ../logout.php');
	}




 ?>