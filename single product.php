<?php 
    require 'db_connect.php';
    session_start();
    $id;
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $query="select * from product where product_id=$id;";

       $result=mysqli_query($con,$query);
       if(mysqli_num_rows($result)==0){
        header('location: index.php');
       }
    }
    else{
        header('location: index.php');
    }
    if(isset($_SESSION['email'])){
        $email=$_SESSION['email'];
    }
    else{
        $email='';
    }
    $category='';

    if(isset($_POST['review'])){
        $email=$_POST['email'];
        $title=$_POST['title'];
        $description=$_POST['description'];

        $query="insert into user_review values('$email','$title','$description',curdate());";
        if(!mysqli_query($con,$query)){
            echo mysqli_error($con);
        }
    }
 ?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Product Layout Style1 &ndash; Belle Multipurpose Bootstrap 4 Template</title>
    <meta name="description" content="description">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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

<body class="template-product belle">
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

                                        $query="select name,price,image,a.product_id,qty,cqty,categorey from product inner join (select email,image,product_image.product_id,cart.qty as cqty from product_image inner join cart on product_image.product_id=cart.product_id where cart.email='$email' and product_image.main_image='Yes') a on product.product_id=a.product_id;";

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
                        <li><a href="#" class="site-nav">ENHANCEMENT CREAM<i class="anm anm-plus-l"></i></a>
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
            <!--MainContent-->
            <div id="MainContent" class="main-content" role="main">


                <div id="ProductSection-product-template" class="product-template__container prstyle1 container">
                    <!--product-single-->
                    <div class="product-single">
                        <div class="row my-lg-5 my-3">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="product-details-img">
                                    <div class="product-thumb">
                                        
                                        <div id="gallery" class="product-dec-slider-2 product-tab-left">
                                            <?php 

                                           $query="select * from product_image where product_id=$id;";

                                           $result=mysqli_query($con,$query);
                                           while($row=mysqli_fetch_assoc($result)){

                                        ?>
                                            <a data-image="<?php echo $row['image']; ?>" class="slick-slide slick-cloned " data-slick-index="-4" aria-hidden="true" tabindex="-1">
                                                <img class="blur-up lazyload min-img-product" data-src="" src="<?php echo $row['image']; ?>" alt="" />
                                            </a>
                                            <?php } ?>
                                        </div>

                                    </div>
                                    <div class="zoompro-wrap product-zoom-right pl-20">
                                        <div class="zoompro-span">
                                            <?php 

                                       $query="select * from product_image where product_id=$id and main_image='Yes' limit 1;";

                                       $result=mysqli_query($con,$query);
                                       while($row=mysqli_fetch_assoc($result)){

                                        ?>
                                            <img class="blur-up lazyload zoompro big-img-product" data-zoom-image="<?php echo $row['image']; ?>" alt="" src="<?php echo $row['image']; ?>" />
                                        <?php } ?>
                                        </div>

                                        <div class="product-buttons">

                                            <a href="#" class="btn prlightbox" title="Zoom"><i class="icon anm anm-expand-l-arrows" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <!-- <div class="lightboximages">
                                        <a href="assets/images/product-detail-page/camelia-reversible-big1071x1500.jpg" data-size="1462x2048"></a>
                                        <a href="assets/images/product-detail-page/camelia-reversible-big1071x1500.jpg" data-size="1462x2048"></a>
                                        <a href="assets/images/product-detail-page/camelia-reversible-big1071x1500.jpg" data-size="1462x2048"></a>
                                        <a href="assets/images/product-detail-page/camelia-reversible-big1071x1500.jpg" data-size="1462x2048"></a>
                                        <a href="assets/images/product-detail-page/camelia-reversible-big1071x1500.jpg" data-size="1462x2048"></a>
                                        <a href="assets/images/product-detail-page/camelia-reversible-big1071x1500.jpg" data-size="1462x2048"></a>
                                        <a href="assets/images/product-detail-page/camelia-reversible-big1071x1500.jpg" data-size="731x1024"></a>
                                        <a href="assets/images/product-detail-page/camelia-reversible-big1071x1500.jpg" data-size="731x1024"></a>
                                        <a href="assets/images/product-detail-page/camelia-reversible-big1071x1500.jpg" data-size="731x1024"></a>
                                        <a href="assets/images/product-detail-page/camelia-reversible-big1071x1500.jpg" data-size="731x1024"></a>
                                        <a href="assets/images/product-detail-page/camelia-reversible-big1071x1500.jpg" data-size="731x1024"></a>
                                    </div> -->

                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="product-single__meta">
                                    <?php 

                                       $query="select * from product where product_id=$id;";

                                       $result=mysqli_query($con,$query);
                                       while($row=mysqli_fetch_assoc($result)){
                                            $category=$row['categorey'];
                                        ?>
                                    <h1 class="product-single__title"><?php echo $row['name']; ?></h1>

                                    <div class="prInfoRow">
                                        <div class="product-stock"> <?php 
                                            if(($row['qty']-$row['order_qty']-$row['sell_qty'])>0){
                                         ?><span class="instock ">In Stock(<?php echo  $row['qty']-$row['order_qty']-$row['sell_qty'];?>)</span> 
                                         <?php }
                                         else { ?><span class="outstock hide">Unavailable</span><?php } ?> </div>

                                        <div class="product-review"><a class="reviewLink" href="#tab2"><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><span class="spr-badge-caption">6 reviews</span></a></div>
                                    </div>
                                    <p class="product-single__price product-single__price-product-template">
                                        <span class="visually-hidden">Regular price</span>

                                        <span class="product-price__price product-price__price-product-template product-price__sale product-price__sale--single">
                                                <span id="ProductPrice-product-template"><span class="money">$<?php echo $row['price']; ?></span></span>
                                        </span>

                                    </p>
                                    <div class="product-single__description rte">
                                        <p><?php echo $row['description_short']; ?></p>
                                    </div>
                                <?php } ?>
                                </div>
                                

                                <form method="post" action="/cart/add" id="product_form_10508262282" accept-charset="UTF-8" class="product-form product-form-product-template hidedropdown" enctype="multipart/form-data">

                                    <!-- Product Action -->
                                    <div class="product-action clearfix">
                                        <div class="product-form__item--quantity">
                                            <div class="wrapQtyBtn">
                                                <div class="qtyField">
                                                    <a class="qtyBtn minus" href="javascript:void(0);"><i class="fa anm anm-minus-r" aria-hidden="true"></i></a>
                                                    <input type="text" id="Quantity" name="quantity" value="1" class="product-form__input qty">
                                                    <a class="qtyBtn plus" href="javascript:void(0);"><i class="fa anm anm-plus-r" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-form__item--submit">
                                            <a href="wishlist.php?id=<?php echo $id; ?>"> <button type="button" name="add" class="btn product-form__cart-submit">
                                                    <span>Add to cart</span>
                                                </button></a>
                                        </div>
                                        <div class="shopify-payment-button" data-shopify="payment-button">
                                            <a href="wishlist.php?id=<?php echo $id; ?>"><button type="button" class="shopify-payment-button__button shopify-payment-button__button--unbranded">Buy it now</button></a>
                                        </div>
                                    </div>
                                    <!-- End Product Action -->
                                </form>
                                <div class="display-table shareRow">
                                    <div class="display-table-cell medium-up--one-third">
                                        <div class="wishlist-btn">
                                            <a class="wishlist add-to-wishlist" href="#" title="Add to Wishlist"><i class="icon anm anm-heart-l" aria-hidden="true"></i> <span>Add to Wishlist</span></a>
                                        </div>
                                    </div>

                                </div>


                            </div>
                        </div>
                    </div>
                    <!--End-product-single-->

                    <!--Product Tabs-->
                    <div class="tabs-listing">
                        <ul class="product-tabs">
                            <li rel="tab1"><a class="tablink">Product Details</a></li>
                            <li rel="tab2"><a class="tablink">Product Reviews</a></li>

                        </ul>
                        <div class="tab-container">
                            <div id="tab1" class="tab-content">
                                <div class="product-description rte">
                                    <?php 

                                       $query="select * from product where product_id=$id;";

                                       $result=mysqli_query($con,$query);
                                       while($row=mysqli_fetch_assoc($result)){

                                    ?>
                                    <h3><?php echo $row['name']  ?></h3>
                                    <p><?php echo $row['description_short'] ?></p>
                                    
                                    
                                    <p><?php echo $row['description'] ?></p>
                                    <h3>$<?php echo $row['price'] ?></h3>
                                    <p><?php echo $row['categorey'] ?></p>
                                <?php } ?>
                                </div>
                            </div>

                            <div id="tab2" class="tab-content">
                                <div id="shopify-product-reviews">
                                    <div class="spr-container">
                                        <div class="spr-header clearfix">
                                            <div class="spr-summary">
                                                <span class="product-review"><a class="reviewLink"><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i> </a><span class="spr-summary-actions-togglereviews">Based on 6 reviews456</span></span>
                                                <span class="spr-summary-actions">
                                                    <a href="#" class="spr-summary-actions-newreview btn">Write a review</a>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="spr-content">
                                            <div class="spr-form clearfix">



                                                <?php 
                                                    //$email=$_SESSION['email'];
                                                    $query="select fname,email from user where email='$email';";

                                                    $result=mysqli_query($con,$query);
                                                    while($row=mysqli_fetch_assoc($result)){

                                                 ?>
                                                <form method="post" action="" id="new-review-form" class="new-review-form">
                                                    <h3 class="spr-form-title">Write a review</h3>
                                                    <fieldset class="spr-form-contact">
                                                        <div class="spr-form-contact-name">
                                                            <label class="spr-form-label" for="review_author_10508262282">Name</label>
                                                            <input class="spr-form-input spr-form-input-text " id="review_author_10508262282" type="text" name="name" value="<?php echo $row['fname'] ?>">
                                                        </div>
                                                        <div class="spr-form-contact-email">
                                                            <label class="spr-form-label" for="review_email_10508262282">Email</label>
                                                            <input class="spr-form-input spr-form-input-email " id="review_email_10508262282" type="email" name="email" value="<?php echo $row['email'] ?>" hidden>
                                                            <input class="spr-form-input spr-form-input-email " id="review_email_10508262282" type="email" name="" value="<?php echo $row['email'] ?>" disabled>
                                                        </div>
                                                    </fieldset>
                                                    <fieldset class="spr-form-review">
                                                        <div class="spr-form-review-rating">
                                                            <label class="spr-form-label">Rating</label>
                                                            <div class="spr-form-input spr-starrating">
                                                                <div class="product-review"><a class="reviewLink" href="#"><i class="fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i></a></div>
                                                            </div>
                                                        </div>

                                                        <div class="spr-form-review-title">
                                                            <label class="spr-form-label" for="review_title_10508262282">Review Title</label>
                                                            <input class="spr-form-input spr-form-input-text " id="review_title_10508262282" type="text" name="title" value="" placeholder="Give your review a title">
                                                        </div>

                                                        <div class="spr-form-review-body">
                                                            <label class="spr-form-label" for="review_body_10508262282">Body of Review <span class="spr-form-review-body-charactersremaining">(1500)</span></label>
                                                            <div class="spr-form-input">
                                                                <textarea class="spr-form-input spr-form-input-textarea " id="review_body_10508262282" data-product-id="10508262282" name="description" rows="10" placeholder="Write your comments here"></textarea>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                    <fieldset class="spr-form-actions">
                                                        <input type="submit" class="spr-button spr-button-primary button button-primary btn btn-primary" value="Submit Review" name='review'>
                                                    </fieldset>
                                                </form>
                                            <?php } ?>
                                            </div>
                                            <div class="spr-reviews">
                                                <?php 

                                                        $query="select ur.*,u.fname from user_review ur inner join user u on ur.email=u.email";
                                                        $result=mysqli_query($con,$query);
                                                        while($row=mysqli_fetch_assoc($result)){


                                                     ?>
                                                <div class="spr-review">

                                                    <div class="spr-review-header">
                                                        <span class="product-review spr-starratings spr-review-header-starratings"><span class="reviewLink"><i class="fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i></span></span>
                                                        <h3 class="spr-review-header-title"><?php echo $row['title'] ?></h3>
                                                        <span class="spr-review-header-byline"><strong><?php echo $row['fname'] ?></strong> on <strong><?php echo $row['date'] ?></strong></span>
                                                    </div>
                                                    <div class="spr-review-content">
                                                        <p class="spr-review-content-body"><?php echo $row['description'] ?></p>
                                                    </div>
                                                </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>




                        </div>
                    </div>
                    <!--End Product Tabs-->


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
                                            <?php 

                                               $query="select a.name,a.price,a.product_id,product_image.image from product_image inner join (select * from product where categorey='$category') a on product_image.product_id=a.product_id where product_image.main_image='yes' order by product_id desc;";

                                               $result=mysqli_query($con,$query);
                                               while($row=mysqli_fetch_assoc($result)){

                                            ?>
                                            <div class="col-6 col-sm-6 col-md-4 col-lg-4 item">
                                                <!-- start product image -->
                                                <div class="product-image c-related">
                                                    <!-- start product image -->
                                                    <a href="single product.php?id=<?php echo $row['product_id'] ?>">
                                                        <!-- image -->
                                                        <img class="primary blur-up lazyload" data-src="<?php echo $row['image'] ?>" src="<?php echo $row['image'] ?>" alt="image" title="product" />
                                                        <!-- End image -->
                                                        <!-- Hover image -->
                                                        <img class="hover blur-up lazyload" data-src="<?php echo $row['image'] ?>" src="<?php echo $row['image'] ?>" alt="image" title="product" />
                                                        <!-- End hover image -->

                                                    </a>
                                                    <!-- end product image -->

                                                    <!-- Start product button -->
                                                    <form class="variants add" action="#" onclick="window.location.href='wishlist.php?id=<?php echo $row['product_id']; ?>'" method="post">
                                                        <button class="btn btn-addto-cart" type="button" tabindex="0">Add To Cart</button>
                                                    </form>
                                                    <div class="button-set">
                                                        <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                            <i class="icon anm anm-search-plus-r"></i>
                                                        </a>
                                                        <div class="wishlist-btn">
                                                            <a class="wishlist add-to-wishlist" href="wishlist.php?id=<?php echo $row['product_id']; ?>">
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
                                                        <a href="single product.phpid=<?php echo $row['product_id']; ?>"><?php echo $row['name']; ?></a>
                                                    </div>
                                                    <!-- End product name -->
                                                    <!-- product price -->
                                                    <div class="product-price">
                                                        <span class="price">$<?php echo $row['price'] ?></span>
                                                    </div>
                                                    <!-- End product price -->
                                                </div>
                                            </div>
                                        <?php } ?>
                                            
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!--End Main Content-->
                        </div>
                    </div>
                    <!--end Realated product-->
                </div>
                <!--#ProductSection-product-template-->
            </div>
            <!--MainContent-->
        </div>
        <!--End Body Content-->

        <!--Footer-->
        <footer id="footer">
            <div class="newsletter-section">
                <div class="container">
                    <div class="row">
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
                                    <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Facebook"><i class="icon icon-facebook"></i></a></li>
                                    <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Twitter"><i class="icon icon-twitter"></i> <span class="icon__fallback-text">Twitter</span></a></li>
                                    <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Pinterest"><i class="icon icon-pinterest"></i> <span class="icon__fallback-text">Pinterest</span></a></li>
                                    <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Instagram"><i class="icon icon-instagram"></i> <span class="icon__fallback-text">Instagram</span></a></li>
                                    <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Tumblr"><i class="icon icon-tumblr-alt"></i> <span class="icon__fallback-text">Tumblr</span></a></li>
                                    <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on YouTube"><i class="icon icon-youtube"></i> <span class="icon__fallback-text">YouTube</span></a></li>
                                    <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Vimeo"><i class="icon icon-vimeo-alt"></i> <span class="icon__fallback-text">Vimeo</span></a></li>
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
                            <div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links">
                                <h4 class="h4">Quick Shop</h4>
                                <ul>
                                    <li><a href="#">Women</a></li>
                                    <li><a href="#">Men</a></li>
                                    <li><a href="#">Kids</a></li>
                                    <li><a href="#">Sportswear</a></li>
                                    <li><a href="#">Sale</a></li>
                                </ul>
                            </div>
                            <div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links">
                                <h4 class="h4">Informations</h4>
                                <ul>
                                    <li><a href="#">About us</a></li>
                                    <li><a href="#">Careers</a></li>
                                    <li><a href="#">Privacy policy</a></li>
                                    <li><a href="#">Terms &amp; condition</a></li>
                                    <li><a href="#">My Account</a></li>
                                </ul>
                            </div>
                            <div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links">
                                <h4 class="h4">Customer Services</h4>
                                <ul>
                                    <li><a href="#">Request Personal Data</a></li>
                                    <li><a href="#">FAQ's</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                    <li><a href="#">Orders and Returns</a></li>
                                    <li><a href="#">Support Center</a></li>
                                </ul>
                            </div>
                            <div class="col-12 col-sm-12 col-md-3 col-lg-3 contact-box">
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
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 order-1 order-md-0 order-lg-0 order-sm-1 copyright text-sm-center text-md-left text-lg-left"><span>&copy; 2019 BELLE.</span> All Rights Reserved.</div>
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

        <div class="hide">
            <div id="sizechart">
                <h3>WOMEN'S BODY SIZING CHART</h3>
                <table>
                    <tbody>
                        <tr>
                            <th>Size</th>
                            <th>XS</th>
                            <th>S</th>
                            <th>M</th>
                            <th>L</th>
                            <th>XL</th>
                        </tr>
                        <tr>
                            <td>Chest</td>
                            <td>31" - 33"</td>
                            <td>33" - 35"</td>
                            <td>35" - 37"</td>
                            <td>37" - 39"</td>
                            <td>39" - 42"</td>
                        </tr>
                        <tr>
                            <td>Waist</td>
                            <td>24" - 26"</td>
                            <td>26" - 28"</td>
                            <td>28" - 30"</td>
                            <td>30" - 32"</td>
                            <td>32" - 35"</td>
                        </tr>
                        <tr>
                            <td>Hip</td>
                            <td>34" - 36"</td>
                            <td>36" - 38"</td>
                            <td>38" - 40"</td>
                            <td>40" - 42"</td>
                            <td>42" - 44"</td>
                        </tr>
                        <tr>
                            <td>Regular inseam</td>
                            <td>30"</td>
                            <td>30½"</td>
                            <td>31"</td>
                            <td>31½"</td>
                            <td>32"</td>
                        </tr>
                        <tr>
                            <td>Long (Tall) Inseam</td>
                            <td>31½"</td>
                            <td>32"</td>
                            <td>32½"</td>
                            <td>33"</td>
                            <td>33½"</td>
                        </tr>
                    </tbody>
                </table>
                <h3>MEN'S BODY SIZING CHART</h3>
                <table>
                    <tbody>
                        <tr>
                            <th>Size</th>
                            <th>XS</th>
                            <th>S</th>
                            <th>M</th>
                            <th>L</th>
                            <th>XL</th>
                            <th>XXL</th>
                        </tr>
                        <tr>
                            <td>Chest</td>
                            <td>33" - 36"</td>
                            <td>36" - 39"</td>
                            <td>39" - 41"</td>
                            <td>41" - 43"</td>
                            <td>43" - 46"</td>
                            <td>46" - 49"</td>
                        </tr>
                        <tr>
                            <td>Waist</td>
                            <td>27" - 30"</td>
                            <td>30" - 33"</td>
                            <td>33" - 35"</td>
                            <td>36" - 38"</td>
                            <td>38" - 42"</td>
                            <td>42" - 45"</td>
                        </tr>
                        <tr>
                            <td>Hip</td>
                            <td>33" - 36"</td>
                            <td>36" - 39"</td>
                            <td>39" - 41"</td>
                            <td>41" - 43"</td>
                            <td>43" - 46"</td>
                            <td>46" - 49"</td>
                        </tr>
                    </tbody>
                </table>
                <div style="padding-left: 30px;"><img src="assets/images/size.jpg" alt=""></div>
            </div>
        </div>
        <div class="hide">
            <div id="productInquiry">
                <div class="contact-form form-vertical">
                    <div class="page-title">
                        <h3>Camelia Reversible Jacket</h3>
                    </div>
                    <form method="post" action="#" id="contact_form" class="contact-form">
                        <input type="hidden" name="form_type" value="contact" />
                        <input type="hidden" name="utf8" value="✓" />
                        <div class="formFeilds">
                            <input type="hidden" name="contact[product name]" value="Camelia Reversible Jacket">
                            <input type="hidden" name="contact[product link]" value="/products/camelia-reversible-jacket-black-red">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                    <input type="text" id="ContactFormName" name="contact[name]" placeholder="Name" value="" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                    <input type="email" id="ContactFormEmail" name="contact[email]" placeholder="Email" autocapitalize="off" value="" required>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                    <input required type="tel" id="ContactFormPhone" name="contact[phone]" pattern="[0-9\-]*" placeholder="Phone Number" value="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                    <textarea required rows="10" id="ContactFormMessage" name="contact[body]" placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                    <input type="submit" class="btn" value="Send Message">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


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
        <!-- Photoswipe Gallery -->
        <script src="assets/js/vendor/photoswipe.min.js"></script>
        <script src="assets/js/vendor/photoswipe-ui-default.min.js"></script>
        <script>
            $(function() {
                var $pswp = $('.pswp')[0],
                    image = [],
                    getItems = function() {
                        var items = [];
                        $('.lightboximages a').each(function() {
                            var $href = $(this).attr('href'),
                                $size = $(this).data('size').split('x'),
                                item = {
                                    src: $href,
                                    w: $size[0],
                                    h: $size[1]
                                }
                            items.push(item);
                        });
                        return items;
                    }
                var items = getItems();

                $.each(items, function(index, value) {
                    image[index] = new Image();
                    image[index].src = value['src'];
                });
                $('.prlightbox').on('click', function(event) {
                    event.preventDefault();

                    var $index = $(".active-thumb").parent().attr('data-slick-index');
                    $index++;
                    $index = $index - 1;

                    var options = {
                        index: $index,
                        bgOpacity: 0.9,
                        showHideOpacity: true
                    }
                    var lightBox = new PhotoSwipe($pswp, PhotoSwipeUI_Default, items, options);
                    lightBox.init();
                });
            });
        </script>
    </div>

    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">
            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>
            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div><button class="pswp__button pswp__button--close" title="Close (Esc)"></button><button class="pswp__button pswp__button--share" title="Share"></button><button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                    <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div><button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button><button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>