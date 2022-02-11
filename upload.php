<?php 

	require 'db_connect.php';

	

	$name;
	$description;
	$price;
	$qty;
	$category;

	$target_dir = "Images/";

	if(isset($_POST['upload'])){
		// $images=$_POST['other_img[]'];
		// echo $images[1];
		$target_file = $target_dir . basename($_FILES["main_img"]["name"]);
		echo $target_file;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		if (move_uploaded_file($_FILES["main_img"]["tmp_name"], $target_file)) {
			$name=$_POST['name'];
			$description=$_POST['name'];
			$price=$_POST['price'];
			$category=$_POST['category'];
			$qty=$_POST['qty'];

			echo $name."<br>";
			echo $description."<br>";
			echo $price."<br>";
			echo $category."<br>";
			echo $qty."<br>";
			echo $target_file."<br>";
			echo "<script>alert(2)</script>";
		}
		else{
			echo "<script>alert(1)</script>";
		}
		
	}


?>