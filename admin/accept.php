<?php 
	require 'check_admin.php';
	require '../db_connect.php';
	$id=$_GET['id'];
	$pid=$_GET['pid'];
	$qty=$_GET['qty'];
	echo $id."<br>";
	echo $pid."<br>";
	$query="update order_product set status='Accepted' where product_id=$pid and id=$id;";
	$result=mysqli_query($con,$query);

	$query="select order_qty,sell_qty from product where product_id=$pid;";
	$result=mysqli_query($con,$query);
	$row=mysqli_fetch_assoc($result);

	$order=$row['order_qty']-$qty;
	$sell=$row['sell_qty']+$qty;

	$query="update product set order_qty=$order,sell_qty=$sell where product_id=$pid;";
	$result=mysqli_query($con,$query);
	header('location:index.php')
 ?>