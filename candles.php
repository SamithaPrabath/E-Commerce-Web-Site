<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                            <li><a href="#">Login</a></li>
                            <li><a href="#">Create Account</a></li>
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
                                    <li class="item">
                                        <a class="product-image minicart-img" href="#">
                                            <img src="assets/images/candle/5.jpg" alt="3/4 Sleeve Kimono Dress" title="" />
                                        </a>
                                        <div class="product-details">
                                            <a href="#" class="remove"><i class="anm anm-times-l" aria-hidden="true"></i></a>
                                            <a class="pName" href="cart.php">Sleeve Kimono Dress</a>
                                            <div class="variant-cart">Black / XL</div>
                                            <div class="wrapQtyBtn">
                                                <div class="qtyField">
                                                    <span class="label">Qty:</span>
                                                    <a class="qtyBtn minus" href="javascript:void(0);"><i class="fa anm anm-minus-r" aria-hidden="true"></i></a>
                                                    <input type="text" id="Quantity" name="quantity" value="1" class="product-form__input qty">
                                                    <a class="qtyBtn plus" href="javascript:void(0);"><i class="fa anm anm-plus-r" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                            <div class="priceRow">
                                                <div class="product-price">
                                                    <span class="money">$59.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="item">
                                        <a class="product-image minicart-img" href="#">
                                            <img src="assets/images/product-images/cape-dress-1.jpg" alt="Elastic Waist Dress - Black / Small" title="" />
                                        </a>
                                        <div class="product-details">
                                            <a href="#" class="remove"><i class="anm anm-times-l" aria-hidden="true"></i></a>
                                            <a class="pName" href="cart.php">Elastic Waist Dress</a>
                                            <div class="variant-cart">Gray / XXL</div>
                                            <div class="wrapQtyBtn">
                                                <div class="qtyField">
                                                    <span class="label">Qty:</span>
                                                    <a class="qtyBtn minus" href="javascript:void(0);"><i class="fa anm anm-minus-r" aria-hidden="true"></i></a>
                                                    <input type="text" id="Quantity" name="quantity" value="1" class="product-form__input qty">
                                                    <a class="qtyBtn plus" href="javascript:void(0);"><i class="fa anm anm-plus-r" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                            <div class="priceRow">
                                                <div class="product-price">
                                                    <span class="money">$99.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="total">
                                    <div class="total-in">
                                        <span class="label">Cart Subtotal:</span><span class="product-price"><span class="money">$748.00</span></span>
                                    </div>
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
                                        <li class="grid__item lvl-1 col-md-3 col-lg-3"><a href="#" class="site-nav lvl-1">CANDLES</a>
                                            <ul class="subLinks">
                                                <li class="lvl-2"><a href="#" class="site-nav lvl-2">Candle 1</a></li>
                                                <li class="lvl-2"><a href="#" class="site-nav lvl-2">Candle 2</a></li>
                                            </ul>
                                        </li>
                                        <li class="grid__item lvl-1 col-md-3 col-lg-3"><a href="#" class="site-nav lvl-1">ENHANCEMENT CREAM</a>
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
                            <li class="lvl1 parent dropdown"><a href="#">CONTACT <i class="anm anm-angle-down-l"></i></a>
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
                <li class="lvl1 parent megamenu"><a href="#">Shops <i class="anm anm-plus-l"></i></a>
                    <ul>
                        <li><a href="candles.php" class="site-nav">CANDLES<i class="anm anm-plus-l"></i></a>
                            <ul>
                                <li><a href="#" class="site-nav">CANDLE 1</a></li>
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
    </div>

    <div id="page-content ">
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
                                    <li class="level1 sub-level"><a href="#;" class="site-nav">Candle</a>
                                        <ul class="sublinks">
                                            <li class="level2"><a href="#;" class="site-nav">6 package</a></li>
                                            <li class="level2"><a href="#;" class="site-nav">CANDLE 1 </a></li>
                                            <li class="level2"><a href="#;" class="site-nav">CANDLE 2</a></li>
                                            <li class="level2"><a href="#;" class="site-nav">CANDLE 1</a></li>
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
                    <h2 class="h2 heading-font">Related Products</h2>
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
                                <li><a href="#">Candles</a></li>
                                <li><a href="#">Enhancement</a></li>
                                <li><a href="#">Others</a></li>

                            </ul>
                        </div>
                        <div class="col-12 col-sm-12 col-md-3 col-lg-4 footer-links">
                            <h4 class="h4">Informations</h4>
                            <ul>
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Careers</a></li>
                                <li><a href="#">Privacy policy</a></li>
                                <li><a href="#">Terms &amp; condition</a></li>
                                <li><a href="#">My Account</a></li>
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

    <!--Quick View popup-->
    <div class="modal fade quick-view-popup" id="content_quickview">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div id="ProductSection-product-template" class="product-template__container prstyle1">
                        <div class="product-single">
                            <!-- Start model close -->
                            <a href="javascript:void()" data-dismiss="modal" class="model-close-btn pull-right" title="close"><span class="icon icon anm anm-times-l"></span></a>
                            <!-- End model close -->
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="product-details-img">
                                        <div class="pl-20">
                                            <img src="assets/images/product-detail-page/camelia-reversible-big1.jpg" alt="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="product-single__meta mt-lg-4">
                                        <h2 class="product-single__title">Product Quick View Popup</h2>
                                        <div class="prInfoRow">
                                            <div class="product-stock"> <span class="instock ">In Stock</span> <span class="outstock hide">Unavailable</span> </div>
                                            <div class="product-sku">SKU: <span class="variant-sku">19115-rdxs</span></div>
                                        </div>
                                        <p class="product-single__price product-single__price-product-template">
                                            <span class="visually-hidden">Regular price</span>
                                            <s id="ComparePrice-product-template"><span class="money">$600.00</span></s>
                                            <span class="product-price__price product-price__price-product-template product-price__sale product-price__sale--single">
                                        <span id="ProductPrice-product-template"><span class="money">$500.00</span></span>
                                            </span>
                                        </p>
                                        <div class="product-single__description rte">
                                            Belle Multipurpose Bootstrap 4 Html Template that will give you and your customers a smooth shopping experience which can be used for various kinds of stores such as fashion,...
                                        </div>

                                        <form method="post" action="/cart/add" id="product_form_10508262282" accept-charset="UTF-8" class="product-form product-form-product-template hidedropdown" enctype="multipart/form-data">

                                            <!-- Product Action -->
                                            <div class="product-action clearfix">
                                                <div class="product-form__item--quantity">
                                                    <div class="wrapQtyBtn">
                                                        <div class="qtyField">
                                                            <a class="qtyBtn minus" href="javascript:void(0);"><i class="fa anm anm-minus-r" aria-hidden="true"></i></a>
                                                            <input type="text" id="qty" name="quantity" value="1" class="product-form__input qty">
                                                            <a class="qtyBtn plus" href="javascript:void(0);"><i class="fa anm anm-plus-r" aria-hidden="true"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-form__item--submit">
                                                    <button type="submit" name="add" class="btn product-form__cart-submit">
                                          <span>Add to cart</span>
                                          </button>
                                                </div>
                                            </div>
                                            <!-- End Product Action -->
                                        </form>
                                        <div class="display-table shareRow">
                                            <div class="display-table-cell">
                                                <div class="wishlist-btn">
                                                    <a class="wishlist add-to-wishlist" href="#" title="Add to Wishlist"><i class="icon anm anm-heart-l" aria-hidden="true"></i> <span>Add to Wishlist</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End-product-single-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Quick View popup-->

    <!-- Including Jquery -->
    <script src="assets/js/vendor/jquery-3.3.1.min.js "></script>
    <script src="assets/js/vendor/modernizr-3.6.0.min.js "></script>
    <script src="assets/js/vendor/jquery.cookie.js "></script>
    <script src="assets/js/vendor/wow.min.js "></script>
    <!-- Including Javascript -->
    <script src="assets/js/bootstrap.min.js "></script>
    <script src="assets/js/plugins.js "></script>
    <script src="assets/js/popper.min.js "></script>
    <script src="assets/js/lazysizes.js "></script>
    <script src="assets/js/main.js "></script>
    <!--For Newsletter Popup-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            autoplay: true,
            autoplayTimeout: 600,
            margin: 60,
            nav: false,
            dots: false,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 2
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 5
                }
            }
        })

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