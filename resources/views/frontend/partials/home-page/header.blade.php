<header class="header-light">
  <div class="custom-container">
      <nav class="navbar navbar-expand-lg p-0">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                  data-bs-target="#offcanvasNavbar">
                  <span class="navbar-toggler-icon">
                      <i class="ri-menu-line"></i>
                  </span>
          </button>
          <a href="/" wire:navigate>
              <img class="img-fluid logo" src="{{ asset('assets/frontend/images/svg/logo2.svg') }}" alt="logo">
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
                                      <img src="{{ asset ('assets/frontend/images/product/vp-3.png') }}" class="blur-up lazyloaded" alt="">
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
                                      <img src="{{ asset ('assets/frontend/images/product/vp-2.png') }}" class="blur-up lazyloaded" alt="">
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
                                      <img src="{{ asset ('assets/frontend/images/product/vp-4.png') }}" class="blur-up lazyloaded" alt="">
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
                                      <img src="{{ asset ('assets/frontend/images/product/vp-5.png') }}" class="blur-up lazyloaded" alt="">
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
                                      <img src="{{ asset ('assets/frontend/images/product/vp-6.png') }}" class="blur-up lazyloaded" alt="">
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
                  <img class="img-fluid profile-pic" src="{{ asset ('assets/frontend/images/icons/p5.png') }}" alt="profile">
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
                      <li class="nav-item">
                          <a class="nav-link" href="/" role="button" wire:navigate 
                          >Home</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="/menu" role="button" wire:navigate 
                          >Menu</a>
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