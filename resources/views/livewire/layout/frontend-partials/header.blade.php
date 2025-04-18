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
            <a href="{{route('home')}}">
                <img class="img-fluid logo" src="{{asset('assets/frontend/images/khabo koi.png')}}" alt="logo">
            </a>
            <div class="nav-option order-md-2">
                @hasanyrole('super_admin|restaurant_owner')
                    <a  href="{{route('dashboard')}}" class="btn btn-sm theme-btn w-100 d-block rounded-2">Dashboard</a>
                @else
                    <a wire:navigate.hover href="{{route('register-restaurant')}}" class="btn btn-sm theme-btn w-100 d-block rounded-2">Register Your Restaurant</a>
                @endhasanyrole

{{--                <div class="dropdown-button">--}}
{{--                    <div class="cart-button">--}}
{{--                        <span>5</span>--}}
{{--                        <i class="ri-shopping-cart-line cart-bag"></i>--}}
{{--                    </div>--}}
{{--                    <div class="onhover-box">--}}
{{--                        <ul class="cart-list">--}}
{{--                            <li class="product-box-contain">--}}
{{--                                <div class="drop-cart">--}}
{{--                                    <a href="#!" class="drop-image">--}}
{{--                                        <img src="{{asset('assets/frontend/images/product/vp-3.png')}}" class="blur-up lazyloaded" alt="">--}}
{{--                                    </a>--}}
{{--                                    <div class="drop-contain">--}}
{{--                                        <a href="#!">--}}
{{--                                            <h5>Egg Sandwich</h5>--}}
{{--                                        </a>--}}
{{--                                        <h6><span>1 x </span> $80.58</h6>--}}
{{--                                        <button class="close-button close_button">--}}
{{--                                            <i class="fa-solid fa-xmark"></i>--}}
{{--                                        </button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                            <li class="product-box-contain">--}}
{{--                                <div class="drop-cart">--}}
{{--                                    <a href="#!" class="drop-image">--}}
{{--                                        <img src="{{asset('assets/frontend/images/product/vp-2.png')}}" class="blur-up lazyloaded" alt="">--}}
{{--                                    </a>--}}
{{--                                    <div class="drop-contain">--}}
{{--                                        <a href="#!">--}}
{{--                                            <h5>Grilled Chicken Quesadilla</h5>--}}
{{--                                        </a>--}}
{{--                                        <h6><span>1 x </span> $25.64</h6>--}}
{{--                                        <button class="close-button close_button">--}}
{{--                                            <i class="fa-solid fa-xmark"></i>--}}
{{--                                        </button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                            <li class="product-box-contain">--}}
{{--                                <div class="drop-cart">--}}
{{--                                    <a href="#!" class="drop-image">--}}
{{--                                        <img src="assets/images/product/vp-5.png" class="blur-up lazyloaded" alt="">--}}
{{--                                    </a>--}}
{{--                                    <div class="drop-contain">--}}
{{--                                        <a href="#!">--}}
{{--                                            <h5>Spicy Dumplings</h5>--}}
{{--                                        </a>--}}
{{--                                        <h6><span>1 x </span> $16.28</h6>--}}
{{--                                        <button class="close-button close_button">--}}
{{--                                            <i class="fa-solid fa-xmark"></i>--}}
{{--                                        </button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                            <li class="product-box-contain">--}}
{{--                                <div class="drop-cart">--}}
{{--                                    <a href="#!" class="drop-image">--}}
{{--                                        <img src="assets/images/product/vp-6.png" class="blur-up lazyloaded" alt="">--}}
{{--                                    </a>--}}
{{--                                    <div class="drop-contain">--}}
{{--                                        <a href="#!">--}}
{{--                                            <h5>Chicken Nugget</h5>--}}
{{--                                        </a>--}}
{{--                                        <h6><span>1 x </span> $20.50</h6>--}}
{{--                                        <button class="close-button close_button">--}}
{{--                                            <i class="fa-solid fa-xmark"></i>--}}
{{--                                        </button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                        <div class="price-box">--}}
{{--                            <h5>Total :</h5>--}}
{{--                            <h4 class="theme-color fw-semibold">$155.00</h4>--}}
{{--                        </div>--}}
{{--                        <div class="button-group">--}}
{{--                            <a href="checkout.html" class="btn btn-sm theme-btn w-100 d-block rounded-2">View--}}
{{--                                Cart</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

                @hasanyrole('super_admin|restaurant_owner')
                    <div class="profile-part dropdown-button order-md-2">
                        <i>
                            <img src="{{asset('assets/frontend/images/svg/user.svg')}}" alt="">
                        </i>
                        <div>
                            <h6 class="fw-normal">Hi, {{Auth::user()->name}}</h6>
                            <h5 class="fw-medium">My Account</h5>
                        </div>
                        <div class="onhover-box onhover-sm">
{{--                            <ul class="menu-list">--}}
{{--                                <li>--}}
{{--                                    <a class="dropdown-item" href="profile.html">Profile</a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a class="dropdown-item" href="my-order.html">My orders</a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a class="dropdown-item" href="saved-address.html">Saved Address</a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a class="dropdown-item" href="saved-card.html">Saved cards</a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a class="dropdown-item" href="setting.html">Settings</a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}

                            <livewire:frontend.component.logout/>
                        </div>
                    </div>
                @else
                    <a wire:navigate.hover href="{{route('signin')}}" class="btn btn-sm theme-btn w-100 d-block rounded-2">Sign In</a>
                @endhasanyrole

            </div>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                    <button class="navbar-toggler btn-close" id="offcanvas-close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-center flex-grow-1">
                        <li class="nav-item">
                            <a class="nav-link" wire:navigate.hover href="{{route('home')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" wire:navigate.hover href="{{route('menu')}}">Menu</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" wire:navigate.hover href="{{route('reservation')}}">Reservation</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" wire:navigate.hover href="{{route('contact')}}">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
<!-- Header Section end -->
