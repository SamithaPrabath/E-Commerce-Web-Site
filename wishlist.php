<?php 

    require 'db_connect.php';
    $email;
    $total=0;
    session_start();
    if(!isset($_SESSION['email'])){
        header('location: login.php');
    }
    else if(isset($_GET['id'])){
        $email=$_SESSION['email'];
        $id=$_GET['id'];
        $query="insert into cart(email,product_id) values('$email',$id);";
        $result=mysqli_query($con,$query);
    }
    


 ?>

<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Wishlist &ndash; Belle Multipurpose Bootstrap 4 Template</title>
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
    <link rel="stylesheet" href="assets/style1.css">
</head>

<body class="page-template belle">
    <div class="pageWrapper">
        <!-- Newsletter Popup -->
        <div class="newsletter-wrap" id="popup-container">
            <div id="popup-window">
                <a class="btn closepopup"><i class="icon icon anm anm-times-l"></i></a>
                <!-- Modal content-->
                <div class="display-table splash-bg">
                    <div class="display-table-cell width40"><img src="assets/images/newsletter-img.jpg" alt="Join Our Mailing List" title="Join Our Mailing List" /> </div>
                    <div class="display-table-cell width60 text-center">
                        <div class="newsletter-left">
                            <h2>Join Our Mailing List</h2>
                            <p>Sign Up for our exclusive email list and be the first to know about new products and special offers</p>
                            <form action="#" method="post">
                                <div class="input-group">
                                    <input type="email" class="input-group__field newsletter__input" name="EMAIL" value="" placeholder="Email address" required="">
                                    <span class="input-group__btn">
            <button type="submit" class="btn newsletter__submit" name="commit" id="subscribeBtn"> <span class="newsletter__submit-text--large">Subscribe</span> </button>
                                    </span>
                                </div>
                            </form>
                            <ul class="list--inline site-footer__social-icons social-icons">
                                <li><a class="social-icons__link" href="#" title="Facebook"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
                                <li><a class="social-icons__link" href="#" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a class="social-icons__link" href="#" title="Pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                <li><a class="social-icons__link" href="#" title="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a class="social-icons__link" href="#" title="YouTube"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                <li><a class="social-icons__link" href="#" title="Vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Newsletter Popup -->
        <!--Search Form Drawer-->
        <div class="search">
            <div class="search__form">
                <form class="search-bar__form" action="#">
                    <button class="go-btn search__button" type="submit"><i class="icon anm anm-search-l"></i></button>
                    <input class="search__input" type="search" name="q" value="" placeholder="Search entire store..." aria-label="Search" autocomplete="off">
                </form>
                <button type="button" class="search-trigger close-btn"><i class="anm anm-times-l"></i></button>
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
                            <?php 
                                    if(isset($_SESSION['email'])){
                                ?>
                                    <li><a href="logout.php">Log out</a></li>

                                <?php }
                                    else{
                                ?>
                                <li><a href="login.php">Login</a></li>
                                <li><a href="Register.php">Create Account</a></li>
                                <?php } ?>
                           
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
                            <img src="assets/images/logo (2).png" width="48px" alt="logo" title="" />
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
                <li><a href="Contact.php">CONTACT</a>
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
                        <h1 class="page-width">Shopping Cart</h1>
                    </div>
                </div>
            </div>
            <!--End Page Title-->

            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 main-col">
                        <form action="#">
                            <div class="wishlist-table table-content table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="product-name text-center alt-font">Remove</th>
                                            <th class="product-price text-center alt-font">Images</th>
                                            <th class="product-name alt-font">Product</th>
                                            <th class="product-price text-center alt-font">Unit Price</th>
                                            <th class="stock-status text-center alt-font">Stock Status</th><th class="stock-status text-center alt-font">Quantity</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 

                                            $query="select name,price,image,a.product_id,qty,cqty from product inner join (select email,image,product_image.product_id,cart.qty as cqty from product_image inner join cart on product_image.product_id=cart.product_id where cart.email='$email' and product_image.main_image='Yes') a on product.product_id=a.product_id";
                                            $result=mysqli_query($con,$query);
                                            $total=0;
                                            while($row=mysqli_fetch_assoc($result)){
                                                $total=$total+$row['cqty']*$row['price'];

                                         ?>
                                        <tr>
                                            <td class="product-remove text-center" valign="middle"><a href="remove.php?id=<?php echo $row['product_id']; ?>"><i class="icon icon anm anm-times-l"></i></a></td>
                                            <td class="product-thumbnail text-center">
                                                <a href="single product.php?id=<?php echo $row['product_id']; ?>"><img src="<?php echo $row['image']; ?>" alt="" title="" /></a>
                                            </td>
                                            <td class="product-name">
                                                <h4 class="no-margin"><a href="single product.php??id=<?php echo $row['product_id']; ?>"><?php  echo $row['name'];?></a></h4>
                                            </td>
                                            <td class="product-price text-center"><span class="amount">$<?php echo $row['price']; ?></span></td>
                                            <td class="stock text-center">
                                                <?php 

                                                    if($row['qty']>0){

                                                 ?>
                                                <span class="in-stock">in stock</span>
                                                <?php 
                                                    }
                                                    else{
                                                 ?>
                                                 <span class="in-stock">out of stock</span>
                                             <?php } ?>
                                            </td>
                                            <td class="product-price text-center">
                                                <div class="qtyField">
                                                    
                                                    <a class="qtyBtn minus" href="javascript:void(0);"><i class="fa anm anm-minus-r" aria-hidden="true"></i></a>
                                                    <input type="text" id="Quantity" name="quantity" value="<?php echo $row['cqty']; ?>" class="product-form__input qty">
                                                    <input type="number" id="price" value="<?php echo $row['price']; ?>" hidden>
                                                    <input type="number" id="pid" value="<?php echo $row['product_id']; ?>" hidden>
                                                    
                                                    <a class="qtyBtn plus" href="javascript:void(0);"><i class="fa anm anm-plus-r" aria-hidden="true"></i></a>
                                                </div>
                                                <div id="hide" style="display:non"></div>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </form>
                    </div>


                    <div class="container mt-4">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 mb-4">
                                <h5>Estimate Shipping and Tax</h5>
                                <form action="#" method="post">
                                    <div class="form-group">
                                        <label for="address_country">Country</label>
                                        <select id="address_country" name="address[country]" data-default="United States"><option value="Belgium" data-provinces="[]">Belgium</option>
                                            <option value="---" data-provinces="[]">---</option>
                                            <option value="Afghanistan" data-provinces="[]">Afghanistan</option>
                                            <option value="Aland Islands" data-provinces="[]">Åland Islands</option>
                                            <option value="Albania" data-provinces="[]">Albania</option>
                                            <option value="Algeria" data-provinces="[]">Algeria</option>
                                            <option value="Andorra" data-provinces="[]">Andorra</option>
                                            <option value="Angola" data-provinces="[]">Angola</option>
                                            <option value="Anguilla" data-provinces="[]">Anguilla</option>
                                            <option value="Antigua And Barbuda" data-provinces="[]">Antigua &amp; Barbuda</option>
                                            <option value="Armenia" data-provinces="[]">Armenia</option>
                                            <option value="Aruba" data-provinces="[]">Aruba</option>
                                            <option value="Austria" data-provinces="[]">Austria</option>
                                            <option value="Azerbaijan" data-provinces="[]">Azerbaijan</option>
                                            <option value="Bahamas" data-provinces="[]">Bahamas</option>
                                            <option value="Bahrain" data-provinces="[]">Bahrain</option>
                                            <option value="Bangladesh" data-provinces="[]">Bangladesh</option>
                                            <option value="Barbados" data-provinces="[]">Barbados</option>
                                            <option value="Belarus" data-provinces="[]">Belarus</option>
                                            <option value="Belgium" data-provinces="[]">Belgium</option>
                                            <option value="Belize" data-provinces="[]">Belize</option>
                                            <option value="Benin" data-provinces="[]">Benin</option>
                                            <option value="Bermuda" data-provinces="[]">Bermuda</option>
                                            <option value="Bhutan" data-provinces="[]">Bhutan</option>
                                            <option value="Bolivia" data-provinces="[]">Bolivia</option>
                                            <option value="Bosnia And Herzegovina" data-provinces="[]">Bosnia &amp; Herzegovina</option>
                                            <option value="Botswana" data-provinces="[]">Botswana</option>
                                            <option value="Bouvet Island" data-provinces="[]">Bouvet Island</option>
                                            <option value="British Indian Ocean Territory" data-provinces="[]">British Indian Ocean Territory</option>
                                            <option value="Virgin Islands, British" data-provinces="[]">British Virgin Islands</option>
                                            <option value="Brunei" data-provinces="[]">Brunei</option>
                                            <option value="Bulgaria" data-provinces="[]">Bulgaria</option>
                                            <option value="Burkina Faso" data-provinces="[]">Burkina Faso</option>
                                            <option value="Burundi" data-provinces="[]">Burundi</option>
                                            <option value="Cambodia" data-provinces="[]">Cambodia</option>
                                            <option value="Republic of Cameroon" data-provinces="[]">Cameroon</option>
                                            <option value="Cape Verde" data-provinces="[]">Cape Verde</option>
                                            <option value="Bonaire, Sint Eustatius and Saba" data-provinces="[]">Caribbean Netherlands</option>
                                            <option value="Cayman Islands" data-provinces="[]">Cayman Islands</option>
                                            <option value="Central African Republic" data-provinces="[]">Central African Republic</option>
                                            <option value="Chad" data-provinces="[]">Chad</option>
                                            <option value="Chile" data-provinces="[]">Chile</option>
                                            <option value="Comoros" data-provinces="[]">Comoros</option>
                                            <option value="Congo" data-provinces="[]">Congo - Brazzaville</option>
                                            <option value="Congo, The Democratic Republic Of The" data-provinces="[]">Congo - Kinshasa</option>
                                            <option value="Cook Islands" data-provinces="[]">Cook Islands</option>
                                            <option value="Costa Rica" data-provinces="[]">Costa Rica</option>
                                            <option value="Croatia" data-provinces="[]">Croatia</option>
                                            <option value="Cuba" data-provinces="[]">Cuba</option>
                                            <option value="Curaçao" data-provinces="[]">Curaçao</option>
                                            <option value="Cyprus" data-provinces="[]">Cyprus</option>
                                            <option value="Czech Republic" data-provinces="[]">Czech Republic</option>
                                            <option value="Côte d'Ivoire" data-provinces="[]">Côte d'Ivoire</option>
                                            <option value="Denmark" data-provinces="[]">Denmark</option>
                                            <option value="Djibouti" data-provinces="[]">Djibouti</option>
                                            <option value="Dominica" data-provinces="[]">Dominica</option>
                                            <option value="Dominican Republic" data-provinces="[]">Dominican Republic</option>
                                            <option value="Finland" data-provinces="[]">Finland</option>
                                            <option value="France" data-provinces="[]">France</option>
                                            <option value="French Guiana" data-provinces="[]">French Guiana</option>
                                            <option value="French Polynesia" data-provinces="[]">French Polynesia</option>
                                            <option value="French Southern Territories" data-provinces="[]">French Southern Territories</option>
                                            <option value="Gabon" data-provinces="[]">Gabon</option>
                                            <option value="Gambia" data-provinces="[]">Gambia</option>
                                            <option value="Georgia" data-provinces="[]">Georgia</option>
                                            <option value="Germany" data-provinces="[]">Germany</option>
                                            <option value="Ghana" data-provinces="[]">Ghana</option>
                                            <option value="Gibraltar" data-provinces="[]">Gibraltar</option>
                                            <option value="Greece" data-provinces="[]">Greece</option>
                                            <option value="Greenland" data-provinces="[]">Greenland</option>
                                            <option value="Jersey" data-provinces="[]">Jersey</option>
                                            <option value="Jordan" data-provinces="[]">Jordan</option>
                                            <option value="Kazakhstan" data-provinces="[]">Kazakhstan</option>
                                            <option value="Kenya" data-provinces="[]">Kenya</option>
                                            <option value="Kiribati" data-provinces="[]">Kiribati</option>
                                            <option value="Kosovo" data-provinces="[]">Kosovo</option>
                                            <option value="Kuwait" data-provinces="[]">Kuwait</option>
                                            <option value="Kyrgyzstan" data-provinces="[]">Kyrgyzstan</option>
                                            <option value="Lao People's Democratic Republic" data-provinces="[]">Laos</option>
                                            <option value="Latvia" data-provinces="[]">Latvia</option>
                                            <option value="Lebanon" data-provinces="[]">Lebanon</option>
                                            <option value="Lesotho" data-provinces="[]">Lesotho</option>
                                            <option value="Liberia" data-provinces="[]">Liberia</option>
                                            <option value="Libyan Arab Jamahiriya" data-provinces="[]">Libya</option>
                                            <option value="Liechtenstein" data-provinces="[]">Liechtenstein</option>
                                            <option value="Lithuania" data-provinces="[]">Lithuania</option>
                                            <option value="Luxembourg" data-provinces="[]">Luxembourg</option>
                                            <option value="Macao" data-provinces="[]">Macau SAR China</option>
                                            <option value="Macedonia, Republic Of" data-provinces="[]">Macedonia</option>
                                            <option value="Madagascar" data-provinces="[]">Madagascar</option>
                                            <option value="Malawi" data-provinces="[]">Malawi</option>
                                            <option value="Monaco" data-provinces="[]">Monaco</option>
                                            <option value="Mongolia" data-provinces="[]">Mongolia</option>
                                            <option value="Montenegro" data-provinces="[]">Montenegro</option>
                                            <option value="Montserrat" data-provinces="[]">Montserrat</option>
                                            <option value="Morocco" data-provinces="[]">Morocco</option>
                                            <option value="Mozambique" data-provinces="[]">Mozambique</option>
                                            <option value="Myanmar" data-provinces="[]">Myanmar (Burma)</option>
                                            <option value="Namibia" data-provinces="[]">Namibia</option>
                                            <option value="Nauru" data-provinces="[]">Nauru</option>
                                            <option value="Nepal" data-provinces="[]">Nepal</option>
                                            <option value="Netherlands" data-provinces="[]">Netherlands</option>
                                            <option value="Samoa" data-provinces="[]">Samoa</option>
                                            <option value="San Marino" data-provinces="[]">San Marino</option>
                                            <option value="Sao Tome And Principe" data-provinces="[]">São Tomé &amp; Príncipe</option>
                                            <option value="Saudi Arabia" data-provinces="[]">Saudi Arabia</option>
                                            <option value="Senegal" data-provinces="[]">Senegal</option>
                                            <option value="Serbia" data-provinces="[]">Serbia</option>
                                            <option value="Seychelles" data-provinces="[]">Seychelles</option>
                                            <option value="Sierra Leone" data-provinces="[]">Sierra Leone</option>
                                            <option value="Singapore" data-provinces="[]">Singapore</option>
                                            <option value="Sint Maarten" data-provinces="[]">Sint Marteen</option>
                                            <option value="Slovakia" data-provinces="[]">Slovakia</option>
                                            <option value="Slovenia" data-provinces="[]">Slovenia</option>
                                            <option value="Solomon Islands" data-provinces="[]">Solomon Islands</option>
                                            <option value="Sri Lanka" data-provinces="[]">Sri Lanka</option>
                                            <option value="Saint Barthélemy" data-provinces="[]">St. Barthélemy</option>
                                            <option value="Saint Helena" data-provinces="[]">St. Helena</option>
                                            <option value="Saint Kitts And Nevis" data-provinces="[]">St. Kitts &amp; Nevis</option>
                                            <option value="Saint Lucia" data-provinces="[]">St. Lucia</option>
                                            <option value="Saint Martin" data-provinces="[]">St. Martin</option>
                                            <option value="Saint Pierre And Miquelon" data-provinces="[]">St. Pierre &amp; Miquelon</option>
                                            <option value="St. Vincent" data-provinces="[]">St. Vincent &amp; Grenadines</option>
                                            <option value="Sudan" data-provinces="[]">Sudan</option>
                                            <option value="Suriname" data-provinces="[]">Suriname</option>
                                            <option value="Svalbard And Jan Mayen" data-provinces="[]">Svalbard &amp; Jan Mayen</option>
                                            <option value="Swaziland" data-provinces="[]">Swaziland</option>
                                            <option value="Sweden" data-provinces="[]">Sweden</option>
                                            <option value="Switzerland" data-provinces="[]">Switzerland</option>
                                            <option value="Syria" data-provinces="[]">Syria</option>
                                            <option value="Taiwan" data-provinces="[]">Taiwan</option>
                                            <option value="Tajikistan" data-provinces="[]">Tajikistan</option>
                                            <option value="Timor Leste" data-provinces="[]">Timor-Leste</option>
                                            <option value="Togo" data-provinces="[]">Togo</option>
                                            <option value="Tokelau" data-provinces="[]">Tokelau</option>
                                            <option value="Tonga" data-provinces="[]">Tonga</option>
                                            <option value="Trinidad and Tobago" data-provinces="[]">Trinidad &amp; Tobago</option>
                                            <option value="Tunisia" data-provinces="[]">Tunisia</option>
                                            <option value="Turkey" data-provinces="[]">Turkey</option>
                                            <option value="Turkmenistan" data-provinces="[]">Turkmenistan</option>
                                            <option value="Turks and Caicos Islands" data-provinces="[]">Turks &amp; Caicos Islands</option>
                                            <option value="Tuvalu" data-provinces="[]">Tuvalu</option>
                                            <option value="United States Minor Outlying Islands" data-provinces="[]">U.S. Outlying Islands</option>
                                            <option value="Uganda" data-provinces="[]">Uganda</option>
                                            <option value="Ukraine" data-provinces="[]">Ukraine</option>
                                            <option value="United Arab Emirates" >United Arab Emirates</option>
                                            <option value="United Kingdom" data-provinces="[]">United Kingdom</option>
                                            <option value="United States">United States</option>
                                            <option value="Uruguay" data-provinces="[]">Uruguay</option>
                                            <option value="Uzbekistan" data-provinces="[]">Uzbekistan</option>
                                            <option value="Vanuatu" data-provinces="[]">Vanuatu</option>
                                            <option value="Holy See (Vatican City State)" data-provinces="[]">Vatican City</option>
                                            <option value="Venezuela" data-provinces="[]">Venezuela</option>
                                            <option value="Vietnam" data-provinces="[]">Vietnam</option>
                                            <option value="Wallis And Futuna" data-provinces="[]">Wallis &amp; Futuna</option>
                                            <option value="Western Sahara" data-provinces="[]">Western Sahara</option>
                                            <option value="Yemen" data-provinces="[]">Yemen</option>
                                            <option value="Zambia" data-provinces="[]">Zambia</option>
                                            <option value="Zimbabwe" data-provinces="[]">Zimbabwe</option></select>
                                    </div>

                                    <div class="form-group">
                                        <label>State</label>
                                        <select id="address_province" name="address[province]" data-default="">
                                          <option value="Alabama">Alabama</option>
                                          <option value="Alaska">Alaska</option>
                                          <option value="American Samoa">American Samoa</option>
                                          <option value="Arizona">Arizona</option>
                                          <option value="Arkansas">Arkansas</option>
                                          <option value="California">California</option>
                                          <option value="Colorado">Colorado</option>
                                          <option value="Connecticut">Connecticut</option>
                                          <option value="Delaware">Delaware</option>
                                          <option value="District of Columbia">District of Columbia</option>
                                          <option value="Federated States of Micronesia">Federated States of Micronesia</option>
                                          <option value="Florida">Florida</option>
                                          <option value="Georgia">Georgia</option>
                                          <option value="Guam">Guam</option>
                                          <option value="Hawaii">Hawaii</option>
                                          <option value="Idaho">Idaho</option>
                                          <option value="Illinois">Illinois</option>
                                          <option value="Indiana">Indiana</option>
                                          <option value="Iowa">Iowa</option>
                                          <option value="Kansas">Kansas</option>
                                          <option value="Kentucky">Kentucky</option>
                                          <option value="Louisiana">Louisiana</option>
                                          <option value="Maine">Maine</option>
                                          <option value="Marshall Islands">Marshall Islands</option>
                                          <option value="Maryland">Maryland</option>
                                          <option value="Massachusetts">Massachusetts</option>
                                          <option value="Michigan">Michigan</option>
                                          <option value="Minnesota">Minnesota</option>
                                          <option value="Mississippi">Mississippi</option>
                                          <option value="Missouri">Missouri</option>
                                          <option value="Montana">Montana</option>
                                          <option value="Nebraska">Nebraska</option>
                                          <option value="Nevada">Nevada</option>
                                          <option value="New Hampshire">New Hampshire</option>
                                          <option value="New Jersey">New Jersey</option>
                                          <option value="New Mexico">New Mexico</option>
                                          <option value="New York">New York</option>
                                          <option value="North Carolina">North Carolina</option>
                                          <option value="North Dakota">North Dakota</option>
                                          <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                          <option value="Ohio">Ohio</option>
                                          <option value="Oklahoma">Oklahoma</option>
                                          <option value="Oregon">Oregon</option>
                                          <option value="Palau">Palau</option>
                                          <option value="Pennsylvania">Pennsylvania</option>
                                          <option value="Puerto Rico">Puerto Rico</option>
                                          <option value="Rhode Island">Rhode Island</option>
                                          <option value="South Carolina">South Carolina</option>
                                          <option value="South Dakota">South Dakota</option>
                                          <option value="Tennessee">Tennessee</option>
                                          <option value="Texas">Texas</option>
                                          <option value="Utah">Utah</option>
                                          <option value="Vermont">Vermont</option>
                                          <option value="Virgin Islands">Virgin Islands</option>
                                          <option value="Virginia">Virginia</option>
                                          <option value="Washington">Washington</option>
                                          <option value="West Virginia">West Virginia</option>
                                          <option value="Wisconsin">Wisconsin</option>
                                          <option value="Wyoming">Wyoming</option>
                                          <option value="Armed Forces Americas">Armed Forces Americas</option>
                                          <option value="Armed Forces Europe">Armed Forces Europe</option>
                                          <option value="Armed Forces Pacific">Armed Forces Pacific</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="address_zip">Postal/Zip Code</label>
                                        <input type="text" id="address_zip" name="address[zip]">
                                    </div>

                                    <div class="actionRow">
                                        <div><input type="button" class="btn btn-secondary btn--small" value="Calculate shipping"></div>
                                    </div>
                                </form>
                            </div>

                            <div class="col-12 col-sm-12  col-md-6 col-lg-6 cart__footer">
                                <div class="solid-border">
                                    <div class="row border-bottom pb-2">
                                        <span class="col-12 col-sm-6 cart__subtotal-title">Subtotal</span>
                                        <input type="number" id="tot1" value="<?php echo $total; ?>" hidden>
                                        <span class="col-12 col-sm-6 text-right"><span class="money" id="jtot2"><?php echo "$".$total; ?></span></span>
                                    </div>
                                    <div class="row border-bottom pb-2 pt-2">

                                        <span class="col-12 col-sm-6 cart__subtotal-title">Tax</span>
                                        <span class="col-12 col-sm-6 text-right">$10.00</span>
                                    </div>
                                    <div class="row border-bottom pb-2 pt-2">
                                        <span class="col-12 col-sm-6 cart__subtotal-title">Shipping</span>
                                        <span class="col-12 col-sm-6 text-right">Free shipping</span>
                                    </div>
                                    <div class="row border-bottom pb-2 pt-2">
                                        <span class="col-12 col-sm-6 cart__subtotal-title"><strong>Grand Total</strong></span>
                                        <span class="col-12 col-sm-6 cart__subtotal-title cart__subtotal text-right"><span class="money" id="jtot1"><?php echo "$".($total+10); ?></span></span>
                                    </div>
                                    <div class="cart__shipping">Shipping &amp; taxes calculated at checkout</div>
                                    <p class="cart_tearm">
                                        <label>
                                      <input type="checkbox" name="tearm" class="checkbox" value="tearm" required="">
                                      I agree with the terms and conditions
                                    </label>
                                    </p>
                                    <a href="checkout.php"><input type="submit" name="checkout" id="cartCheckout" class="btn btn--small-wide checkout" value="Proceed To Checkout"></a>
                                    <div class="paymnet-img"><img src="assets/images/payment-img.jpg" alt="Payment"></div>
                                    <p><a href="#">Checkout with Multiple Addresses</a></p>
                                </div>

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
                                    <li><a href="about.php">About us</a></li>

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