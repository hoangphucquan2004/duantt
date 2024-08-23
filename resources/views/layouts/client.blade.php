<!doctype html>
<html class="no-js')}}" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Kenne</title>
    <meta name="robots" content="noindex, follow"/>
    <meta name="description"
          content="Kenne is a stunning html template for an expansion eCommerce site that suitable for any kind of fashion store. It will make your online store look more impressive and attractive to viewers. ">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon"
          href="{{asset('assets/client/images/image-removebg-preview (9).png')}}">

    <!-- CSS
    ============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/client/css/bootstrap.min.css')}}">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="{{asset('assets/client/css/font-awesome.min.css')}}">
    <!-- Fontawesome Star -->
    <link rel="stylesheet" href="{{asset('assets/client/css/fontawesome-stars.min.css')}}">
    <!-- Ion Icon -->
    <link rel="stylesheet" href="{{asset('assets/client/css/ion-fonts.css')}}">
    <!-- Slick CSS -->
    <link rel="stylesheet" href="{{asset('assets/client/css/slick.css')}}">
    <!-- Animation -->
    <link rel="stylesheet" href="{{asset('assets/client/css/animate.min.css')}}">
    <!-- jQuery Ui -->
    <link rel="stylesheet" href="{{asset('assets/client/css/jquery-ui.min.css')}}">
    <!-- Nice Select -->
    <link rel="stylesheet" href="{{asset('assets/client/css/nice-select.css')}}">
    <!-- Timecircles -->
    <link rel="stylesheet" href="{{asset('assets/client/css/timecircles.css')}}">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{asset('assets/client/css/style.css')}}">

</head>

<body class="template-color-2">
<div class="main-wrapper">
    <header class="main-header_area-2">
        <div class="header-top_area d-none d-lg-block">
            <div class="container">
                <div class="header-top_nav">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="ht-menu">
                                <ul>
                                    <li><a href="javascript:void(0)">Ngôn ngữ <i class="ion-chevron-down"></i></a>
                                        <ul class="ht-dropdown">
                                            <li class="active"><a href="javascript:void(0)"><img
                                                        src="{{asset('assets/client/images/menu/icon/1.jpg')}}"
                                                        alt="Kenne Language Icon">English</a></li>
                                            <li><a href="javascript:void(0)"><img
                                                        src="{{asset('assets/client/images/menu/icon/images (13).jpg')}}"
                                                        alt="Kenne Language Icon"
                                                        style="width: 16px; height: 11px;">Vietnamese</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="header-top_right">
                                <ul>
                                    <!-- <li>
                                        <a href="my-account.html">Tài khoản của tôi</a>
                                    </li> -->
                                    <!-- <?php
                                         if (isset($_SESSION['username'])) {
                                             ?>
                                        <li class="nav-item" id="accountDropdown">
                                            <a class="nav-link" href="#" id="navbarDropdown" role="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Welcome
<?= $_SESSION['username'] ?>
                                        </a>
                                    </li>
                                    <li><a href="./?url=logOut">Logout</a></li>
<?php } else { ?>
                                        <li class="nav-item"><a class="nav-link" href=".?url=login">Login</a></li>
<?php }
                                        ?> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-middle_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header-middle_nav">
                            <div class="header-logo_area">
                                <a href="./">
                                    <img src="{{asset('assets/client/images/menu/logo/1.png')}}" alt="Header Logo"
                                         width="150px">
                                </a>
                            </div>

                            <div class="header-search_area d-none d-lg-block">
                                <form class="search-form" action="#">
                                    <input type="text" style="width: 600px;" placeholder="Tìm kiếm">
                                    <!-- Điều chỉnh chiều dài tại đây -->
                                    <button class="search-button"><i class="ion-ios-search"></i></button>
                                </form>
                            </div>


                            <div class="header-contact d-none d-md-flex">
                                <i class="fa fa-headphones-alt"></i>
                                <div class="contact-content">
                                    <p>
                                        Liên hệ
                                        <br>
                                        0987654321
                                    </p>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom_area d-none d-lg-block">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="main-menu_area position-relative">
                                <nav class="main-nav d-flex justify-content-center">
                                    <ul>
                                        <li class="dropdown-holder"><a href="./">Trang chủ</a>
                                        </li>
                                        <li><a href="index.php?url=productpage">Sản phẩm<i
                                                    class="ion-chevron-down"></i></a>
                                            <ul class="kenne-dropdown">
                                                <li><a href="index.php?url=all-aocuoi">Tất cả</a></li>
                                                <li><a href="index.php?url=aocuoilamle">Váy cưới đi làm lễ</a></li>
                                                <li><a href="index.php?url=aocuoidiban">Váy cưới đi bàn</a></li>
                                                <li><a href="index.php?url=aodaicuoi">Áo dài cưới</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="index.php?url=page">Bộ sưu tập<i
                                                    class="ion-chevron-down"></i></a>
                                            <ul class="kenne-dropdown">
                                                <li><a href="coming-soon_page.html">Bộ sưu tập hot 2023</a></li>
                                                <li><a href="index.php?url=page">Bộ sưu tập độc quyền</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="javascript:void(0)">Dịch vụ khác<i
                                                    class="ion-chevron-down"></i></a>
                                            <ul class="kenne-dropdown">
                                                <li><a href="blog-grid_view.html">Chụp ảnh cưới</a></li>
                                                <li><a href="blog-list_view.html">Hoa cưới</a></li>
                                                <li><a href="blog-details.html">Xe hoa</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="index.php?url=aboutus">Về FStudio</a></li>
                                        <li><a href="index.php?url=contactus">Liên hệ</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="header-sticky">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sticky-header_nav position-relative">
                                <div class="row align-items-center justify-content-between">
                                    <div class="col-lg-2 col-sm-6">
                                        <div class="header-logo_area">
                                            <a href="./">
                                                <img src="{{asset('assets/client/images/menu/logo/1.png')}}"
                                                     alt="Header Logo">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-7 d-none d-lg-block position-static" style="width:auto">
                                        <div class="main-menu_area">
                                            <nav class="main-nav d-flex justify-content-center">
                                                <ul>
                                                    <li class="dropdown-holder"><a href="index.php?url=/">Trang
                                                            chủ</a>
                                                    </li>
                                                    <li><a href="index.php?url=productpage">Sản phẩm<i
                                                                class="ion-chevron-down"></i></a>
                                                        <ul class="kenne-dropdown">
                                                            <li><a href="index.php?url=all-aocuoi">Tất cả</a></li>
                                                            <li><a href="index.php?url=aocuoilamle">Váy cưới đi làm
                                                                    lễ</a></li>
                                                            <li><a href="index.php?url=aocuoidiban">Váy cưới đi
                                                                    bàn</a></li>
                                                            <li><a href="index.php?url=aodaicuoi">Áo dài cưới</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="index.php?url=page">Bộ sự tập <i
                                                                class="ion-chevron-down"></i></a>
                                                        <ul class="kenne-dropdown">
                                                            <li><a href="coming-soon_page.html">Bộ sưu tập hot
                                                                    2023</a></li>
                                                            <li><a href="index.php?url=page">Bộ sưu tập độc
                                                                    quyền</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="javascript:void(0)">Dịch vụ khác <i
                                                                class="ion-chevron-down"></i></a>
                                                        <ul class="kenne-dropdown">
                                                            <li><a href="blog-grid_view.html">Chụp ảnh cưới</a></li>
                                                            <li><a href="blog-list_view.html">Hoa cưới</a></li>
                                                            <li><a href="blog-details.html">Xe hoa</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="index.php?url=aboutus">Về FStudio</a></li>
                                                    <li><a href="index.php?url=contactus">Liên hệ</a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6" style="width:auto">
                                        <div class="header-right_area header-right_area-2">
                                            <ul>
                                                <li class="mobile-menu_wrap d-inline-block d-lg-none">
                                                    <a href="#mobileMenu"
                                                       class="mobile-menu_btn toolbar-btn color--white">
                                                        <i class="ion-android-menu"></i>
                                                    </a>
                                                </li>


                                                <li>
                                                    <a href="#searchBar" class="search-btn toolbar-btn">
                                                        <i class="ion-android-search"></i>
                                                    </a>
                                                </li>
                                                <li class="d-none d-lg-inline-block">
                                                    <a href="#offcanvasMenu"
                                                       class="menu-btn toolbar-btn color--white">
                                                        <i class="ion-android-menu"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="offcanvas-minicart_wrapper" id="miniCart">
                <div class="offcanvas-menu-inner">
                    <a href="#" class="btn-close"><i class="ion-android-close"></i></a>
                    <div class="minicart-content">
                        <div class="minicart-heading">
                            <h4>Shopping Cart</h4>
                        </div>
                        <ul class="minicart-list">
                            <li class="minicart-product">
                                <a class="product-item_remove" href="javascript:void(0)"><i
                                        class="ion-android-close"></i></a>
                                <div class="product-item_img">
                                    <img src="{{asset('assets/client/images/product/1-1.jpg')}}"
                                         alt="Kenne's Product Image">
                                </div>
                                <div class="product-item_content">
                                    <a class="product-item_title" href="shop-left-sidebar.html">Autem ipsa ad</a>
                                    <span class="product-item_quantity">1 x $145.80</span>
                                </div>
                            </li>
                            <li class="minicart-product">
                                <a class="product-item_remove" href="javascript:void(0)"><i
                                        class="ion-android-close"></i></a>
                                <div class="product-item_img">
                                    <img src="{{asset('assets/client/images/product/2-1.jpg')}}"
                                         alt="Kenne's Product Image">
                                </div>
                                <div class="product-item_content">
                                    <a class="product-item_title" href="shop-left-sidebar.html">Tenetur illum
                                        amet</a>
                                    <span class="product-item_quantity">1 x $150.80</span>
                                </div>
                            </li>
                            <li class="minicart-product">
                                <a class="product-item_remove" href="javascript:void(0)"><i
                                        class="ion-android-close"></i></a>
                                <div class="product-item_img">
                                    <img src="{{asset('assets/client/images/product/3-1.jpg')}}"
                                         alt="Kenne's Product Image">
                                </div>
                                <div class="product-item_content">
                                    <a class="product-item_title" href="shop-left-sidebar.html">Non doloremque
                                        placeat</a>
                                    <span class="product-item_quantity">1 x $165.80</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="minicart-item_total">
                        <span>Subtotal</span>
                        <span class="ammount">$462.4‬0</span>
                    </div>
                    <div class="minicart-btn_area">
                        <a href="index.php?url=cart" class="kenne-btn kenne-btn_fullwidth">Minicart</a>
                    </div>
                    <div class="minicart-btn_area">
                        <a href="index.php?url=checkout" class="kenne-btn kenne-btn_fullwidth">Checkout</a>
                    </div>
                </div>
            </div>
            <div class="mobile-menu_wrapper" id="mobileMenu">
                <div class="offcanvas-menu-inner">
                    <div class="container">
                        <a href="#" class="btn-close white-close_btn"><i class="ion-android-close"></i></a>
                        <div class="offcanvas-inner_logo">
                            <a href="./">
                                <img src="{{asset('assets/client/images/menu/logo/1.png')}}" alt="Header Logo">
                            </a>
                        </div>
                        <nav class="offcanvas-navigation">
                            <ul class="mobile-menu">
                                <li class="menu-item-has-children active"><a href="#"><span
                                            class="mm-text">Home</span></a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="index.html">
                                                <span class="mm-text">Home One</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="index-2.html">
                                                <span class="mm-text">Home Two</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="index-3.html">
                                                <span class="mm-text">Home Three</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">
                                        <span class="mm-text">Shop</span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="menu-item-has-children">
                                            <a href="#">
                                                <span class="mm-text">Grid View</span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="shop-fullwidth.html">
                                                        <span class="mm-text">Grid Fullwidth</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="shop-left-sidebar.html">
                                                        <span class="mm-text">Left Sidebar</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="shop-right-sidebar.html">
                                                        <span class="mm-text">Right Sidebar</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">
                                                <span class="mm-text">Shop List</span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="shop-list-fullwidth.html">
                                                        <span class="mm-text">Full Width</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="shop-list-left-sidebar.html">
                                                        <span class="mm-text">Left Sidebar</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="shop-list-right-sidebar.html">
                                                        <span class="mm-text">Right Sidebar</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">
                                                <span class="mm-text">Single Product Style</span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="single-product-gallery-left.html">
                                                        <span class="mm-text">Gallery Left</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="single-product-gallery-right.html">
                                                        <span class="mm-text">Gallery Right</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="single-product-tab-style-left.html">
                                                        <span class="mm-text">Tab Style Left</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="single-product-tab-style-right.html">
                                                        <span class="mm-text">Tab Style Right</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="single-product-sticky-left.html">
                                                        <span class="mm-text">Sticky Left</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="single-product-sticky-right.html">
                                                        <span class="mm-text">Sticky Right</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">
                                                <span class="mm-text">Single Product Type</span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="single-product.html">
                                                        <span class="mm-text">Single Product</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="single-product-sale.html">
                                                        <span class="mm-text">Single Product Sale</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="single-product-group.html">
                                                        <span class="mm-text">Single Product Group</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="single-product-variable.html">
                                                        <span class="mm-text">Single Product Variable</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="single-product-affiliate.html">
                                                        <span class="mm-text">Single Product Affiliate</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="single-product-slider.html">
                                                        <span class="mm-text">Single Product Slider</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">
                                        <span class="mm-text">Blog</span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="menu-item-has-children has-children">
                                            <a href="blog-grid_view.html">
                                                <span class="mm-text">Grid View</span>
                                            </a>
                                        </li>
                                        <li class="menu-item-has-children has-children">
                                            <a href="blog-list_view.html">
                                                <span class="mm-text">List View</span>
                                            </a>
                                        </li>
                                        <li class="menu-item-has-children has-children">
                                            <a href="blog-details.html">
                                                <span class="mm-text">Blog Details</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">
                                        <span class="mm-text">Pages</span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="my-account.html">
                                                <span class="mm-text">About Us</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="my-account.html">
                                                <span class="mm-text">Contact</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="my-account.html">
                                                <span class="mm-text">My Account</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="login-register.html">
                                                <span class="mm-text">Login | Register</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="wishlist.html">
                                                <span class="mm-text">Wishlist</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="cart.html">
                                                <span class="mm-text">Cart</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="checkout.html">
                                                <span class="mm-text">Checkout</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="compare.html">
                                                <span class="mm-text">Compare</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="faq.html">
                                                <span class="mm-text">FAQ</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="404.html">
                                                <span class="mm-text">Error 404</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                        <nav class="offcanvas-navigation user-setting_area">
                            <ul class="mobile-menu">
                                <li class="menu-item-has-children active">
                                    <a href="#">
                                            <span class="mm-text">User
                                                Setting
                                            </span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="my-account.html">
                                                <span class="mm-text">My Account</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="login-register.html">
                                                <span class="mm-text">Login | Register</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="#"><span
                                            class="mm-text">Currency</span></a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="javascript:void(0)">
                                                <span class="mm-text">EUR €</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <span class="mm-text">USD $</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="#"><span
                                            class="mm-text">Language</span></a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="javascript:void(0)">
                                                <span class="mm-text">English</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <span class="mm-text">Français</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <span class="mm-text">Romanian</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <span class="mm-text">Japanese</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>


            <!-- header -->

            <!-- <div class="slider-area slider-area-2">

<div class="kenne-element-carousel home-slider home-slider-2 transparent-arrow" data-slick-options='{
            "slidesToShow": 1,
            "slidesToScroll": 1,
            "infinite": true,
            "arrows": true,
            "dots": false,
            "autoplay" : true,
            "fade" : true,
            "autoplaySpeed" : 7000,
            "pauseOnHover" : false,
            "pauseOnFocus" : false
            }' data-slick-responsive='[
            {"breakpoint":768, "settings": {
            "slidesToShow": 1
            }},
            {"breakpoint":575, "settings": {
            "slidesToShow": 1
            }}
        ]'>
    <div class="slide-item bg-3 animation-style-01 white-color">
        <div class="slider-progress"></div>
        <div class="container">
            <div class="slide-content">

            </div>
        </div>
    </div>
    <div class="slide-item bg-4 animation-style-01">
        <div class="slider-progress"></div>
        <div class="container">
            <div class="slide-content">
                <span>Giảm ngay 15% nhân dịp năm mới</span>
                <h2>Ngôn ngữ hoa <br> & những chiếc váy</h2>
                <p class="short-desc-2">Hot trend 2024</p>
                <div class="slide-btn">
                    <a class="kenne-btn" href="shop-left-sidebar.html">Liên hệ ngay</a>
                </div>
            </div>
        </div>
    </div>
</div>

</div> -->

            <!-- Begin Banner Area Three -->
            <div class="banner-area-3" style="background-color:#FDF8F6;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-6 custom-xxs-col" style="padding-bottom:80px;">
                            <div class="banner-item img-hover_effect">
                                <div class="banner-img">
                                    <a href="javascrip:void(0)">
                                        <img class="img-full"
                                             src="{{asset('assets/client/images/banner/vay-cuoi-lam-le-Diamond-LDM01-1-768x960.jpg')}}"
                                             alt="Banner">
                                        <h1>Váy cưới làm lễ</h1>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-6 custom-xxs-col">
                            <div class="banner-item img-hover_effect">
                                <div class="banner-img" position: relative;>
                                    <a href="javascrip:void(0)">
                                        <img class="img-full"
                                             src="{{asset('assets/client/images/banner/ao-dai-kim-ADK01-3-550x688.jpg')}}"
                                             alt="Banner">
                                        <h1>Áo dài cưới</h1>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-6 custom-xxs-col">
                            <div class="banner-item img-hover_effect">
                                <div class="banner-img">
                                    <a href="javascrip:void(0)">
                                        <img class="img-full"
                                             src="{{asset('assets/client/images/banner/vay-cuoi-di-tiec-Diamond-NDM13-1-768x960.jpg')}}"
                                             alt="Banner">
                                        <h1>Váy cưới đi bàn</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Banner Area Three End Here -->

            <!-- Váy cưới làm lễ -->
            <div class="about-us-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-5">
                            <div class="overview-img text-center img-hover_effect">
                                <a href="#">
                                    <img class="img-full" src="{{asset('assets/client/images/about-us/hh.webp')}}"
                                         alt="Kenne's About Us Image">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-7 d-flex align-items-center">
                            <div class="overview-content">
                                <h2>Váy cưới làm lễ</h2>
                                <p class="short_desc">Váy cưới làm lễ chính là trang phục quan trọng nhất của cô dâu
                                    trong ngày trọng đại. Đây là chiếc váy cưới mà cô dâu sẽ mặc khi sánh bước lên
                                    lễ đường cùng vị hôn phu. Trong khoảnh khắc này, mỗi cô dâu luôn mong muốn mình
                                    là nàng công chúa xinh đẹp và lộng lẫy nhất thế gian.
                                    Váy cưới làm lễ tại Kenne là những mẫu váy hoàn mỹ nhất, biến cô dâu thành nàng
                                    công chúa sánh bước cùng chàng hoàng tử trên lễ đường. Với sự đa dạng trong
                                    thiết kế, Kenne luôn hi vọng có thể nhận được lòng tin từ các nàng dâu. Đặc biệt
                                    khi cô dâu đặt váy thiết kế riêng, Kenne sẽ tạo ra tác phẩm váy vừa vặn đến từng
                                    cm như thể chiếc váy sinh ra là dành cho nàng. Hiện tại Kenne có 4 dòng váy cưới
                                    làm lễ: Haute Couture, Limited, Luxury và Grace</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="kenne-element-carousel product-slider slider-nav" data-slick-options='{
                        "slidesToShow": 4,
                        "slidesToScroll": 1,
                        "infinite": false,
                        "": true,
                        "dots": false,
                        "spaceBetween": 30,
                        "appendArrows": ""
                        }' data-slick-responsive='[
                        {"breakpoint":992, "settings": {
                        "slidesToShow": 3
                        }},
                        {"breakpoint":768, "settings": {
                        "slidesToShow": 2
                        }},
                        {"breakpoint":575, "settings": {
                        "slidesToShow": 1
                        }}
                    ]'>

                                <!--  <div class="product-item">
                                   <div class="single-product">
                                       <div class="product-img">
                                           <a href="index.php?url=productdetail&id=">
                                   <img style="width: 250px;height: 300px;" class="primary-img" src="" alt="Kenne's Product Image">
                                   <img style="width: 250px;height: 300px;" class="secondary-img" src="" alt="Kenne's Product Image">
                               </a>
                               <span class="sticker-2">Hot</span>
                               <div class="add-actions">
                                   <ul>
                                       <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="right" title="Quick View"><i class="ion-ios-search"></i></a>
                                       </li>
                                       <li><a href="wishlist.html" data-bs-toggle="tooltip" data-placement="right" title="Add To Wishlist"><i class="ion-ios-heart-outline"></i></a>
                                       </li>
                                       <li><a href="compare.html" data-bs-toggle="tooltip" data-placement="right" title="Add To Compare"><i class="ion-ios-reload"></i></a>
                                       </li>
                                       <li><a href="cart.html" data-bs-toggle="tooltip" data-placement="right" title="Add To cart"><i class="ion-bag"></i></a>
                                       </li>
                                   </ul>
                               </div>
                           </div>
                           <div class="product-content">
                               <div class="product-desc_info">
                                   <h3 class="product-name"><a href="index.php?url=productdetail"></a></h3>
                                   <div class="price-box">
                                       <span class="new-price"> đ</span>
                                       <span class="old-price">$50.99</span>
                                   </div>
                                   <div class="rating-box">
                                       <ul>
                                           <li><i class="ion-ios-star"></i></li>
                                           <li><i class="ion-ios-star"></i></li>
                                           <li><i class="ion-ios-star"></i></li>
                                           <li class="silver-color"><i class="ion-ios-star-half"></i></li>
                                           <li class="silver-color"><i class="ion-ios-star-outline"></i></li>
                                       </ul>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Áo dài cưới -->
            <div class="product-area ">
                <div class="about-us-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-7 d-flex align-items-center">
                                <div class="overview-content">
                                    <h2>Áo dài cưới</h2>
                                    <p class="short_desc">Áo dài cưới là tinh thần giao thoa giữa vẻ đẹp cổ điển và
                                        sự cách tân tinh tế. Áo dài là trang phục truyền thống đến ngày nay vẫn giữ
                                        được nét văn hóa vốn có kết hợp cùng những nét chấm phá khác biệt. Thiết kế
                                        áo dài cưới của Linh Nga Bridal vừa có được sự thướt tha, yêu kiều, duyên
                                        dáng của một tà áo dài Việt, vừa mang hơi thở thời trang hiện đại.
                                        Với tinh thần lưu giữ bản sắc nước nhà, truyền tải giá trị văn hoá được lưu
                                        truyền trên từng đường kim thớ vải, Kenne đã sở hữu cho mình bộ sưu tập áo
                                        dài cưới cao cấp với thiết kế độc bản, sự kết hợp hoàn mỹ giữa văn hóa Việt
                                        Nam và xu hướng thời trang hiện đại. Diện áo dài cưới của Kenne, nàng chắc
                                        chắn sẽ trở thành cô dâu vừa nền nã và thanh tú, lại vừa ngập tràn sự trẻ
                                        trung, hiện đại. Hiện tại Kenne có 2 dòng áo dài cưới: Limited và Luxury</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-5">
                                <div class="overview-img text-center img-hover_effect">
                                    <a href="#">
                                        <img class="img-full" src="{{asset('assets/client/images/about-us/aodai.png')}}"
                                             alt="Kenne's About Us Image" style="width:400px; margin-left:180px;">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="kenne-element-carousel product-slider slider-nav" data-slick-options='{
                        "slidesToShow": 4,
                        "slidesToScroll": 1,
                        "infinite": false,
                        "": true,
                        "dots": false,
                        "spaceBetween": 30,
                        "appendArrows": ""
                        }' data-slick-responsive='[
                        {"breakpoint":992, "settings": {
                        "slidesToShow": 3
                        }},
                        {"breakpoint":768, "settings": {
                        "slidesToShow": 2
                        }},
                        {"breakpoint":575, "settings": {
                        "slidesToShow": 1
                        }}
                    ]'>
                                <!--
                                    <div class="product-item">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="index.php?url=productdetail&id=">
                                        <img style="width: 250px;height: 300px;" class="primary-img" src="" alt="Kenne's Product Image">
                                        <img style="width: 250px;height: 300px;" class="secondary-img" src="" alt="Kenne's Product Image">
                                    </a>
                                    <span class="sticker-2">Hot</span>
                                    <div class="add-actions">
                                        <ul>
                                            <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="right" title="Quick View"><i class="ion-ios-search"></i></a>
                                            </li>
                                            <li><a href="wishlist.html" data-bs-toggle="tooltip" data-placement="right" title="Add To Wishlist"><i class="ion-ios-heart-outline"></i></a>
                                            </li>
                                            <li><a href="compare.html" data-bs-toggle="tooltip" data-placement="right" title="Add To Compare"><i class="ion-ios-reload"></i></a>
                                            </li>
                                            <li><a href="cart.html" data-bs-toggle="tooltip" data-placement="right" title="Add To cart"><i class="ion-bag"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-desc_info">
                                        <h3 class="product-name"><a href="" </a></h3>
                                        <div class="price-box">
                                            <span class="new-price"> đ</span>
                                            <span class="old-price">$50.99</span>
                                        </div>
                                        <div class="rating-box">
                                            <ul>
                                                <li><i class="ion-ios-star"></i></li>
                                                <li><i class="ion-ios-star"></i></li>
                                                <li><i class="ion-ios-star"></i></li>
                                                <li class="silver-color"><i class="ion-ios-star-half"></i></li>
                                                <li class="silver-color"><i class="ion-ios-star-outline"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                  -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Váy đi bàn -->
            <div class="about-us-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-5">
                            <div class="overview-img text-center img-hover_effect">
                                <a href="#">
                                    <img class="img-full" src="{{asset('assets/client/images/about-us/hh.webp')}}"
                                         alt="Kenne's About Us Image">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-7 d-flex align-items-center">
                            <div class="overview-content">
                                <h2>Váy cưới đi bàn</h2>
                                <p class="short_desc">Váy cưới làm lễ chính là trang phục quan trọng nhất của cô dâu
                                    trong ngày trọng đại. Đây là chiếc váy cưới mà cô dâu sẽ mặc khi sánh bước lên
                                    lễ đường cùng vị hôn phu. Trong khoảnh khắc này, mỗi cô dâu luôn mong muốn mình
                                    là nàng công chúa xinh đẹp và lộng lẫy nhất thế gian.
                                    Váy cưới làm lễ tại Kenne là những mẫu váy hoàn mỹ nhất, biến cô dâu thành nàng
                                    công chúa sánh bước cùng chàng hoàng tử trên lễ đường. Với sự đa dạng trong
                                    thiết kế, Kenne luôn hi vọng có thể nhận được lòng tin từ các nàng dâu. Đặc biệt
                                    khi cô dâu đặt váy thiết kế riêng, Kenne sẽ tạo ra tác phẩm váy vừa vặn đến từng
                                    cm như thể chiếc váy sinh ra là dành cho nàng. Hiện tại Kenne có 4 dòng váy cưới
                                    làm lễ: Haute Couture, Limited, Luxury và Grace</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="kenne-element-carousel product-slider slider-nav" data-slick-options='{
                        "slidesToShow": 4,
                        "slidesToScroll": 1,
                        "infinite": false,
                        "": true,
                        "dots": false,
                        "spaceBetween": 30,
                        "appendArrows": ""
                        }' data-slick-responsive='[
                        {"breakpoint":992, "settings": {
                        "slidesToShow": 3
                        }},
                        {"breakpoint":768, "settings": {
                        "slidesToShow": 2
                        }},
                        {"breakpoint":575, "settings": {
                        "slidesToShow": 1
                        }}
                    ]'>
                                <!--
                                    <div class="product-item">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="index.php?url=productdetail&id=">
                                        <img style="width: 250px;height: 300px;" class="primary-img" src="" alt="Kenne's Product Image">
                                        <img style="width: 250px;height: 300px;" class="secondary-img" src="" alt="Kenne's Product Image">
                                    </a>
                                    <span class="sticker-2">Hot</span>
                                    <div class="add-actions">
                                        <ul>
                                            <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="right" title="Quick View"><i class="ion-ios-search"></i></a>
                                            </li>
                                            <li><a href="wishlist.html" data-bs-toggle="tooltip" data-placement="right" title="Add To Wishlist"><i class="ion-ios-heart-outline"></i></a>
                                            </li>
                                            <li><a href="compare.html" data-bs-toggle="tooltip" data-placement="right" title="Add To Compare"><i class="ion-ios-reload"></i></a>
                                            </li>
                                            <li><a href="cart.html" data-bs-toggle="tooltip" data-placement="right" title="Add To cart"><i class="ion-bag"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-desc_info">
                                        <h3 class="product-name"><a href="index.php?url=productdetail"></a></h3>
                                        <div class="price-box">
                                            <span class="new-price"> </span>
                                            <span class="old-price">$50.99</span>
                                        </div>
                                        <div class="rating-box">
                                            <ul>
                                                <li><i class="ion-ios-star"></i></li>
                                                <li><i class="ion-ios-star"></i></li>
                                                <li><i class="ion-ios-star"></i></li>
                                                <li class="silver-color"><i class="ion-ios-star-half"></i></li>
                                                <li class="silver-color"><i class="ion-ios-star-outline"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                  -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sản phẩm -->
            <div class="product-tab_area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title">
                                <h3>Sản phẩm của chúng tôi</h3>
                                <div class="product-tab">
                                    <ul class="nav product-menu">
                                        <li><a class="active" data-bs-toggle="tab" href="#bag"><span>Váy
                                                        cưới</span></a></li>
                                        <li><a data-bs-toggle="tab" href="#plaid-shirts"><span>Áo dài</span></a>
                                        </li>
                                        <li><a data-bs-toggle="tab" href="#shoes"><span>Phụ kiện</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="tab-content kenne-tab_content">
                                <div id="bag" class="tab-pane active show" role="tabpanel">
                                    <div class="kenne-element-carousel product-tab_slider slider-nav product-tab_arrow"
                                         data-slick-options='{
                                    "slidesToShow": 4,
                                    "slidesToScroll": 1,
                                    "infinite": false,
                                    "arrows": true,
                                    "dots": false,
                                    "spaceBetween": 30
                                    }' data-slick-responsive='[
                                    {"breakpoint":992, "settings": {
                                    "slidesToShow": 3
                                    }},
                                    {"breakpoint":768, "settings": {
                                    "slidesToShow": 2
                                    }},
                                    {"breakpoint":575, "settings": {
                                    "slidesToShow": 1
                                    }}
                                ]'>

                                        <!--
                                            <div class="product-item">
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <a href="">
                                                <img style="width: 250px;height: 300px;" class="primary-img" src="" alt="Kenne's Product Image">
                                                <img style="width: 250px;height: 300px;" class="secondary-img" src="" alt="Kenne's Product Image">
                                            </a>
                                            <span class="sticker-2">Hot</span>
                                            <div class="add-actions">
                                                <ul>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="right" title="Quick View"><i class="ion-ios-search"></i></a>
                                                    </li>
                                                    <li><a href="wishlist.html" data-bs-toggle="tooltip" data-placement="right" title="Add To Wishlist"><i class="ion-ios-heart-outline"></i></a>
                                                    </li>
                                                    <li><a href="compare.html" data-bs-toggle="tooltip" data-placement="right" title="Add To Compare"><i class="ion-ios-reload"></i></a>
                                                    </li>
                                                    <li><a href="cart.html" data-bs-toggle="tooltip" data-placement="right" title="Add To cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <div class="product-desc_info">
                                                <h3 class="product-name"><a href="index.php?url=productdetail"></a></h3>
                                                <div class="price-box">
                                                    <span class="new-price">đ</span>
                                                    <span class="old-price">$100.00</span>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="ion-ios-star"></i></li>
                                                        <li><i class="ion-ios-star"></i></li>
                                                        <li><i class="ion-ios-star"></i></li>
                                                        <li><i class="ion-ios-star"></i></li>
                                                        <li class="silver-color"><i class="ion-ios-star-half"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                           -->
                                    </div>
                                </div>
                                <div id="plaid-shirts" class="tab-pane" role="tabpanel">
                                    <div class="kenne-element-carousel product-tab_slider slider-nav product-tab_arrow"
                                         data-slick-options='{
                                    "slidesToShow": 4,
                                    "slidesToScroll": 1,
                                    "infinite": false,
                                    "arrows": true,
                                    "dots": false,
                                    "spaceBetween": 30
                                    }' data-slick-responsive='[
                                    {"breakpoint":768, "settings": {
                                    "slidesToShow": 1
                                    }},
                                    {"breakpoint":575, "settings": {
                                    "slidesToShow": 1
                                    }}
                                ]'>

                                        <div class="product-item">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="index.php?url=productdetail">
                                                        <img class="primary-img"
                                                             src="{{asset('assets/client/images/product/7-1.jpg')}}"
                                                             alt="Kenne's Product Image">
                                                        <img class="secondary-img"
                                                             src="{{asset('assets/client/images/product/7-2.jpg')}}"
                                                             alt="Kenne's Product Image">
                                                    </a>
                                                    <span class="sticker-2">Hot</span>
                                                    <div class="add-actions">
                                                        <ul>
                                                            <li class="quick-view-btn" data-bs-toggle="modal"
                                                                data-bs-target="#exampleModalCenter"><a
                                                                    href="javascript:void(0)"
                                                                    data-bs-toggle="tooltip" data-placement="right"
                                                                    title="Quick View"><i
                                                                        class="ion-ios-search"></i></a>
                                                            </li>
                                                            <li><a href="wishlist.html" data-bs-toggle="tooltip"
                                                                   data-placement="right"
                                                                   title="Add To Wishlist"><i
                                                                        class="ion-ios-heart-outline"></i></a>
                                                            </li>
                                                            <li><a href="compare.html" data-bs-toggle="tooltip"
                                                                   data-placement="right" title="Add To Compare"><i
                                                                        class="ion-ios-reload"></i></a>
                                                            </li>
                                                            <li><a href="cart.html" data-bs-toggle="tooltip"
                                                                   data-placement="right" title="Add To cart"><i
                                                                        class="ion-bag"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-desc_info">
                                                        <h3 class="product-name"><a
                                                                href="index.php?url=productdetail">Excepturi
                                                                perspiciatis</a></h3>
                                                        <div class="price-box">
                                                            <span class="new-price">$50.00</span>
                                                            <span class="old-price">$60.00</span>
                                                        </div>
                                                        <div class="rating-box">
                                                            <ul>
                                                                <li><i class="ion-ios-star"></i></li>
                                                                <li><i class="ion-ios-star"></i></li>
                                                                <li><i class="ion-ios-star"></i></li>
                                                                <li class="silver-color"><i
                                                                        class="ion-ios-star-outline"></i>
                                                                </li>
                                                                <li class="silver-color"><i
                                                                        class="ion-ios-star-outline"></i>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="shoes" class="tab-pane" role="tabpanel">
                                    <div class="kenne-element-carousel product-tab_slider slider-nav product-tab_arrow"
                                         data-slick-options='{
                                    "slidesToShow": 4,
                                    "slidesToScroll": 1,
                                    "infinite": false,
                                    "arrows": true,
                                    "dots": false,
                                    "spaceBetween": 30
                                    }' data-slick-responsive='[
                                    {"breakpoint":768, "settings": {
                                    "slidesToShow": 1
                                    }},
                                    {"breakpoint":575, "settings": {
                                    "slidesToShow": 1
                                    }}
                                ]'>

                                        <div class="product-item">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="index.php?url=productdetail">
                                                        <img class="primary-img"
                                                             src="{{asset('assets/client/images/product/2-1.jpg')}}"
                                                             alt="Kenne's Product Image">
                                                        <img class="secondary-img"
                                                             src="{{asset('assets/client/images/product/2-2.jpg')}}"
                                                             alt="Kenne's Product Image">
                                                    </a>
                                                    <span class="sticker">Bestseller</span>
                                                    <div class="add-actions">
                                                        <ul>
                                                            <li class="quick-view-btn" data-bs-toggle="modal"
                                                                data-bs-target="#exampleModalCenter"><a
                                                                    href="javascript:void(0)"
                                                                    data-bs-toggle="tooltip" data-placement="right"
                                                                    title="Quick View"><i
                                                                        class="ion-ios-search"></i></a>
                                                            </li>
                                                            <li><a href="wishlist.html" data-bs-toggle="tooltip"
                                                                   data-placement="right"
                                                                   title="Add To Wishlist"><i
                                                                        class="ion-ios-heart-outline"></i></a>
                                                            </li>
                                                            <li><a href="compare.html" data-bs-toggle="tooltip"
                                                                   data-placement="right" title="Add To Compare"><i
                                                                        class="ion-ios-reload"></i></a>
                                                            </li>
                                                            <li><a href="cart.html" data-bs-toggle="tooltip"
                                                                   data-placement="right" title="Add To cart"><i
                                                                        class="ion-bag"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-desc_info">
                                                        <h3 class="product-name"><a
                                                                href="index.php?url=productdetail">Nulla
                                                                laboriosam</a></h3>
                                                        <div class="price-box">
                                                            <span class="new-price">$80.00</span>
                                                            <span class="old-price">$85,00</span>
                                                        </div>
                                                        <div class="rating-box">
                                                            <ul>
                                                                <li><i class="ion-ios-star"></i></li>
                                                                <li><i class="ion-ios-star"></i></li>
                                                                <li><i class="ion-ios-star"></i></li>
                                                                <li><i class="ion-ios-star"></i></li>
                                                                <li><i class="ion-ios-star"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Banner-->
            <div class="banner-area-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="banner-item img-hover_effect">
                                <div class="banner-img"></div>
                                <div class="banner-content">


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Begin List Product Area -->
            <div class="list-product_area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title">
                                <h3>Phụ kiện</h3>
                                <div class="list-product_arrow"></div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="kenne-element-carousel list-product_slider slider-nav" data-slick-options='{
                        "slidesToShow": 3,
                        "slidesToScroll": 1,
                        "infinite": false,
                        "arrows": true,
                        "dots": false,
                        "spaceBetween": 30,
                        "appendArrows": ".list-product_arrow"
                        }' data-slick-responsive='[
                        {"breakpoint":1200, "settings": {
                        "slidesToShow": 2
                        }},
                        {"breakpoint":768, "settings": {
                        "slidesToShow": 1
                        }},
                        {"breakpoint":575, "settings": {
                        "slidesToShow": 1
                        }}
                    ]'>

                                <div class="product-item">
                                    <div class="single-product">
                                        <div class="product-img">
                                            <a href="index.php?url=productdetail">
                                                <img class="primary-img"
                                                     src="{{asset('assets/client/images/product/hoa.jpg')}}"
                                                     alt="Kenne's Product Image">
                                            </a>
                                            <span class="sticker-2">-10%</span>
                                        </div>
                                        <div class="product-content">
                                            <div class="product-desc_info">
                                                <span class="manufacture-product">Hoa hồng, hoa baby</span>
                                                <h3 class="product-name"><a href="index.php?url=productdetail">Hoa
                                                        cưới</a>
                                                </h3>
                                                <div class="price-box">
                                                    <span class="new-price">$46.91</span>
                                                    <span class="old-price">$50.99</span>
                                                </div>
                                            </div>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a href="wishlist.html" data-bs-toggle="tooltip"
                                                           data-placement="top" title="Add To Wishlist"><i
                                                                class="ion-ios-heart-outline"></i></a>
                                                    </li>
                                                    <li><a href="cart.html" data-bs-toggle="tooltip"
                                                           data-placement="top" title="Add To cart">Add to cart</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item">
                                    <div class="single-product">
                                        <div class="product-img">
                                            <a href="index.php?url=productdetail">
                                                <img class="primary-img"
                                                     src="{{asset('assets/client/images/product/nhan.jpg')}}"
                                                     alt="Kenne's Product Image">
                                            </a>
                                            <span class="sticker">Sale</span>
                                        </div>
                                        <div class="product-content">
                                            <div class="product-desc_info">
                                                <span class="manufacture-product">sliver, frocks</span>
                                                <h3 class="product-name"><a href="index.php?url=productdetail">Nhẫn
                                                        cưới ratione</a>
                                                </h3>
                                                <div class="price-box">
                                                    <span class="new-price">$50.00</span>
                                                    <span class="old-price">$65.00</span>
                                                </div>
                                            </div>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a href="wishlist.html" data-bs-toggle="tooltip"
                                                           data-placement="top" title="Add To Wishlist"><i
                                                                class="ion-ios-heart-outline"></i></a>
                                                    </li>
                                                    <li><a href="cart.html" data-bs-toggle="tooltip"
                                                           data-placement="top" title="Add To cart">Add to cart</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item">
                                    <div class="single-product">
                                        <div class="product-img">
                                            <a href="index.php?url=productdetail">
                                                <img class="primary-img"
                                                     src="{{asset('assets/client/images/product/caitoc.jpg')}}"
                                                     alt="Kenne's Product Image">
                                            </a>
                                            <span class="sticker-2">-15%</span>
                                        </div>
                                        <div class="product-content">
                                            <div class="product-desc_info">
                                                <span class="manufacture-product">crochet, scarf</span>
                                                <h3 class="product-name"><a href="index.php?url=productdetail">Cài
                                                        tóc cô dâu</a>
                                                </h3>
                                                <div class="price-box">
                                                    <span class="new-price">$80.00</span>
                                                    <span class="old-price">$85.0</span>
                                                </div>
                                            </div>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a href="wishlist.html" data-bs-toggle="tooltip"
                                                           data-placement="top" title="Add To Wishlist"><i
                                                                class="ion-ios-heart-outline"></i></a>
                                                    </li>
                                                    <li><a href="cart.html" data-bs-toggle="tooltip"
                                                           data-placement="top" title="Add To cart">Add to cart</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item">
                                    <div class="single-product">
                                        <div class="product-img">
                                            <a href="index.php?url=productdetail">
                                                <img class="primary-img"
                                                     src="{{asset('assets/client/images/product/1-1.jpg')}}"
                                                     alt="Kenne's Product Image">
                                            </a>
                                            <span class="sticker-2">-20%</span>
                                        </div>
                                        <div class="product-content">
                                            <div class="product-desc_info">
                                                <span class="manufacture-product">shirts, t-shirt</span>
                                                <h3 class="product-name"><a
                                                        href="index.php?url=productdetail">Quibusdam ratione</a>
                                                </h3>
                                                <div class="price-box">
                                                    <span class="new-price">$75.91</span>
                                                    <span class="old-price">$80.99</span>
                                                </div>
                                            </div>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a href="wishlist.html" data-bs-toggle="tooltip"
                                                           data-placement="top" title="Add To Wishlist"><i
                                                                class="ion-ios-heart-outline"></i></a>
                                                    </li>
                                                    <li><a href="cart.html" data-bs-toggle="tooltip"
                                                           data-placement="top" title="Add To cart">Add to cart</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- List Product Area End Here -->

            <!-- Begin Latest Blog Area -->
            <div class="latest-blog_area latest-blog_area-2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title">
                                <h3><span>Tin tức mới nhất</span></h3>
                                <div class="latest-blog_arrow"></div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="kenne-element-carousel latest-blog_slider slider-nav" data-slick-options='{
                        "slidesToShow": 2,
                        "slidesToScroll": 1,
                        "infinite": true,
                        "arrows": true,
                        "dots": false,
                        "spaceBetween": 30,
                        "appendArrows": ".latest-blog_arrow"
                        }' data-slick-responsive='[
                        {"breakpoint":992, "settings": {
                        "slidesToShow": 1
                        }},
                        {"breakpoint":768, "settings": {
                        "slidesToShow": 1
                        }},
                        {"breakpoint":575, "settings": {
                        "slidesToShow": 1
                        }}
                    ]'>

                                <div class="blog-item">
                                    <div class="blog-img img-hover_effect">
                                        <a href="blog-details.html">
                                            <img src="{{asset('assets/client/images/blog/tin1.jpg')}}" alt="Blog Image">
                                        </a>
                                    </div>
                                    <div class="blog-content">
                                        <h3 class="heading">
                                            <a href="blog-details.html">Váy cưới hot 2024-2025</a>
                                        </h3>
                                        <p class="short-desc">
                                            Tất tần tật những mẫu váy cưới đẹp, áo cưới đẹp sang trọng xu hướng năm
                                            2024 -2025
                                        </p>
                                        <div class="blog-meta">
                                            <ul>
                                                <li>Oct.20.2024</li>
                                                <li>
                                                    <a href="javascript:void(0)">02 Comments</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog-item">
                                    <div class="blog-img img-hover_effect">
                                        <a href="blog-details.html">
                                            <img src="{{asset('assets/client/images/blog/tin2.jpg')}}" alt="Blog Image">
                                        </a>
                                    </div>
                                    <div class="blog-content">
                                        <h3 class="heading">
                                            <a href="blog-details.html">Vuơn tầm cùng kenne</a>
                                        </h3>
                                        <p class="short-desc">
                                            Đương Kim Hoa Hậu Du Lịch Việt Nam Lương Kỳ Duyên lộng lẫy với mẫu váy
                                            Twinkle Star trong show diễn La Vie Est Belle
                                        </p>
                                        <div class="blog-meta">
                                            <ul>
                                                <li>Oct.20.2024</li>
                                                <li>
                                                    <a href="javascript:void(0)">02 Comments</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog-item">
                                    <div class="blog-img img-hover_effect">
                                        <a href="blog-details.html">
                                            <img src="{{asset('assets/client/images/blog/4.jpg')}}" alt="Blog Image">
                                        </a>
                                    </div>
                                    <div class="blog-content">
                                        <h3 class="heading">
                                            <a href="blog-details.html">When an unknown printer.</a>
                                        </h3>
                                        <p class="short-desc">
                                            The first line of lorem Ipsum: "Lorem ipsum dolor sit amet..", comes
                                            from a line in
                                            section 1.10.32.
                                        </p>
                                        <div class="blog-meta">
                                            <ul>
                                                <li>Oct.20.2019</li>
                                                <li>
                                                    <a href="javascript:void(0)">02 Comments</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog-item">
                                    <div class="blog-img img-hover_effect">
                                        <a href="blog-details.html">
                                            <img src="{{asset('assets/client/images/blog/5.jpg')}}" alt="Blog Image">
                                        </a>
                                    </div>
                                    <div class="blog-content">
                                        <h3 class="heading">
                                            <a href="blog-details.html">When an unknown printer took a galley of
                                                type.</a>
                                        </h3>
                                        <p class="short-desc">
                                            The first line of lorem Ipsum: "Lorem ipsum dolor sit amet..", comes
                                            from a line in
                                            section 1.10.32.
                                        </p>
                                        <div class="blog-meta">
                                            <ul>
                                                <li>Oct.20.2019</li>
                                                <li>
                                                    <a href="javascript:void(0)">02 Comments</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Latest Blog Area End Here -->

            <!-- Begin Brand Area -->
            <div class="brand-area ">
                <div class="container">
                    <div class="brand-nav border-top ">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="kenne-element-carousel brand-slider slider-nav" data-slick-options='{
                                "slidesToShow": 6,
                                "slidesToScroll": 1,
                                "infinite": false,
                                "arrows": false,
                                "dots": false,
                                "spaceBetween": 30
                                }' data-slick-responsive='[
                                {"breakpoint":992, "settings": {
                                "slidesToShow": 4
                                }},
                                {"breakpoint":768, "settings": {
                                "slidesToShow": 3
                                }},
                                {"breakpoint":576, "settings": {
                                "slidesToShow": 2
                                }}
                            ]'>


                                    <div class="brand-item">
                                        <a href="javascript:void(0)">
                                            <img src="{{asset('assets/client/images/brand/2.png')}}" alt="Brand Images">
                                        </a>
                                    </div>
                                    <div class="brand-item">
                                        <a href="javascript:void(0)">
                                            <img src="{{asset('assets/client/images/brand/3.png')}}" alt="Brand Images">
                                        </a>
                                    </div>

                                    <div class="brand-item">
                                        <a href="javascript:void(0)">
                                            <img src="{{asset('assets/client/images/brand/5.png')}}" alt="Brand Images">
                                        </a>
                                    </div>
                                    <div class="brand-item">
                                        <a href="javascript:void(0)">
                                            <img src="{{asset('assets/client/images/brand/6.png')}}" alt="Brand Images">
                                        </a>
                                    </div>

                                    <div class="brand-item">
                                        <a href="javascript:void(0)">
                                            <img src="{{asset('assets/client/images/brand/2.png')}}" alt="Brand Images">
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- home-->


            <style>
                .star {
                    display: none;
                }

                .star-label {
                    display: inline-block;
                    width: 30px;
                    height: 30px;
                    background-image: url({{asset('assets/client/images/star1.png')}});
                    background-size: cover;
                    cursor: pointer;
                }

                .star-input:checked + .star-label {
                    background-image: url('https://www.example.com/star-filled.png');
                    /* Thay thế đường dẫn này bằng đường dẫn đến hình ảnh sao đã được điền của bạn */
                }
            </style>
            <div class="kenne-footer_area bg-smoke_color">
                <div class="footer-top_area">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="newsletter-area">
                                    <div class="newsletter-logo">
                                        <a href="javascript:void(0)">
                                            <img src="{{asset('assets/client/images/footer/logo/1.png')}}" alt="Logo">
                                        </a>
                                    </div>
                                    <p class="short-desc">Hãy đánh giá trải nghiệm của bạn với cửa hàng !</p>
                                    <div class="newsletter-form_wrap">
                                        <form action="?url=danhgia" method="post" class="newsletters-form validate"
                                              target="_blank" novalidate>
                                            <input type="radio" class="star" id="star-1" name="rating" value="1">
                                            <label for="star-1" class="star-label"></label>
                                            <input type="radio" class="star" id="star-2" name="rating" value="2">
                                            <label for="star-2" class="star-label"></label>
                                            <input type="radio" class="star" id="star-3" name="rating" value="3">
                                            <label for="star-3" class="star-label"></label>
                                            <input type="radio" class="star" id="star-4" name="rating" value="4">
                                            <label for="star-4" class="star-label"></label>
                                            <input type="radio" class="star" id="star-5" name="rating" value="5">
                                            <label for="star-5" class="star-label"></label>
                                            <span id="status"></span>
                                            <div id="mc_embed_signup_scroll">
                                                <div id="mc-form" class="mc-form subscribe-form">
                                                    <input name="content" id="mc-email" class="newsletter-input"
                                                           type="email" autocomplete="off"
                                                           placeholder="Bản cảm thấy thế nào ?"/>
                                                    <button class="newsletter-btn" id="mc-submit"><i
                                                            class="ion-android-mail"></i></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- <script>
                        let stars = document.getElementsByClassName("star");
                        let starsLabel = document.getElementsByClassName("star-label");
                        let starImgUp = "assets/images/star2.png')}}";
                        let starImgDown = "assets/images/star1.png')}}";
                        let status = {
                            "1s": {
                                label: "Tệ",
                                color: "red"
                            },
                            "2s": {
                                label: "Kém",
                                color: "orangered"
                            },
                            "3s": {
                                label: "Bình thường",
                                color: "yellow"
                            },
                            "4s": {
                                label: "Bình thường",
                                color: "blue"
                            },
                            "5s": {
                                label: "Tốt",
                                color: "green"
                            }
                        };

                        for (let i = 0; i < stars.length; i++) {
                            stars[i].addEventListener("click", () => {
                                if (stars[i].checked) {
                                    for (let j = 0; j <= i; j++) {
                                        starsLabel[j].style.backgroundImage = "url(" + starImgUp + ")";
                                        for (let z = 4; z > i; z--) {
                                            starsLabel[z].style.backgroundImage = "url(" + starImgDown + ")";
                                        }
                                    }
                                }
                            });
                        }
                    </script> -->
                                </div>
                            </div>
                            <div class="col-lg-6 offset-lg-1">
                                <div class="row footer-widgets_wrap">
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <div class="footer-widgets_title">
                                            <h4>Mua sắm </h4>
                                        </div>
                                        <div class="footer-widgets">
                                            <ul>
                                                <li><a href="javascript:void(0)">Sản phẩm</a></li>
                                                <li><a href="javascript:void(0)">Giỏ hàng của tôi</a></li>
                                                <li><a href="javascript:void(0)">Danh sách yêu thích</a></li>
                                                <li><a href="javascript:void(0)">Giỏ hàng</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <div class="footer-widgets_title">
                                            <h4>Tài khoản</h4>
                                        </div>
                                        <div class="footer-widgets">
                                            <ul>
                                                <li><a href="javascript:void(0)">Đăng nhập</a></li>
                                                <li><a href="javascript:void(0)">Đăng ký</a></li>
                                                <li><a href="javascript:void(0)">Trợ giúp</a></li>
                                                <li><a href="javascript:void(0)">Ủng hộ</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <div class="footer-widgets_title">
                                            <h4>Thể loại </h4>
                                        </div>
                                        <div class="footer-widgets">
                                            <ul>
                                                <li><a href="javascript:void(0)">Đàn ông </a></li>
                                                <li><a href="javascript:void(0)">Phụ nữ </a></li>
                                                <li><a href="javascript:void(0)">Quần Jeans</a></li>
                                                <li><a href="javascript:void(0)">Quần Shoes</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom_area">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="copyright">
                                        <span>Copyright &copy; 2023 <a href="javascript:void(0)">Kenne.</a> All rights
                                            reserved.</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="payment">
                                    <img src="{{asset('assets/client/images/footer/payment/1.png')}}"
                                         alt="Kenne's Payment Method">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Kenne's Footer Area End Here -->

            <!-- Scroll To Top Start -->
            <a class="scroll-to-top" href="#"><i class="ion-chevron-up"></i></a>
            <!-- Scroll To Top End -->

        </div>

        <!-- JS
============================================ -->

        <!-- jQuery JS -->
        <script src="{{asset('assets/client/js/vendor/jquery-3.6.0.min.js')}}"></script>
        <script src="{{asset('assets/client/js/vendor/jquery-migrate-3.3.2.min.js')}}"></script>
        <!-- Modernizer JS -->
        <script src="{{asset('assets/client/js/vendor/modernizr-3.11.2.min.js')}}"></script>
        <!-- Bootstrap JS -->
        <script src="{{asset('assets/client/js/vendor/bootstrap.bundle.min.js')}}"></script>

        <!-- Slick Slider JS -->
        <script src="{{asset('assets/client/js/plugins/slick.min.js')}}"></script>
        <!-- Barrating JS -->
        <script src="{{asset('assets/client/js/plugins/jquery.barrating.min.js')}}"></script>
        <!-- Counterup JS -->
        <script src="{{asset('assets/client/js/plugins/jquery.counterup.js')}}"></script>
        <!-- Nice Select JS -->
        <script src="{{asset('assets/client/js/plugins/jquery.nice-select.js')}}"></script>
        <!-- Sticky Sidebar JS -->
        <script src="{{asset('assets/client/js/plugins/jquery.sticky-sidebar.js')}}"></script>
        <!-- Jquery-ui JS -->
        <script src="{{asset('assets/client/js/plugins/jquery-ui.min.js')}}"></script>
        <script src="{{asset('assets/client/js/plugins/jquery.ui.touch-punch.min.js')}}"></script>
        <!-- Theia Sticky Sidebar JS -->
        <script src="{{asset('assets/client/js/plugins/theia-sticky-sidebar.min.js')}}"></script>
        <!-- Waypoints JS -->
        <script src="{{asset('assets/client/js/plugins/waypoints.min.js')}}"></script>
        <!-- jQuery Zoom JS -->
        <script src="{{asset('assets/client/js/plugins/jquery.zoom.min.js')}}"></script>
        <!-- Timecircles JS -->
        <script src="{{asset('assets/client/js/plugins/timecircles.js')}}"></script>

        <!-- Main JS -->
        <script src="{{asset('assets/client/js/main.js')}}"></script>

</body>


<!-- Mirrored from htmldemo.net/kenne/kenne/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Jan 2024 08:41:32 GMT -->

</html>
