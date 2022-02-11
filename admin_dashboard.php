<?php 

	require 'db_connect.php';
	$name;
	$description;
	$price;
	$qty;
	$category;
	$target_dir = "Images/";

	if(isset($_POST['upload'])){
		$name=$_POST['name'];
		$description=$_POST['name'];
		$price=$_POST['price'];
		$category=$_POST['category'];
		$qty=$_POST['qty'];
		$pid;
		$target_file = $target_dir . basename($_FILES["main_img"]["name"]);
		if(!empty($target_file)){
			if (move_uploaded_file($_FILES["main_img"]["tmp_name"], $target_file)) {
				$query="insert into product (name,price,categorey,description,qty) values('$name',$price,'$category','$description',$qty);";
				if(mysqli_query($con,$query)){
					$query="select product_id from product order by product_id desc limit 1;";
					$result=mysqli_query($con,$query);
					$row=mysqli_fetch_assoc($result);
					$pid=$row['product_id'];
					$query="insert into product_image (product_id,image,main_image) values($pid,'$target_file','Yes');";
					if(mysqli_query($con,$query)){

					}
					else{
						echo mysqli_error($con);
					}
				}
				$images=array_filter($_FILES['other_img']['name']);
				if(!empty($images)){
					foreach($_FILES['other_img']['name'] as $key=>$val){
						$target_file = $target_dir . basename($_FILES["other_img"]["name"][$key]);
						move_uploaded_file($_FILES["other_img"]["tmp_name"][$key], $target_file);
						$query="insert into product_image (product_id,image,main_image) values($pid,'$target_file','No');";
						if(mysqli_query($con,$query)){
						}
						else{
							echo mysqli_error($con);
						}
					}
				}
				echo "<script>alert('Successfully Added!')</script>";

				
			}
			else{
				echo "<script>alert(1)</script>";
			}
		}
		
		
	}


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Dashboard</title>
</head>
<script type="text/javascript">
	function addMore(){
		document.getElementById('add').innerHTML="Add Image <input type='file' name=''><br>";
	}
</script>
<body>
	Add Products<br>
	<form action="" method="post" enctype="multipart/form-data">
		
		Name:<input type="text" name="name"><br>
		Price:<input type="text" name="price"><br>
		Quantity:<input type="number" name="qty"><br>
		Categorey:
		<select name="category">
			
			<option value="Candles">Candles</option>
			<option value="Enahancement Cream">Enhancement Cream</option>
		</select><br>
		Description:<textarea name="description"></textarea><br>
		Main Image <input type="file" name="main_img"><br>
		Other Images <input type="file" name="other_img[]" multiple><br>

		<input type="submit" name="upload" value="Add Product">
		
	</form>
</body>
</html>