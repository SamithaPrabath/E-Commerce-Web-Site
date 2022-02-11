<?php 
    session_start();
    require 'db_connect.php';
    if(!isset($_SESSION['email'])){
        header('location: login.php');
    }
    $email=$_SESSION['email'];
    
    $pre_email=$_SESSION['email'];
    if(isset($_POST['submit'])){


        $fname=$_POST['firstname'];
        $lname=$_POST['lastname'];
        $email=$_POST['email'];
        $tpno=$_POST['tpno'];
        $dob=$_POST['dob'];
        $sex=$_POST['gender'];
        if(!empty($dob)){
           $query="update user set fname='$fname',lname='$lname',email='$email',tpno='$tpno',dob='$dob',sex=$sex where email='$pre_email';" ;
        }
        else{
            $query="update user set fname='$fname',lname='$lname',email='$email',tpno='$tpno',sex=$sex where email='$pre_email';" ;
        }
        if(mysqli_query($con,$query)){
            echo "<script>alert('Details Changed');</script>";

        }
        else{
            echo mysqli_error($con);
        }
    }

 ?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>My Account &ndash; Belle Multipurpose Bootstrap 4 Template</title>
    <meta name="description" content="description">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/plugins.css">
    <!-- Bootstap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body class="page-template belle">
    <div class="pageWrapper">
        <!--Search Form Drawer-->
        <div class="search">
            <div class="search__form">
                <form class="search-bar__form" action="#">
                    <button class="go-btn search__button" type="submit"><i class="icon anm anm-search-l"></i></button>
                    <input class="search__input" type="search" name="q" value="" placeholder="Search entire store..." aria-label="Search" autocomplete="off">
                </form>
                <button type="button" class="search-trigger close-btn"><i class="icon anm anm-times-l"></i></button>
            </div>
        </div>
        <!--End Search Form Drawer-->
        <!--Top Header-->
        <div class="top-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-10 col-sm-8 col-md-5 col-lg-4">


                        <p class="phone-no"><i class="anm anm-phone-s"></i> +440 0(111) 044 833</p>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 d-none d-lg-none d-md-block d-lg-block">
                        <div class="text-center">
                            <p class="top-header_middle-text"> Worldwide Express Shipping</p>
                        </div>
                    </div>
                    <div class="col-2 col-sm-4 col-md-3 col-lg-4 text-right">
                        <span class="user-menu d-block d-lg-none"><i class="anm anm-user-al" aria-hidden="true"></i></span>
                        <ul class="customer-links list-inline">
                            <li><a href="logout.php">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--End Top Header-->
        <!--Header-->
        <div class="header-wrap animated d-flex home15-funiture-header">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-3 col-sm-3 col-md-3 col-lg-8 d-block d-lg-none">
                        <button type="button" class="btn--link site-header__menu js-mobile-nav-toggle mobile-nav--open">
                        <i class="icon anm anm-times-l"></i>
                        <i class="anm anm-bars-r"></i>
                    </button>
                    </div>
                    <!--Search Icon-->
                    <div class="col-4 col-sm-3 col-md-3 col-lg-2 d-none d-lg-block">
                        <div class="site-header__search text-left">
                            <button type="button" class="search-trigger"><i class="icon anm anm-search-l"></i></button>
                        </div>
                    </div>
                    <!--End Search Icon-->
                    <!--Desktop Logo-->
                    <div class="logo col-5 col-sm-6 col-md-6 col-lg-8 text-center">
                        <a href="index.php">
                            <img src="assets/images/fav_icon.png" width="72px" alt="logo" title="" />
                        </a>
                    </div>
                    <!--End Desktop Logo-->
                    <div class="col-4 col-sm-3 col-md-3 col-lg-2">
                        <div class="site-cart">
                            <a href="#;" class="site-header__cart" title="Cart">
                                <i class="icon anm anm-bag-l"></i>
                                <span id="CartCount" class="site-header__cart-count" data-cart-render="item_count">
                                    
                                    <?php 
                                    if(isset($_SESSION['email'])){
                                        $email=$_SESSION['email'];
                                        $query="select count(product_id) as count from cart where email='$email';";
                                        $result=mysqli_query($con,$query);

                                        if(mysqli_num_rows($result)>0){
                                            $row=mysqli_fetch_assoc($result);
                                            echo $row['count'];

                                        }
                                        else{
                                            ?>
                                            0
                                            <?php 
                                        }
                                    }

                                    else{?>!
                                    <?php 
                                    }  

                                     ?>
                                </span>
                            </a>
                            <!--Minicart Popup-->
                            <div id="header-cart" class="block block-cart">
                                <ul class="mini-products-list">
                                    <?php 

                                        $query="select name,price,image,a.product_id,qty,cqty from product inner join (select email,image,product_image.product_id,cart.qty as cqty from product_image inner join cart on product_image.product_id=cart.product_id where cart.email='$email' and product_image.main_image='Yes') a on product.product_id=a.product_id;";

                                       $result=mysqli_query($con,$query);
                                       while($row=mysqli_fetch_assoc($result)){


                                    ?>
                                    <li class="item">
                                        <a class="product-image minicart-img" href="#">
                                            <img src="<?php echo $row['image']; ?>" alt="3/4 Sleeve Kimono Dress" title="" />
                                        </a>
                                        <div class="product-details">
                                            <a href="remove.php?id=<?php echo $row['product_id']; ?>" class="remove"><i class="anm anm-times-l" aria-hidden="true"></i></a>

                                            <a class="pName" href="wishlist.php"><?php echo $row['name']; ?></a>
                                            <div class="variant-cart">Black / XL</div>
                                            <div class="wrapQtyBtn">
                                                <div class="qtyField">
                                                    <span class="label">Qty:</span>
                                                    <a class="qtyBtn minus" href="javascript:void(0);"><i class="fa anm anm-minus-r" aria-hidden="true"></i></a>
                                                    <input type="text" id="Quantity" name="quantity" value="<?php echo $row['cqty']; ?>" class="product-form__input qty">
                                                    <input type="number" id="price" value="<?php echo $row['price']; ?>" hidden>
                                                    <input type="number" id="pid" value="<?php echo $row['product_id']; ?>" hidden>
                                                    <a class="qtyBtn plus" href="javascript:void(0);"><i class="fa anm anm-plus-r" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                            <div class="priceRow">
                                                <div class="product-price">

                                                    <span class="money">$<?php echo $row['price']; ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <?php } ?>
                                </ul>
                                <div class="total">
                                    <div class="total-in">
                                        <?php 

                                            $query="select cart.qty*product.price as total from product inner join (select * from cart where email='$email') cart on product.product_id=cart.product_id";
                                            $result=mysqli_query($con,$query);
                                            $total=0;
                                            while ($row=mysqli_fetch_assoc($result)) {
                                                $total+=$row['total'];
                                            }
                                         ?>
                                         <input type="number" id="tot" value="<?php echo $total; ?>" hidden>
                                        <span class="label">Cart Subtotal:</span><span class="product-price" id='jtot'><span class="money">$<?php echo $total; ?></span>
                                    </div>
                                    <div id="hide" ></div>
                                    <div class="buttonSet text-center">
                                        <a href="wishlist.php" class="btn btn-secondary btn--small">View Cart</a>
                                        <a href="checkout.php" class="btn btn-secondary btn--small">Checkout</a>
                                    </div>
                                </div>
                            </div>
                            <!--End Minicart Popup-->
                        </div>

                        <!--Mobile Search-->
                        <div class="site-header__search d-block d-lg-none">
                            <button type="button" class="search-trigger"><i class="icon anm anm-search-l"></i></button>
                        </div>
                        <!--End Mobile Search-->
                    </div>
                </div>
                <!--Desktop Menu-->
                <div class="row">
                    <nav class="grid__item" id="AccessibleNav">
                        <ul id="siteNav" class="site-nav medium center hidearrow">
                            <li><a href="index.php">Home <i class="anm anm-angle-down-l"></i></a></li>

                            <li class="lvl1 parent megamenu"><a href="#">SHOP <i class="anm anm-angle-down-l"></i></a>
                                <div class="megamenu style4">
                                    <ul class="grid grid--uniform mmWrapper">
                                        <li class="grid__item lvl-1 col-md-3 col-lg-3"><a href="candles.php" class="site-nav lvl-1">CANDLES</a>
                                            <ul class="subLinks">
                                                <li class="lvl-2"><a href="#" class="site-nav lvl-2">Candle 1</a></li>
                                                <li class="lvl-2"><a href="#" class="site-nav lvl-2">Candle 2</a></li>
                                            </ul>
                                        </li>
                                        <li class="grid__item lvl-1 col-md-3 col-lg-3"><a href="enhancement.php" class="site-nav lvl-1">ENHANCEMENT CREAM</a>
                                            <ul class="subLinks">
                                                <li class="lvl-2"><a href="shop-left-sidebar.php" class="site-nav lvl-2">Category 1 </a></li>
                                                <li class="lvl-2"><a href="shop-right-sidebar.php" class="site-nav lvl-2">Category 2</a></li>

                                            </ul>
                                        </li>
                                        <li class="grid__item lvl-1 col-md-6 col-lg-6">
                                            <a href="#"><img src="assets/images/megamenu-bg.jpg" class="mega-menu-img" height="auto" alt="" title="" /></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="about.php">ABOUT <i class="anm anm-angle-down-l"></i></a>

                            </li>
                            <li class="lvl1 parent dropdown"><a href="Contact.php">CONTACT <i class="anm anm-angle-down-l"></i></a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!--End Desktop Menu-->
            </div>
        </div>
        <!--End Header-->
        <!--Mobile Menu-->
        <div class="mobile-nav-wrapper" role="navigation">
            <ul id="MobileNav" class="mobile-nav">
                <li><a href="index.php">Home</i></a></li>
                <li class="lvl1 parent megamenu"><a href="#">Shop <i class="anm anm-plus-l"></i></a>
                    <ul>
                        <li><a href="candles.php" class="site-nav">CANDLES<i class="anm anm-plus-l"></i></a>
                            <ul>
                                <li><a href="candles.php" class="site-nav">CANDLE 1</a></li>
                                <li><a href="#" class="site-nav">CANDLE 2</a></li>

                            </ul>
                        </li>
                        <li><a href="enhancement.php" class="site-nav">ENHANCEMENT CREAM<i class="anm anm-plus-l"></i></a>
                            <ul>
                                <li><a href="#" class="site-nav">Enhancement sub1  </a></li>
                                <li><a href="#" class="site-nav">Enhancement sub2</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="about.php">ABOUT</a>
                </li>
                <li><a href="about.php">CONTACT</a>
                </li>
            </ul>
        </div>
        <!--End Mobile Menu-->

        <!--Body Content-->
        <div id="page-content">
            <!--Page Title-->
            <div class="page section-header text-center">
                <div class="page-title">
                    <div class="wrapper">
                        <h1 class="page-width">My Account</h1>
                    </div>
                </div>
            </div>
            <!--End Page Title-->

            <div class="container">

                <div class="row margin-30px-bottom my-5">
                    <div class="col-xl-2 col-lg-2 col-md-12 md-margin-20px-bottom">
                        <!-- Nav tabs -->
                        <ul class="nav flex-column dashboard-list" role="tablist">
                            <li><a class="nav-link active" data-toggle="tab" href="#dashboard">Dashboard</a></li>
                            <li><a class="nav-link" data-toggle="tab" href="#orders">Orders</a></li>

                            <li><a class="nav-link" data-toggle="tab" href="#address">Addresses</a></li>
                            <li><a class="nav-link" data-toggle="tab" href="#account-details">Account details</a></li>
                            <li><a class="nav-link" href="./login.php">logout</a></li>
                        </ul>
                        <!-- End Nav tabs -->
                    </div>

                    <div class="col-xs-10 col-lg-10 col-md-12">
                        <!-- Tab panes -->
                        <div class="tab-content dashboard-content padding-30px-all md-padding-15px-all">
                            <!-- Dashboard -->
                            <div id="dashboard" class="tab-pane fade active show">
                                <h3>Dashboard </h3>
                                <p>From your account dashboard. you can easily check &amp; view your
                                    <a class="text-decoration-underline" href="#">recent orders</a>, manage your
                                    <a class="text-decoration-underline" href="#">shipping and billing addresses</a> and
                                    <a class="text-decoration-underline" href="#">edit your password and account details.</a>
                                </p>
                            </div>
                            <!-- End Dashboard -->

                            <!-- Orders -->
                            <div id="orders" class="product-order tab-pane fade">
                                <h3>Orders</h3>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="alt-font">
                                            <tr>
                                                <th>Order</th>
                                                <th>Product</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Total</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                $i=0;
                                                $email=$_SESSION['email'];
                                                
                                                $query="select od.date,a.* from order_details od inner join (select op.*,p.name,p.price from order_product op inner join product p on p.product_id=op.product_id where op.email='$email') a on a.id=od.id;";
                                                $result=mysqli_query($con,$query);
                                                if(!$result){
                                                    echo mysqli_error($con);

                                                }
                                                
                                                while($row=mysqli_fetch_assoc($result)){
                                                    $i++;
                                             ?>
                                            <tr>
                                                <td><?php echo $i ?></td>
                                                <td><?php echo $row['name'] ?></td>
                                                <td><?php echo $row['date'] ?></td>
                                                <td><?php echo $row['status'] ?></td>
                                                <td>$<?php echo $row['qty']*$row['price'] ?> for <?php echo $row['qty'] ?> item </td>
                                                <td><a class="view" href="cart-variant1.php">view</a></td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- End Orders -->

                            <!-- Address -->
                            <div id="address" class="address tab-pane">
                                <p class="xs-fon-13 margin-10px-bottom">The following addresses will be used on the checkout page by default.</p>
                                <h4 class="billing-address">Billing address</h4>
                                <a class="view margin-5px-bottom" href="#">edit</a>
                                <p>No 40 Baria Sreet <br> 133/2 NewYork City, <br> NY, United States.</p>
                            </div>
                            <!-- End Address -->

                            <!-- Account Details -->
                            <div id="account-details" class="tab-pane fade">
                                <h3>Account details </h3>
                                <div class="account-login-form bg-light-gray padding-20px-all">
                                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                                        <fieldset>
                                            <p>Already have an account? <a href="login.php"> Log in instead!</a></p>
                                            <?php 
                                                $query="select * from user where email='$pre_email';";
                                                $result=mysqli_query($con,$query);
                                                while($row=mysqli_fetch_assoc($result)){


                                                    if($row['sex']==1){
                                             ?>

                                            <div class="row">
                                                <div class="form-group">

                                                    <div class="form-group margin-15px-top col-md-12 col-lg-12 col-xl-12">
                                                        <label class="control-label padding-10px-right"><strong>Title</strong></label>
                                                        <label class="radio-inline">
                                                        <input name="gender" value="1" checked="checked" type="radio" class="padding-10px-right"> Mr. &nbsp;
                                                    </label>
                                                        <label class="radio-inline">
                                                        <input name="gender" value="0" type="radio" class="padding-10px-right"> Mrs.
                                                    </label>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php }
                                            else if($row['sex']==0){
                                        ?>
                                            <div class="row">
                                                <div class="form-group">

                                                    <div class="form-group margin-15px-top col-md-12 col-lg-12 col-xl-12">
                                                        <label class="control-label padding-10px-right"><strong>Title</strong></label>
                                                        <label class="radio-inline">
                                                        <input name="gender" value="1"  type="radio" class="padding-10px-right"> Mr. &nbsp;
                                                    </label>
                                                        <label class="radio-inline">
                                                        <input name="gender" value="0" type="radio" class="padding-10px-right" checked="checked"> Mrs.
                                                    </label>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php }
                                            else{
                                        ?>
                                            <div class="row">
                                                <div class="form-group">

                                                    <div class="form-group margin-15px-top col-md-12 col-lg-12 col-xl-12">
                                                        <label class="control-label padding-10px-right"><strong>Title</strong></label>
                                                        <label class="radio-inline">
                                                        <input name="gender" value="1"  type="radio" class="padding-10px-right"> Mr. &nbsp;
                                                    </label>
                                                        <label class="radio-inline">
                                                        <input name="gender" value="0" type="radio" class="padding-10px-right" > Mrs.
                                                    </label>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>
                                            <div class="row">
                                                <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                    <label for="input-firstname">First Name <span class="required-f">*</span></label>
                                                    <input name="firstname" value="<?php echo $row['Fname']; ?>" id="input-firstname" class="form-control" type="text">
                                                </div>
                                                <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                    <label for="input-lastname">Last Name <span class="required-f">*</span></label>
                                                    <input name="lastname" value="<?php echo $row['Lname']; ?>" id="input-lastname" class="form-control" type="text">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                    <label for="input-email">E-Mail <span class="required-f">*</span></label>
                                                    <input name="email" value="<?php echo $row['Email']; ?>" id="input-email" class="form-control" type="email">
                                                </div>
                                                <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                    <label for="input-password">Password <span class="required-f">*</span></label>
                                                    <input name="password" value="<?php echo $row['password']; ?>" id="input-password" class="form-control" type="text">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                    <label for="input-telephone">Telephone <span class="required-f">*</span></label>
                                                    <input name="tpno" value="<?php echo $row['tpno']; ?>" id="input-telephone" class="form-control" type="tel">
                                                </div>
                                                <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                    <label>Birthdate <span class="required-f">*</span></label>
                                                    <input name="dob" max="3000-12-31" min="1000-01-01" class="form-control" type="date" value="<?php echo $row['dob']; ?>">
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12 col-lg-12 col-xl-12 required">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" value="">Receive offers from our partners
                                                    </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" value="">Sign up for our newsletter 
                                                    </label>
                                                        <p>You may unsubscribe at any moment. For that purpose, please find our contact info in the legal notice.</p><br>

                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>
                                        </fieldset>

                                        <input type="submit" class="btn margin-15px-top btn-primary" name="submit" value="Save">
                                    </form>

                                </div>

                            </div>
                            <!-- End Account Details -->
                        </div>
                        <!-- End Tab panes -->
                    </div>
                </div>

                <div class="dashboard-upper-info">
                    <div class="row align-items-center no-gutters my-lg-5">
                        <div class="col-xl-3 col-lg-3 col-md-12">
                            <div class="d-single-info">
                                <p class="user-name">Hello <span class="font-weight-600">yourmail@info</span></p>
                                <p>(not yourmail@info? <a class="font-weight-600" href="login.php">Log Out</a>)</p>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-12">
                            <div class="d-single-info">
                                <p>Need Assistance? Customer service at.</p>
                                <p>admin@yoursite.com.</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-12">
                            <div class="d-single-info">
                                <p>E-mail them at </p>
                                <p>support@yoursite.com</p>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-12">
                            <div class="d-single-info text-lg-center">
                                <a class="view-cart" href="wishlist.php"><i class="icon anm anm-bag-l"></i> View Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Body Content-->

        <!--Footer-->
        <footer id="footer ">
            <div class="newsletter-section">
                <div class="container">
                    <div class="row my-lg-4">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-7 w-100 d-flex justify-content-start align-items-center">
                            <div class="display-table">
                                <div class="display-table-cell footer-newsletter">
                                    <div class="section-header text-center">
                                        <label class="h2"><span>sign up for </span>newsletter</label>
                                    </div>
                                    <form action="#" method="post">
                                        <div class="input-group">
                                            <input type="email" class="input-group__field newsletter__input" name="EMAIL" value="" placeholder="Email address" required="">
                                            <span class="input-group__btn">
                                            <button type="submit" class="btn newsletter__submit" name="commit" id="Subscribe"><span class="newsletter__submit-text--large">Subscribe</span></button>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-5 d-flex justify-content-end align-items-center">
                            <div class="footer-social">
                                <ul class="list--inline site-footer__social-icons social-icons">
                                    <li><a class="social-icons__link" href="#" target="_blank" title="Facebook"><i class="icon icon-facebook"></i></a></li>
                                    <li><a class="social-icons__link" href="#" target="_blank" title="Twitter"><i class="icon icon-twitter"></i> <span class="icon__fallback-text">Twitter</span></a></li>
                                    <li><a class="social-icons__link" href="#" target="_blank" title="Pinterest"><i class="icon icon-pinterest"></i> <span class="icon__fallback-text">Pinterest</span></a></li>
                                    <li><a class="social-icons__link" href="#" target="_blank" title="Instagram"><i class="icon icon-instagram"></i> <span class="icon__fallback-text">Instagram</span></a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="site-footer">
                <div class="container">
                    <!--Footer Links-->
                    <div class="footer-top">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-3 col-lg-4 footer-links">
                                <h4 class="h4">Quick Shop</h4>
                                <ul>
                                    <li><a href="candles.php">Candles</a></li>
                                    <li><a href="enhancement.php">Enhancement</a></li>
                                    <li><a href="#">Others</a></li>

                                </ul>
                            </div>
                            <div class="col-12 col-sm-12 col-md-3 col-lg-4 footer-links">
                                <h4 class="h4">Informations</h4>
                                <ul>
                                    <li><a href="#">About us</a></li>

                                    <li><a href="my-account.php">My Account</a></li>
                                </ul>
                            </div>

                            <div class="col-12 col-sm-12 col-md-3 col-lg-4 contact-box">
                                <h4 class="h4">Contact Us</h4>
                                <ul class="addressFooter">
                                    <li><i class="icon anm anm-map-marker-al"></i>
                                        <p>55 Gallaxy Enque,<br>2568 steet, 23568 NY</p>
                                    </li>
                                    <li class="phone"><i class="icon anm anm-phone-s"></i>
                                        <p>(440) 000 000 0000</p>
                                    </li>
                                    <li class="email"><i class="icon anm anm-envelope-l"></i>
                                        <p>sales@yousite.com</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--End Footer Links-->
                    <hr>
                    <div class="footer-bottom">
                        <div class="row">
                            <!--Footer Copyright-->
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 order-1 order-md-0 order-lg-0 order-sm-1 copyright text-sm-center text-md-left text-lg-left"><span>&copy; 2019 Dulagro.</span> All Rights Reserved.</div>
                            <!--End Footer Copyright-->
                            <!--Footer Payment Icon-->
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 order-0 order-md-1 order-lg-1 order-sm-0 payment-icons text-right text-md-center">
                                <ul class="payment-icons list--inline">
                                    <li><i class="icon fa fa-cc-visa" aria-hidden="true"></i></li>
                                    <li><i class="icon fa fa-cc-mastercard" aria-hidden="true"></i></li>
                                    <li><i class="icon fa fa-cc-discover" aria-hidden="true"></i></li>
                                    <li><i class="icon fa fa-cc-paypal" aria-hidden="true"></i></li>
                                    <li><i class="icon fa fa-cc-amex" aria-hidden="true"></i></li>
                                    <li><i class="icon fa fa-credit-card" aria-hidden="true"></i></li>
                                </ul>
                            </div>
                            <!--End Footer Payment Icon-->
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--End Footer-->
        <!--Scoll Top-->
        <span id="site-scroll"><i class="icon anm anm-angle-up-r"></i></span>
        <!--End Scoll Top-->

        <!-- Including Jquery -->
        <script src="assets/js/vendor/jquery-3.3.1.min.js"></script>
        <script src="assets/js/vendor/jquery.cookie.js"></script>
        <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
        <script src="assets/js/vendor/wow.min.js"></script>
        <!-- Including Javascript -->
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/lazysizes.js"></script>
        <script src="assets/js/main.js"></script>
    </div>
</body>

</html>