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
{{-- @include('frontend.partials.home-page.loader') --}}

<!-- Header section start -->
@include('frontend.partials.home-page.header')
<!-- Header Section end -->

<!-- home section start -->
@include('frontend.partials.home-page.bannerSection')
<!-- home section end -->

<!-- service section start -->
@include('frontend.partials.home-page.serviceSection')
<!-- service section end -->


<!-- popular restaurant section starts -->
@include('frontend.partials.home-page.popularRestaurantSection')
<!-- popular restaurant section end -->

<!-- app section starts -->
@include('frontend.partials.home-page.advertisementSection')
<!-- app section end -->

<!-- footer section starts -->
@include('frontend.partials.home-page.footer')
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
{{-- <div class="theme-btns">
    <button type="button" class="btntheme mode-change-button">
        <i id="themeIcon" class="ri-moon-line icon mode-icon"></i>
        <span class="text-value">Dark</span>
    </button>
    <button type="button" id="rtl-btn" class="btntheme rtlBtnEl">
        <i class="ri-repeat-line icon"></i>
        <span class="text-value">RTL</span>
    </button>
</div> --}}
<!-- theme btn end -->

<!-- tap to top start -->
{{-- <button class="scroll scroll-to-top">
    <i class="ri-arrow-up-s-line arrow"></i>
</button> --}}
<!-- tap to top end -->

<!-- location offcanvas start -->
{{-- <div class="modal fade location-modal" id="location" data-bs-backdrop="static" data-bs-keyboard="false"
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
</div> --}}
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
<script src={{asset("assets/frontend/js/swiper-bundle.min.js")}}></script>
<script src={{asset("assets/frontend/js/custom-swiper.js")}}></script>

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
