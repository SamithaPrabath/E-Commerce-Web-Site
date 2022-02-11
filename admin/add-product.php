<?php 

    require '../db_connect.php';
    require 'check_admin.php';
    $name;
    $description;
    $description_short;
    $price;
    $qty;
    $category;
    $sub_category;
    $target_dir = "Images/";

    if(isset($_POST['upload'])){
        $name=$_POST['name'];
        $description=$_POST['name'];
        $price=$_POST['price'];
        $category=$_POST['category'];
        $qty=$_POST['qty'];
        $sub_category=$_POST['sub_category'];
        $description_short=$_POST['description_short'];
        $pid;
        $target_file = $target_dir . basename($_FILES["main_img"]["name"]);
        if(!empty($target_file)){
            if (move_uploaded_file($_FILES["main_img"]["tmp_name"], "../".$target_file)) {
                $query="insert into product (name,price,categorey,description,qty,sub_category,description_short,date) values('$name',$price,'$category','$description',$qty,'$sub_category','$description_short',curdate());";
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
                        move_uploaded_file($_FILES["other_img"]["tmp_name"][$key], "../".$target_file);
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
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dulagro</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">


</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fa fa-code" aria-hidden="true"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Dulagro</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">


            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fa fa-shopping-bag"></i>
                    <span>Product</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="add-product.php">Add product</a>
                        <a class="collapse-item" href="all-product.php">Listed Products</a>
                        <a class="collapse-item" href="sell-product.php">Sell products</a>
                    </div>
                </div>
            </li>
            <!-- Nav Item - Messages -->
            <li class="nav-item">
                <a class="nav-link" href="message.php">
                    <i class="fa fa-envelope"></i>
                    <span>Message</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>


                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                    <?php 
                                    $query='select count(email) as count from message;';
                                    $result=mysqli_query($con,$query);
                                    $count=0;
                                    if($row=mysqli_fetch_assoc($result)){
                                        $count=$row['count'];
                                    }
                                 ?>
                                <span class="badge badge-danger badge-counter"><?php echo $count; ?></span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="message.php">

                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having .</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>

                                <a class="dropdown-item d-flex align-items-center" href="#">

                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">

                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">

                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="message.php">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Dulagro</span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i> Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- End of Topbar -->

                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">

                    </div>

                </div>
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 text-center">
                            <h2 class="h3 mb-0  py-3  m-0 font-weight-bold text-secondary">Add Product</h2>
                        </div>

                        <div class="card-body">

                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="price-qty d-sm-flex align-items-center justify-content-between">
                                    <div class="form-group  mb-4 col-12 col-lg-6">
                                        <label class="lable-txt">Main Category <span class="text-danger">*</span></label>
                                        <select class="mdb-select md-form bg-white p-2 category-select placeholder-color" name="category">
                                        <option value="" disabled selected>Select Main Category</option>
                                            <option value="Enahancement Cream">Enhancement Cream</option>
                                            <option value="Candles">Enhancement Candle</option>
                                        
                                      </select>
                                    </div>
                                    <div class="form-group  mb-4 col-12 col-lg-6">
                                        <label class="lable-txt"> Sub Category <span class="text-danger">*</span></label>
                                        <select class="mdb-select md-form bg-white p-2 category-select placeholder-color" name="sub_category">
                                        <option value="" disabled selected>Select sub Category</option>
                                        <option value="Fragrance 1">Fragrance 1</option>
                                        <option value="Fragrance 2">Fragrance 2</option>
                                        
                                      </select>
                                    </div>
                                </div>
                                <div class=" form-group mb-4 col-12">
                                    <label for="productName " class="lable-txt">Product Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control py-4 placeholder-color" id="productName " aria-describedby="emailHelp " required placeholder="Enter Product Title " name="name">

                                </div>

                                <div class="form-group mb-4 col-12">
                                    <label for="productDescription" class="lable-txt">Product Description (Short) <span class="text-danger">*</span></label>
                                    <textarea class="form-control placeholder-color" id="productDescription" rows="2" required maxlength="100" name="description_short"></textarea>
                                </div>

                                <div class="form-group mb-4 col-12">
                                    <label for="productDescription" class="lable-txt">Product Description</label>
                                    <textarea class="form-control  placeholder-color" id="productDescription" rows="10" name="description"></textarea>
                                </div>
                                <div class="price-qty d-sm-flex align-items-center justify-content-between">
                                    <div class="form-group mb-4 col-12 col-lg-6">
                                        <label for="Price" class="lable-txt">Price <span class="text-danger">*</span></label>
                                        <input type="text " class="form-control py-4 placeholder-color" id="Price " placeholder="Price" required name="price">
                                    </div>
                                    <div class="form-group mb-4 col-12 col-lg-6">
                                        <label for="Quantity" class="lable-txt">Quantity <span class="text-danger">*</span></label>
                                        <input type="text " class="form-control py-4 placeholder-color" id="Quantity " placeholder="Product Qunatity" required name="qty">
                                    </div>
                                </div>

                                <div class=" form-group mb-4  col-12">
                                    <label for="coverImg" class="form-label" class="lable-txt">Cover Image <span class="text-danger">*</span></label>
                                    <input class="form-control  placeholder-color" type="file" id="coverImg" required name="main_img">

                                </div>
                                <div class=" form-group mb-4 col-12">
                                    <label for="OtherImages" class="form-label">Other Images</label>
                                    <input class="form-control placeholder-color" type="file" id="OtherImages" multiple name="other_img[]">
                                </div>
                                <div class="button-sec mt-3 col-12">
                                    <input type="reset" class="btn btn-light px-3 col-12 col-lg-2 mb-3 mb-lg-0" value="Cancel">
                                    <input type="submit" class="btn btn-primary mx-lg-3 col-12 col-lg-2 mb-3 mb-lg-0" value="Submit" name="upload">

                                </div>
                            </form>

                        </div>
                    </div>


                </div>




            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white ">
                <div class="container my-auto ">
                    <div class="copyright text-center my-auto ">
                        <span>Copyright &copy; Dulagro Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded " href="#page-top ">
        <i class="fas fa-angle-up "></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade " id="logoutModal " tabindex="-1 " role="dialog " aria-labelledby="exampleModalLabel " aria-hidden="true ">
        <div class="modal-dialog " role="document ">
            <div class="modal-content ">
                <div class="modal-header ">
                    <h5 class="modal-title " id="exampleModalLabel ">Ready to Leave?</h5>
                    <button class="close " type="button " data-dismiss="modal " aria-label="Close ">
                        <span aria-hidden="true ">×</span>
                    </button>
                </div>
                <div class="modal-body ">Select "Logout " below if you are ready to end your current session.</div>
                <div class="modal-footer ">
                    <button class="btn btn-secondary " type="button " data-dismiss="modal ">Cancel</button>
                    <a class="btn btn-primary " href="../logout.php ">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js "></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js "></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js "></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js "></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js "></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js "></script>
    <script src="js/demo/chart-pie-demo.js "></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js "></script>


</body>

</html>