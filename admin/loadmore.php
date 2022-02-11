<?php 
	require '../db_connect.php';
	$cat=$_POST['category'];
	echo "<div class=\"table-responsive\">
                                <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Image</th>
                                            <th>Product name</th>
                                            <th>Category</th>
                                            <th>Sub Category</th>
                                            <th>Stock Availability</th>
                                            <th>Price</th>

                                            <th></th>
                                        </tr>
                                    </thead>

                                    <tbody>"?>
                                        <?php 

                                            $query="select date,name,categorey,product.product_id,sub_category,qty,price,image from product inner join product_image on product.product_id=product_image.product_id where product_image.main_image='Yes' and product.categorey='$cat';";
                                            $result=mysqli_query($con,$query);
                                            while($row=mysqli_fetch_assoc($result)){

                                         ?>
                                        <?php echo "<tr>
                                            <td>".$row['date']."</td>
                                            <td><img src=\"../".$row['image']."\" alt=\"mini-product imgae\" class=\"mini-product-img\"></td>
                                            <td>".$row['name']."</td>
                                            <td>".$row['categorey']."</td>
                                            <td>".$row['sub_category']."</td>
                                            <td>".$row['qty']."</td>
                                            <td>$".$row['price']."</td>
                                            <td>

                                                <div class=\"dropdown no-arrow\">
                                                    <a class=\"dropdown-toggle\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                        <i class=\"fas fa-ellipsis-v fa-sm fa-fw text-gray-400\"></i>
                                                    </a>
                                                    <div class=\"dropdown-menu dropdown-menu-right shadow animated--fade-in\" aria-labelledby=\"dropdownMenuLink\">
                                                        <a class=\"dropdown-item\" href=\"update_product.php?id=".$row['product_id'] ."\">Edit</a>
                                                        <a class=\"dropdown-item\" href=\"remove_product.php?id=".$row['product_id']."\">Delete</a>

                                                    </div>
                                                </div>
                                            </td>
                                        </tr>"
                                    
                               		?><?php } 
                                    echo "</tbody>
                                </table>
                            </div>";
                        ?>