<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/fav_icon.png" />
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/plugins.css">
    <!-- Bootstap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/style1.css">
</head>

<body>

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
                            <li><a href="login.php">Login</a></li>
                            <li><a href="Register.php">Create Account</a></li>
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
                        <a href="home.php">
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
                            <li><a href="home.php">Home <i class="anm anm-angle-down-l"></i></a></li>

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
                <li><a href="#">Home</i></a></li>
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
    </div>


    <div id="page-content ">
        <div class="container">
            <div class="row my-lg-5 mt-3">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 text-center">
                    <h1>Enhancement Cream</h1>
                    <p>Buy your best choices</p>

                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mb-lg-5 mt-md-4">
                <!--Sidebar-->
                <div class="col-12 col-sm-12 col-md-3 col-lg-3 sidebar filterbar">
                    <div class="closeFilter d-block d-md-none d-lg-none"><i class="icon icon anm anm-times-l"></i></div>
                    <div class="sidebar_tags">
                        <!--Categories-->
                        <div class="sidebar_widget categories ">
                            <div class="widget-title">
                                <h2>Categories</h2>
                            </div>
                            <div class="widget-content">
                                <ul class="sidebar_categories">
                                    <li class="level1 sub-level"><a href="#;" class="site-nav">Enhancement Cream</a>
                                        <ul class="sublinks">
                                            <li class="level2"><a href="#;" class="site-nav">6 package</a></li>
                                            <li class="level2"><a href="#;" class="site-nav">Cream 1 </a></li>
                                            <li class="level2"><a href="#;" class="site-nav">Cream 2</a></li>
                                            <li class="level2"><a href="#;" class="site-nav">Cream 3</a></li>
                                        </ul>
                                    </li>
                                    <li class="level1 sub-level"><a href="#;" class="site-nav">Color</a>
                                        <ul class="sublinks">
                                            <li class="level2"><a href="#;" class="site-nav">Black</a></li>
                                            <li class="level2"><a href="#;" class="site-nav">Silver</a></li>
                                            <li class="level2"><a href="#;" class="site-nav">Gold</a></li>
                                            <li class="level2"><a href="#;" class="site-nav">Others</a></li>
                                        </ul>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <!--Categories-->
                        <!--Price Filter-->
                        <div class="sidebar_widget filterBox filter-widget">
                            <div class="widget-title">
                                <h2>Price</h2>
                            </div>
                            <form action="#" method="post" class="price-filter">
                                <div id="slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                                    <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                    <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                    <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <p class="no-margin"><input id="amount" type="text"></p>
                                    </div>
                                    <div class="col-6 text-right margin-25px-top">
                                        <button class="btn btn-secondary btn--small">filter</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!--End Price Filter-->
                    </div>
                </div>
                <!--End Sidebar-->
                <!--Main Content-->
                <div class="col-12 col-sm-12 col-md-9 col-lg-9 main-col">
                    <hr>
                    <div class="productList">
                        <!--Toolbar-->
                        <button type="button" class="btn btn-filter d-block d-md-none d-lg-none"> Product Filters</button>

                        <!--End Toolbar-->
                        <div class="grid-products grid--view-items">
                            <div class="row mt-lg-5 mt-3">
                                <div class="col-6 col-sm-6 col-md-4 col-lg-4 item">
                                    <!-- start product image -->
                                    <div class="product-image candles">
                                        <!-- start product image -->
                                        <a href="single product.php">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload" data-src="assets/images/candle/10.jpg" src="assets/images/candle/.jpg" alt="image" title="product" />
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="hover blur-up lazyload" data-src="assets/images/candle/1.jpg" src="assets/images/cosmetic-product/product-image300x300.jpg" alt="image" title="product" />
                                            <!-- End hover image -->

                                        </a>
                                        <!-- end product image -->

                                        <!-- Start product button -->
                                        <form class="variants add" action="#" onclick="window.location.href='cart.php'" method="post">
                                            <button class="btn btn-addto-cart" type="button" tabindex="0">Add To Cart</button>
                                        </form>
                                        <div class="button-set">
                                            <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                <i class="icon anm anm-search-plus-r"></i>
                                            </a>
                                            <div class="wishlist-btn">
                                                <a class="wishlist add-to-wishlist" href="wishlist.php">
                                                    <i class="icon anm anm-heart-l"></i>
                                                </a>
                                            </div>

                                        </div>
                                        <!-- end product button -->
                                    </div>
                                    <!-- end product image -->

                                    <!--start product details -->
                                    <div class="product-details text-center mt-lg-3">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="single product.php">5 OZ BLACK METAL TIN</a>
                                        </div>
                                        <!-- End product name -->
                                        <!-- product price -->
                                        <div class="product-price">
                                            <span class="price">$4.25</span>
                                        </div>
                                        <!-- End product price -->
                                    </div>
                                </div>
                                <div class="col-6 col-sm-6 col-md-4 col-lg-4 item">
                                    <!-- start product image -->
                                    <div class="product-image candles">
                                        <!-- start product image -->
                                        <a href="single product.php">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload" data-src="assets/images/candle/10.jpg" src="assets/images/candle/.jpg" alt="image" title="product" />
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="hover blur-up lazyload" data-src="assets/images/candle/1.jpg" src="assets/images/cosmetic-product/product-image300x300.jpg" alt="image" title="product" />
                                            <!-- End hover image -->

                                        </a>
                                        <!-- end product image -->

                                        <!-- Start product button -->
                                        <form class="variants add" action="#" onclick="window.location.href='cart.php'" method="post">
                                            <button class="btn btn-addto-cart" type="button" tabindex="0">Add To Cart</button>
                                        </form>
                                        <div class="button-set">
                                            <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                <i class="icon anm anm-search-plus-r"></i>
                                            </a>
                                            <div class="wishlist-btn">
                                                <a class="wishlist add-to-wishlist" href="wishlist.php">
                                                    <i class="icon anm anm-heart-l"></i>
                                                </a>
                                            </div>

                                        </div>
                                        <!-- end product button -->
                                    </div>
                                    <!-- end product image -->

                                    <!--start product details -->
                                    <div class="product-details text-center mt-lg-3">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="single product.php">5 OZ BLACK METAL TIN</a>
                                        </div>
                                        <!-- End product name -->
                                        <!-- product price -->
                                        <div class="product-price">
                                            <span class="price">$4.25</span>
                                        </div>
                                        <!-- End product price -->
                                    </div>
                                </div>
                                <div class="col-6 col-sm-6 col-md-4 col-lg-4 item">
                                    <!-- start product image -->
                                    <div class="product-image candles">
                                        <!-- start product image -->
                                        <a href="single product.php">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload" data-src="assets/images/candle/5.jpg" src="assets/images/candle/.jpg" alt="image" title="product" />
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="hover blur-up lazyload" data-src="assets/images/candle/1.jpg" src="assets/images/cosmetic-product/product-image300x300.jpg" alt="image" title="product" />
                                            <!-- End hover image -->

                                        </a>
                                        <!-- end product image -->

                                        <!-- Start product button -->
                                        <form class="variants add" action="#" onclick="window.location.href='cart.php'" method="post">
                                            <button class="btn btn-addto-cart" type="button" tabindex="0">Add To Cart</button>
                                        </form>
                                        <div class="button-set">
                                            <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                <i class="icon anm anm-search-plus-r"></i>
                                            </a>
                                            <div class="wishlist-btn">
                                                <a class="wishlist add-to-wishlist" href="wishlist.php">
                                                    <i class="icon anm anm-heart-l"></i>
                                                </a>
                                            </div>

                                        </div>
                                        <!-- end product button -->
                                    </div>
                                    <!-- end product image -->

                                    <!--start product details -->
                                    <div class="product-details text-center mt-lg-3">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="single product.php">5 OZ BLACK METAL TIN</a>
                                        </div>
                                        <!-- End product name -->
                                        <!-- product price -->
                                        <div class="product-price">
                                            <span class="price">$4.25</span>
                                        </div>
                                        <!-- End product price -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="clear">
                    <div class="pagination">
                        <ul>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li class="next"><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!--End Main Content-->
            </div>
        </div>
    </div>

    <!--Realated product-->
    <div class="container">
        <div class="row my-lg-5">

            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <hr>
                <div class="section-header text-center mt-lg-5">
                    <h1>Related Products</h1>
                    <p>Your choice can match this products</p>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 main-col">

                <div class="productList">
                    <div class="grid-products grid--view-items">
                        <div class="row mt-lg-5      px-lg-5">
                            <div class="col-6 col-sm-6 col-md-4 col-lg-4 item">
                                <!-- start product image -->
                                <div class="product-image c-related">
                                    <!-- start product image -->
                                    <a href="single product.php">
                                        <!-- image -->
                                        <img class="primary blur-up lazyload" data-src="assets/images/candle/3.jpg" src="assets/images/candle/.jpg" alt="image" title="product" />
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload" data-src="assets/images/candle/2.jpg" src="assets/images/cosmetic-product/product-image300x300.jpg" alt="image" title="product" />
                                        <!-- End hover image -->

                                    </a>
                                    <!-- end product image -->

                                    <!-- Start product button -->
                                    <form class="variants add" action="#" onclick="window.location.href='cart.php'" method="post">
                                        <button class="btn btn-addto-cart" type="button" tabindex="0">Add To Cart</button>
                                    </form>
                                    <div class="button-set">
                                        <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                            <i class="icon anm anm-search-plus-r"></i>
                                        </a>
                                        <div class="wishlist-btn">
                                            <a class="wishlist add-to-wishlist" href="wishlist.php">
                                                <i class="icon anm anm-heart-l"></i>
                                            </a>
                                        </div>

                                    </div>
                                    <!-- end product button -->
                                </div>
                                <!-- end product image -->

                                <!--start product details -->
                                <div class="product-details text-center mt-lg-3">
                                    <!-- product name -->
                                    <div class="product-name">
                                        <a href="single product.php">5 OZ BLACK METAL TIN</a>
                                    </div>
                                    <!-- End product name -->
                                    <!-- product price -->
                                    <div class="product-price">
                                        <span class="price">$4.25</span>
                                    </div>
                                    <!-- End product price -->
                                </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-4 item">
                                <!-- start product image -->
                                <div class="product-image c-related">
                                    <!-- start product image -->
                                    <a href="single product.php">
                                        <!-- image -->
                                        <img class="primary blur-up lazyload" data-src="assets/images/candle/5.jpg" src="assets/images/candle/.jpg" alt="image" title="product" />
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload" data-src="assets/images/candle/8.jpg" src="assets/images/cosmetic-product/product-image300x300.jpg" alt="image" title="product" />
                                        <!-- End hover image -->

                                    </a>
                                    <!-- end product image -->

                                    <!-- Start product button -->
                                    <form class="variants add" action="#" onclick="window.location.href='cart.php'" method="post">
                                        <button class="btn btn-addto-cart" type="button" tabindex="0">Add To Cart</button>
                                    </form>
                                    <div class="button-set">
                                        <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                            <i class="icon anm anm-search-plus-r"></i>
                                        </a>
                                        <div class="wishlist-btn">
                                            <a class="wishlist add-to-wishlist" href="wishlist.php">
                                                <i class="icon anm anm-heart-l"></i>
                                            </a>
                                        </div>

                                    </div>
                                    <!-- end product button -->
                                </div>
                                <!-- end product image -->

                                <!--start product details -->
                                <div class="product-details text-center mt-lg-3">
                                    <!-- product name -->
                                    <div class="product-name">
                                        <a href="single product.php">5 OZ BLACK METAL TIN</a>
                                    </div>
                                    <!-- End product name -->
                                    <!-- product price -->
                                    <div class="product-price">
                                        <span class="price">$4.25</span>
                                    </div>
                                    <!-- End product price -->
                                </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-4 item">
                                <!-- start product image -->
                                <div class="product-image c-related">
                                    <!-- start product image -->
                                    <a href="single product.php">
                                        <!-- image -->
                                        <img class="primary blur-up lazyload" data-src="assets/images/candle/5.jpg" src="assets/images/candle/.jpg" alt="image" title="product" />
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload" data-src="assets/images/candle/4.jpg" src="assets/images/cosmetic-product/product-image300x300.jpg" alt="image" title="product" />
                                        <!-- End hover image -->

                                    </a>
                                    <!-- end product image -->

                                    <!-- Start product button -->
                                    <form class="variants add" action="#" onclick="window.location.href='cart.php'" method="post">
                                        <button class="btn btn-addto-cart" type="button" tabindex="0">Add To Cart</button>
                                    </form>
                                    <div class="button-set">
                                        <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                            <i class="icon anm anm-search-plus-r"></i>
                                        </a>
                                        <div class="wishlist-btn">
                                            <a class="wishlist add-to-wishlist" href="wishlist.php">
                                                <i class="icon anm anm-heart-l"></i>
                                            </a>
                                        </div>

                                    </div>
                                    <!-- end product button -->
                                </div>
                                <!-- end product image -->

                                <!--start product details -->
                                <div class="product-details text-center mt-lg-3">
                                    <!-- product name -->
                                    <div class="product-name">
                                        <a href="single product.php">5 OZ BLACK METAL TIN</a>
                                    </div>
                                    <!-- End product name -->
                                    <!-- product price -->
                                    <div class="product-price">
                                        <span class="price">$4.25</span>
                                    </div>
                                    <!-- End product price -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!--End Main Content-->
        </div>
    </div>
    <!--end Realated product-->

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
    <script>
        jQuery(document).ready(function() {
            jQuery('.closepopup').on('click', function() {
                jQuery('#popup-container').fadeOut();
                jQuery('#modalOverly').fadeOut();
            });

            var visits = jQuery.cookie('visits') || 0;
            visits++;
            jQuery.cookie('visits', visits, {
                expires: 1,
                path: '/'
            });
            console.debug(jQuery.cookie('visits'));
            if (jQuery.cookie('visits') > 1) {
                jQuery('#modalOverly').hide();
                jQuery('#popup-container').hide();
            } else {
                var pageHeight = jQuery(document).height();
                jQuery('<div id="modalOverly "></div>').insertBefore('body');
                jQuery('#modalOverly').css("height ", pageHeight);
                jQuery('#popup-container').show();
            }
            if (jQuery.cookie('noShowWelcome')) {
                jQuery('#popup-container').hide();
                jQuery('#active-popup').hide();
            }
        });

        jQuery(document).mouseup(function(e) {
            var container = jQuery('#popup-container');
            if (!container.is(e.target) && container.has(e.target).length === 0) {
                container.fadeOut();
                jQuery('#modalOverly').fadeIn(200);
                jQuery('#modalOverly').hide();
            }
        });
    </script>

</body>

</html>