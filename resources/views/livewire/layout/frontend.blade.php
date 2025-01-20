<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themes.pixelstrap.net/zomo/landing/frontend/index4.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Aug 2024 03:52:01 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="zomo">
    <meta name="keywords" content="zomo">
    <meta name="author" content="zomo">
    <link rel="icon" href="{{asset('/assets/frontend/images/logo/favicon.png')}}" type="image/x-icon">
    <title>zomo Web</title>
    <link rel="apple-touch-icon" href="{{asset('/assets/frontend/images/logo/favicon.png')}}">
    <meta name="theme-color" content="#ff8d2f">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="zomo">
    <meta name="msapplication-TileImage" content="assets/images/logo/favicon.png">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!--Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
          rel="stylesheet">

    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" id="rtl-link" href="{{asset('assets/frontend/css/vendors/bootstrap.css')}}">

    <!-- swiper css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/vendors/swiper-bundle.min.css')}}">

    <!-- aos css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/vendors/aos.css')}}">

    <!-- remixicon css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/vendors/aos.css')}}">

    <!-- Theme css -->
    <link rel="stylesheet" id="change-link" type="text/css" href="{{asset('assets/frontend/css/style.css')}}">
</head>

<body class="position-relative noice-background">

<!-- Loader starts -->
@include('frontend.partials.loader')

<!-- Header section start -->
<header class="header-light">
    <div class="custom-container">
        <nav class="navbar navbar-expand-lg p-0">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#offcanvasNavbar">
                    <span class="navbar-toggler-icon">
                        <i class="ri-menu-line"></i>
                    </span>
            </button>
            <a href="index-2.html">
                <img class="img-fluid logo" src="assets/images/svg/logo2.svg" alt="logo">
            </a>
            <a target="_blank" href="#!" data-bs-toggle="modal" data-bs-target="#location"
               class="btn btn-sm theme-btn location-btn mt-0 ms-3 d-flex align-content-center gap-1">
                <i class="ri-map-pin-line"></i> Location
            </a>
            <div class="nav-option order-md-2">
                <div class="dropdown-button">
                    <div class="cart-button">
                        <span>5</span>
                        <i class="ri-shopping-cart-line cart-bag"></i>
                    </div>
                    <div class="onhover-box">
                        <ul class="cart-list">
                            <li class="product-box-contain">
                                <div class="drop-cart">
                                    <a href="#!" class="drop-image">
                                        <img src="assets/images/product/vp-3.png" class="blur-up lazyloaded" alt="">
                                    </a>
                                    <div class="drop-contain">
                                        <a href="#!">
                                            <h5>Egg Sandwich</h5>
                                        </a>
                                        <h6><span>1 x </span> $80.58</h6>
                                        <button class="close-button close_button">
                                            <i class="fa-solid fa-xmark"></i>
                                        </button>
                                    </div>
                                </div>
                            </li>
                            <li class="product-box-contain">
                                <div class="drop-cart">
                                    <a href="#!" class="drop-image">
                                        <img src="assets/images/product/vp-2.png" class="blur-up lazyloaded" alt="">
                                    </a>
                                    <div class="drop-contain">
                                        <a href="#!">
                                            <h5>Grilled Chicken Quesadilla</h5>
                                        </a>
                                        <h6><span>1 x </span> $25.64</h6>
                                        <button class="close-button close_button">
                                            <i class="fa-solid fa-xmark"></i>
                                        </button>
                                    </div>
                                </div>
                            </li>
                            <li class="product-box-contain">
                                <div class="drop-cart">
                                    <a href="#!" class="drop-image">
                                        <img src="assets/images/product/vp-4.png" class="blur-up lazyloaded" alt="">
                                    </a>
                                    <div class="drop-contain">
                                        <a href="#!">
                                            <h5>Spicy Ahi Roll</h5>
                                        </a>
                                        <h6><span>1 x </span> $12.00</h6>
                                        <button class="close-button close_button">
                                            <i class="fa-solid fa-xmark"></i>
                                        </button>
                                    </div>
                                </div>
                            </li>
                            <li class="product-box-contain">
                                <div class="drop-cart">
                                    <a href="#!" class="drop-image">
                                        <img src="assets/images/product/vp-5.png" class="blur-up lazyloaded" alt="">
                                    </a>
                                    <div class="drop-contain">
                                        <a href="#!">
                                            <h5>Spicy Dumplings</h5>
                                        </a>
                                        <h6><span>1 x </span> $16.28</h6>
                                        <button class="close-button close_button">
                                            <i class="fa-solid fa-xmark"></i>
                                        </button>
                                    </div>
                                </div>
                            </li>
                            <li class="product-box-contain">
                                <div class="drop-cart">
                                    <a href="#!" class="drop-image">
                                        <img src="assets/images/product/vp-6.png" class="blur-up lazyloaded" alt="">
                                    </a>
                                    <div class="drop-contain">
                                        <a href="#!">
                                            <h5>Chicken Nugget</h5>
                                        </a>
                                        <h6><span>1 x </span> $20.50</h6>
                                        <button class="close-button close_button">
                                            <i class="fa-solid fa-xmark"></i>
                                        </button>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="price-box">
                            <h5>Total :</h5>
                            <h4 class="theme-color fw-semibold">$155.00</h4>
                        </div>
                        <div class="button-group">
                            <a href="checkout.html" class="btn btn-sm theme-btn w-100 d-block rounded-2">View
                                Cart</a>
                        </div>
                    </div>
                </div>
                <div class="profile-part dropdown-button order-md-2">
                    <img class="img-fluid profile-pic" src="assets/images/icons/p5.png" alt="profile">
                    <div>
                        <h6 class="fw-normal">Hi, Mark Jecno</h6>
                        <h5 class="fw-medium">My Account</h5>
                    </div>
                    <div class="onhover-box onhover-sm">
                        <ul class="menu-list">
                            <li>
                                <a class="dropdown-item" href="profile.html">Profile</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="my-order.html">My orders</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="saved-address.html">Saved Address</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="saved-card.html">Saved cards</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="setting.html">Settings</a>
                            </li>
                        </ul>
                        <div class="bottom-btn">
                            <a href="signin.html" class="theme-color fw-medium d-flex"><i
                                    class="ri-login-box-line me-2"></i>Logout</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                    <button class="navbar-toggler btn-close" id="offcanvas-close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-center flex-grow-1">
                        <li class="nav-item dropdown mega-menu">
                            <a class="nav-link dropdown-toggle" href="#!" id="accountDropdown" role="button"
                               data-bs-toggle="dropdown" aria-expanded="false">Home</a>
                            <div class="dropdown-menu mt-0 border-0 bsb-zoomIn" aria-labelledby="accountDropdown">
                                <div class="row row-cols-lg-5 row-cols-1 g-xl-4 g-3">
                                    <div class="col">
                                        <a href="index-2.html" class="demo-box" target="_blank">
                                            <img src="assets/images/demo/1.png" alt="d-1"
                                                 class="img-fluid demo-img">
                                            <h5 class="dropdown-item">Classic</h5>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a href="index2.html" class="demo-box" target="_blank">
                                            <img src="assets/images/demo/2.png" alt="d-2"
                                                 class="img-fluid demo-img">
                                            <h5 class="dropdown-item">Elegance</h5>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a href="index3.html" class="demo-box" target="_blank">
                                            <img src="assets/images/demo/3.png" alt="d-3"
                                                 class="img-fluid demo-img">
                                            <h5 class="dropdown-item">Compact</h5>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a href="index4.html" class="demo-box" target="_blank">
                                            <img src="assets/images/demo/4.png" alt="d-4"
                                                 class="img-fluid demo-img">
                                            <h5 class="dropdown-item">Minimal</h5>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a href="index5.html" class="demo-box" target="_blank">
                                            <img src="assets/images/demo/5.png" alt="d-5"
                                                 class="img-fluid demo-img">
                                            <h5 class="dropdown-item">Mordern</h5>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link dropdown-toggle" href="#!" id="orderMenu" role="button"
                               data-bs-toggle="dropdown" aria-expanded="false">Order</a>
                            <ul class="dropdown-menu mt-0 border-0" aria-labelledby="orderMenu">
                                <li>
                                    <a class="dropdown-item" href="menu-listing.html">Menu listing</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="menu-grid.html">Menu grid</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="address.html">Address</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="checkout.html">Checkout</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="confirm-order.html">Confirm order</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="offer.html">Offer</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="order-tracking.html">Order tracking</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="payment.html">Payment</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="restaurant-listing.html">Restaurant listing</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link dropdown-toggle" href="#!" id="blogMenu" role="button"
                               data-bs-toggle="dropdown" aria-expanded="false">Blog</a>
                            <ul class="dropdown-menu mt-0 border-0" aria-labelledby="blogMenu">
                                <li>
                                    <a class="dropdown-item" href="blog-grid-left-sidebar.html">Grid Left
                                        Sidebar</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="blog-grid-right-sidebar.html">Grid Right
                                        Sidebar</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="blog-list.html">Blog Listing</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="blog-details.html">Blog Details</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#!" id="pagesMenu" role="button"
                               data-bs-toggle="dropdown" aria-expanded="false">Pages</a>
                            <ul class="dropdown-menu mt-0 border-0" aria-labelledby="pagesMenu">
                                <li><a class="dropdown-item" href="404.html">404</a></li>
                                <li>
                                    <a class="dropdown-item" href="coming-soon.html">Coming soon</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="contact.html">Contact</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="empty-cart.html">Empty Cart</a>
                                </li>
                                <li><a class="dropdown-item" href="faq.html">FAQs</a></li>
                                <li><a class="dropdown-item" href="otp.html">OTP</a></li>
                                <li>
                                    <a class="dropdown-item" href="signin.html">Sign in</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="signup.html">Sign up</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="testimonial.html">Testimonial</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="wishlist.html">Wishlist</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
<!-- Header Section end -->

<!-- home section start -->
<section class="pt-4 home3">
    <div class="custom-container">
        <div class="position-relative">
            <img src="assets/images/home-bg2.png" class="img-fluid bg-home-img" alt="">
            <div class="home-content">
                <div class="row w-100 h-100">
                    <div class="col-sm-6 col-12">
                        <div class="home-left-content">
                            <label>50% off on First delivery</label>
                            <h2>Made with love,<br />Savored with interest.</h2>
                            <p>Browse out top categories here to discover different food cuision.
                            </p>
                            <div class="search-section">
                                <form class="auth-form search-head" target="_blank">
                                    <div class="form-group">
                                        <div class="form-input mb-0">
                                            <input type="search" class="form-control search" id="inputusername"
                                                   placeholder="Search for Restaurant">
                                            <i class="ri-search-line search-icon"></i>
                                        </div>
                                    </div>
                                </form>
                                <a class="btn theme-btn mt-0" href="#" role="button">Search</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 d-sm-block d-none">
                        <div class="home-right position-relative">
                            <img src="assets/images/mobile.png" class="img-fluid base-phone" alt="">
                            <div class="animated-img">
                                <div class="food1">
                                    <img src="assets/images/food1.png" data-aos="fade-down" data-aos-easing="linear"
                                         data-aos-anchor-placement="top-center" data-aos-duration="1200"
                                         class="img-fluid" alt="">
                                </div>
                                <div class="food2">
                                    <img src="assets/images/food2.png" data-aos-duration="1200" data-aos="fade-down"
                                         data-aos-anchor-placement="bottom-center" class="img-fluid" alt="">
                                </div>
                                <div class="food3">
                                    <img src="assets/images/food3.png" data-aos="fade-down" data-aos-easing="linear"
                                         data-aos-anchor-placement="bottom-bottom" data-aos-duration="1000"
                                         class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- home section end -->

<!-- service section start -->
<section class="service-section section-b-space">
    <div class="container">
        <div class="home-features-list row gy-xl-0 gy-md-4 gy-3 row-cols-xl-4 row-cols-lg-3 row-cols-sm-2">
            <div>
                <div class="home-features-box">
                    <img class="img-fluid icon" src="assets/images/svg/routing.svg" alt="routing">
                    <div class="home-features-content">
                        <h5>Wide Map</h5>
                        <h6>Wide Range of Map, Order from anywhere anytime</h6>
                    </div>
                </div>
            </div>
            <div>
                <div class="home-features-box">
                    <img class="img-fluid icon" src="assets/images/svg/3d-rotate.svg" alt="3d-rotate">
                    <div class="home-features-content">
                        <h5>Easiest Order</h5>
                        <h6>Easy and hussle free order online process</h6>
                    </div>
                </div>
            </div>
            <div>
                <div class="home-features-box">
                    <img class="img-fluid icon" src="assets/images/svg/truck.svg" alt="truck">
                    <div class="home-features-content">
                        <h5>Most Delivery</h5>
                        <h6>we ensure your food is delivered swiftly</h6>
                    </div>
                </div>
            </div>
            <div>
                <div class="home-features-box">
                    <img class="img-fluid icon" src="assets/images/svg/credit-card.svg" alt="truck">
                    <div class="home-features-content">
                        <h5>Various Payment</h5>
                        <h6>Various payment options to make order seamless</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- service section end -->

<!-- title start -->
<div class="container">
    <div class="title-center">
        <h2>Tasty food to your destination <span> in 20 mins.</span></h2>
    </div>
</div>
<!-- title end -->

<!-- popular restaurant section starts -->
<section class="popular-restaurant section-b-space ratio3_2 overflow-hidden">
    <div class="container">
        <div class="row g-md-4 g-3">
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="vertical-product-box product-style-3">
                    <div class="vertical-product-box-img">
                        <a href="menu-listing.html">
                            <img class="product-img-top w-100 bg-img" src="assets/images/product/vp-1.png"
                                 alt="vp1">
                        </a>
                        <div class="offers">
                            <img src="assets/images/shape.png" alt="shape" class="img-fluid">
                            <h6>upto $2</h6>
                            <div class="d-flex align-items-center justify-content-end">
                                <h4>50% OFF</h4>
                            </div>
                        </div>
                    </div>
                    <div class="vertical-product-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <a href="menu-listing.html">
                                <h4 class="vertical-product-title">Poultry Palace</h4>
                            </a>
                            <h6 class="rating-star">
                                <span class="star"><i class="ri-star-s-fill"></i></span>3.9
                            </h6>
                        </div>
                        <h5 class="product-items">Chicken quesadilla, avocado....</h5>
                        <div
                            class="location-distance d-flex align-items-center justify-content-between pt-sm-3 pt-2">
                            <h5 class="place">New Jsercy</h5>
                            <ul class="distance">
                                <li><i class="ri-map-pin-fill icon"></i> 3.2 km</li>
                                <li><i class="ri-time-fill icon"></i> 25 min</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="vertical-product-box product-style-3">
                    <div class="vertical-product-box-img">
                        <a href="menu-listing.html">
                            <img class="vertical-product-img-top w-100 bg-img" src="assets/images/product/vp-2.png"
                                 alt="vp-2">
                        </a>
                        <div class="offers">
                            <img src="assets/images/shape.png" alt="shape" class="img-fluid">
                            <h6>upto $2</h6>
                            <div class="d-flex align-items-center justify-content-end">
                                <h4>50% OFF</h4>
                            </div>
                        </div>
                    </div>
                    <div class="vertical-product-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <a href="menu-listing.html">
                                <h4 class="vertical-product-title">Ribeye Junction</h4>
                            </a>
                            <h6 class="rating-star">
                                <span class="star"><i class="ri-star-s-fill"></i></span>3.2
                            </h6>
                        </div>
                        <h5 class="product-items">Chicken quesadilla, avocado....</h5>
                        <div
                            class="location-distance d-flex align-items-center justify-content-between pt-sm-3 pt-2">
                            <h5 class="place">California</h5>
                            <ul class="distance">
                                <li><i class="ri-map-pin-fill icon"></i> 1 km</li>
                                <li><i class="ri-time-fill icon"></i> 10 min</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="vertical-product-box product-style-3">
                    <div class="vertical-product-box-img">
                        <a href="menu-listing.html">
                            <img class="product-img-top w-100 bg-img" src="assets/images/product/vp-3.png"
                                 alt="vp3">
                        </a>
                    </div>
                    <div class="vertical-product-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <a href="menu-listing.html">
                                <h4 class="vertical-product-title">
                                    The Grill Master's Cafe
                                </h4>
                            </a>
                            <h6 class="rating-star">
                                <span class="star"><i class="ri-star-s-fill"></i></span>4.3
                            </h6>
                        </div>
                        <h5 class="product-items">Bread, Eggs, Butter, Fries...</h5>
                        <div
                            class="location-distance d-flex align-items-center justify-content-between pt-sm-3 pt-2">
                            <h5 class="place">New York</h5>
                            <ul class="distance">
                                <li><i class="ri-map-pin-fill icon"></i> 5 km</li>
                                <li><i class="ri-time-fill icon"></i> 40 min</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="vertical-product-box product-style-3">
                    <div class="vertical-product-box-img">
                        <a href="menu-listing.html">
                            <img class="product-img-top w-100 bg-img" src="assets/images/product/vp-4.png"
                                 alt="vp-4">
                        </a>
                    </div>
                    <div class="vertical-product-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <a href="menu-listing.html">
                                <h4 class="vertical-product-title">Cozy Cuppa Cafe</h4>
                            </a>
                            <h6 class="rating-star">
                                <span class="star"><i class="ri-star-s-fill"></i></span>3.6
                            </h6>
                        </div>
                        <h5 class="product-items">cheesecake, waffles, Cakes,...</h5>
                        <div
                            class="location-distance d-flex align-items-center justify-content-between pt-sm-3 pt-2">
                            <h5 class="place">Dallas</h5>
                            <ul class="distance">
                                <li><i class="ri-map-pin-fill icon"></i> 4 km</li>
                                <li><i class="ri-time-fill icon"></i> 30 min</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="vertical-product-box product-style-3">
                    <div class="vertical-product-box-img">
                        <a href="menu-listing.html">
                            <img class="product-img-top w-100 bg-img" src="assets/images/product/vp-5.png"
                                 alt="vp-5">
                        </a>
                    </div>
                    <div class="vertical-product-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <a href="menu-listing.html">
                                <h4 class="vertical-product-title">Mocha Magic Cafe</h4>
                            </a>
                            <h6 class="rating-star">
                                <span class="star"><i class="ri-star-s-fill"></i></span>3.2
                            </h6>
                        </div>
                        <h5 class="product-items">Chinese, Momos, Dumplings,...</h5>
                        <div
                            class="location-distance d-flex align-items-center justify-content-between pt-sm-3 pt-2">
                            <h5 class="place">Seattle</h5>
                            <ul class="distance">
                                <li><i class="ri-map-pin-fill icon"></i> 1 km</li>
                                <li><i class="ri-time-fill icon"></i> 8 min</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="vertical-product-box product-style-3">
                    <div class="vertical-product-box-img">
                        <a href="menu-listing.html">
                            <img class="product-img-top w-100 bg-img" src="assets/images/product/vp-6.png"
                                 alt="vp16">
                        </a>
                        <div class="offers">
                            <img src="assets/images/shape.png" alt="shape" class="img-fluid">
                            <h6>upto $2</h6>
                            <div class="d-flex align-items-center justify-content-end">
                                <h4>50% OFF</h4>
                            </div>
                        </div>
                    </div>
                    <div class="vertical-product-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <a href="menu-listing.html">
                                <h4 class="vertical-product-title">Latte Lounge</h4>
                            </a>
                            <h6 class="rating-star">
                                <span class="star"><i class="ri-star-s-fill"></i></span>3.6
                            </h6>
                        </div>
                        <h5 class="product-items">
                            Chicken fingers, Chicken goujons,....
                        </h5>
                        <div
                            class="location-distance d-flex align-items-center justify-content-between pt-sm-3 pt-2">
                            <h5 class="place">Atlanta</h5>
                            <ul class="distance">
                                <li><i class="ri-map-pin-fill icon"></i> 3 km</li>
                                <li><i class="ri-time-fill icon"></i> 25 min</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="vertical-product-box product-style-3">
                    <div class="vertical-product-box-img">
                        <a href="menu-listing.html">
                            <img class="vertical-product-img-top w-100 bg-img" src="assets/images/product/vp-7.png"
                                 alt="vp-7">
                        </a>
                        <div class="offers">
                            <img src="assets/images/shape.png" alt="shape" class="img-fluid">
                            <h6>upto $2</h6>
                            <div class="d-flex align-items-center justify-content-end">
                                <h4>50% OFF</h4>
                            </div>
                        </div>
                    </div>
                    <div class="vertical-product-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <a href="menu-listing.html">
                                <h4 class="vertical-product-title">The Burger Barn</h4>
                            </a>
                            <h6 class="rating-star">
                                <span class="star"><i class="ri-star-s-fill"></i></span>3.8
                            </h6>
                        </div>
                        <h5 class="product-items">
                            Burger, Garlic Bread, Sandwich....
                        </h5>
                        <div
                            class="location-distance d-flex align-items-center justify-content-between pt-sm-3 pt-2">
                            <h5 class="place">Chicago</h5>
                            <ul class="distance">
                                <li><i class="ri-map-pin-fill icon"></i> 2.4 km</li>
                                <li><i class="ri-time-fill icon"></i> 20 min</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="vertical-product-box product-style-3">
                    <div class="vertical-product-box-img">
                        <a href="menu-listing.html">
                            <img class="vertical-product-img-top w-100 bg-img" src="assets/images/product/vp-8.png"
                                 alt="vp-8">
                        </a>
                        <div class="offers">
                            <img src="assets/images/shape.png" alt="shape" class="img-fluid">
                            <h6>upto $2</h6>
                            <div class="d-flex align-items-center justify-content-end">
                                <h4>50% OFF</h4>
                            </div>
                        </div>
                    </div>
                    <div class="vertical-product-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <a href="menu-listing.html">
                                <h4 class="vertical-product-title">Wing Master</h4>
                            </a>
                            <h6 class="rating-star">
                                <span class="star"><i class="ri-star-s-fill"></i></span>3.2
                            </h6>
                        </div>
                        <h5 class="product-items">Chicken quesadilla, avocado....</h5>
                        <div
                            class="location-distance d-flex align-items-center justify-content-between pt-sm-3 pt-2">
                            <h5 class="place">New York</h5>
                            <ul class="distance">
                                <li><i class="ri-map-pin-fill icon"></i> 1.8 km</li>
                                <li><i class="ri-time-fill icon"></i> 12 min</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- popular restaurant section end -->

<!-- app section starts -->
<section class="container app-container pt-0">
    <div class="app-section">
        <div class="container">
            <div class="d-flex align-items-center">
                <div class="app-img">
                    <img class="img-fluid phone" src="assets/images/service-phone.png" alt="app-phone">
                </div>
                <div class="app-content">
                    <h2>Zomo App : Online & Mobile Ordering</h2>
                    <h5>
                        Get the app for free and place takeout orders online whenever you
                        want.
                    </h5>
                    <div class="app-buttons d-flex align-items-center gap-3">
                        <a href="https://www.apple.com/in/app-store/">
                            <img class="img-fluid app-btn" src="assets/images/svg/app-store.svg" alt="app-store">
                        </a>
                        <a href="https://play.google.com/store/apps">
                            <img class="img-fluid app-btn" src="assets/images/svg/google-play.svg"
                                 alt="google-play">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- app section end -->

<!-- footer section starts -->
<footer class="footer-section footer-sm">
    <img src="assets/images/home-bg2.png" class="img-fluid footer-img" alt="">
    <div class="custom-container">
        <div class="main-footer">
            <div class="row g-3">
                <div class="col-xl-4 col-lg-12">
                    <div class="footer-logo-part">
                        <img class="img-fluid logo" src="assets/images/svg/logo.svg" alt="logo">
                        <p>
                            Welcome to our online order website! Here, you can browse our
                            wide selection of products and place orders from the comfort
                            of your own home.
                        </p>
                        <div class="social-media-part">
                            <ul class="social-icon">
                                <li>
                                    <a href="https://www.facebook.com/login/">
                                        <i class="ri-facebook-fill icon"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/i/flow/login">
                                        <i class="ri-twitter-fill icon"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/login/">
                                        <i class="ri-linkedin-fill icon"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/accounts/login/">
                                        <i class="ri-instagram-fill icon"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.youtube.com/">
                                        <i class="ri-youtube-fill icon"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="row g-3">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                            <div>
                                <h5 class="footer-title">Company</h5>
                                <ul class="content">
                                    <li>
                                        <a class="nav-links" href="about.html">
                                            <h6>About us</h6>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-links" href="contact.html">
                                            <h6>Contact us</h6>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-links" href="offer.html">
                                            <h6>Offer</h6>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-links" href="faq.html">
                                            <h6>FAQs</h6>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                            <div>
                                <h5 class="footer-title">Account</h5>
                                <ul class="content">
                                    <li>
                                        <a class="nav-links" href="my-order.html">
                                            <h6>My orders</h6>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-links" href="wishlist.html">
                                            <h6>Wishlist</h6>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-links" href="checkout.html">
                                            <h6>Shopping Cart</h6>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-links" href="saved-address.html">
                                            <h6>Saved Address</h6>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                            <div>
                                <h5 class="footer-title">Useful links</h5>
                                <ul class="content">
                                    <li>
                                        <a class="nav-links" href="blog-grid-left-sidebar.html">
                                            <h6>Blogs</h6>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-links" href="signin.html">
                                            <h6>Login</h6>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-links" href="signup.html">
                                            <h6>Register</h6>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-links" href="profile.html">
                                            <h6>Profile</h6>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-links" href="setting.html">
                                            <h6>Settings</h6>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                            <div>
                                <h5 class="footer-title">Top Brands</h5>
                                <ul class="content">
                                    <li>
                                        <a class="nav-links" href="menu-listing.html">
                                            <h6>PizzaBoy</h6>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-links" href="menu-listing.html">
                                            <h6>Saladish</h6>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-links" href="menu-listing.html">
                                            <h6>IcePops</h6>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-links" href="menu-listing.html">
                                            <h6>Maxican Hoy</h6>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-links" href="menu-listing.html">
                                            <h6>La Foodie</h6>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-footer-part">
            <div class="d-flex align-items-center justify-content-between flex-wrap gap-2">
                <h6>@ Copyright 2024 ZOMO. All rights Reserved.</h6>
                <img class="img-fluid cards" src="assets/images/icons/footer-card.png" alt="card">
            </div>
        </div>
    </div>
</footer>
<!-- footer section end -->

<!-- mobile fix menu start -->
<div class="mobile-menu d-md-none d-block mobile-cart">
    <ul>
        <li class="active">
            <a href="index-2.html" class="menu-box">
                <i class="ri-home-4-line"></i>
                <span>Home</span>
            </a>
        </li>
        <li>
            <a href="wishlist.html" class="menu-box">
                <i class="ri-heart-3-line"></i>
                <span>Wishlist</span>
            </a>
        </li>
        <li>
            <a href="checkout.html" class="menu-box">
                <i class="ri-shopping-cart-2-line"></i>
                <span>Cart</span>
            </a>
        </li>
        <li>
            <a href="index-2.html" class="menu-box">
                <i class="ri-user-line"></i>
                <span>Profile</span>
            </a>
        </li>
    </ul>
</div>
<!-- mobile fix menu end -->

<!-- theme btn start -->
<div class="theme-btns">
    <button type="button" class="btntheme mode-change-button">
        <i id="themeIcon" class="ri-moon-line icon mode-icon"></i>
        <span class="text-value">Dark</span>
    </button>
    <button type="button" id="rtl-btn" class="btntheme rtlBtnEl">
        <i class="ri-repeat-line icon"></i>
        <span class="text-value">RTL</span>
    </button>
</div>
<!-- theme btn end -->

<!-- tap to top start -->
<button class="scroll scroll-to-top">
    <i class="ri-arrow-up-s-line arrow"></i>
</button>
<!-- tap to top end -->

<!-- location offcanvas start -->
<div class="modal fade location-modal" id="location" data-bs-backdrop="static" data-bs-keyboard="false"
     tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title">
                    <h5 class="fw-semibold">Select a Location</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            </div>
            <div class="modal-body">
                <div class="search-section">
                    <form class="form_search" role="form">
                        <input type="search" placeholder="Search Location" class="nav-search nav-search-field">
                    </form>
                </div>
                <a href="#!" class="current-location">
                    <div class="current-address">
                        <i class="ri-focus-3-line focus"></i>
                        <div>
                            <h5>Use current-location</h5>
                            <h6>Wellington St., Ottawa, Ontario, Canada</h6>
                        </div>
                    </div>
                    <i class="ri-arrow-right-s-line arrow"></i>
                </a>
                <h5 class="mt-sm-3 mt-2 fw-medium recent-title dark-text">
                    Recent Location
                </h5>
                <a href="#!" class="recent-location">
                    <div class="recant-address">
                        <i class="ri-map-pin-line theme-color"></i>
                        <div>
                            <h5>Bayshore</h5>
                            <h6>kingston St., Ottawa, Ontario, Canada</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn gray-btn" data-bs-dismiss="modal">Close</a>
                <a href="#" class="btn theme-btn mt-0" data-bs-dismiss="modal">Save</a>
            </div>
        </div>
    </div>
</div>
<!-- location offcanvas end -->

<!-- responsive space -->
<div class="responsive-space"></div>
<!-- responsive space -->

<!-- bootstrap js -->
<script src={{asset("assets/frontend/js/bootstrap.bundle.min.js")}}></script>

<!-- footer accordion js -->
<script src={{asset("assets/frontend/js/footer-accordion.js")}}></script>

<!-- loader js -->
{{--<script src={{asset("assets/frontend/js/loader.js")}}></script>--}}

<!-- swiper js -->
{{--<script src={{asset("assets/frontend/js/swiper-bundle.min.js")}}></script>--}}
{{--<script src={{asset("assets/frontend/js/custom-swiper.js")}}></script>--}}

<!-- aos js -->
<script src={{asset("assets/frontend/js/aos.js")}}></script>

<!-- script js -->
<script src={{asset("assets/frontend/js/script.js")}}></script>

<script>
    AOS.init({
        once: true
    });
    window.addEventListener('load', AOS.refresh);
</script>
</body>


<!-- Mirrored from themes.pixelstrap.net/zomo/landing/frontend/index4.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Aug 2024 03:52:03 GMT -->
</html>
