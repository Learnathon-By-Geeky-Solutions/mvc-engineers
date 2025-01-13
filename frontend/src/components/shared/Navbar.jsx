
import { useState } from 'react';
import { Link } from 'react-router-dom';

const Navbar = () => {

    const [cartItems] = useState([
    {
        image: "assets/images/product/vp-3.png",
        name: "Egg Sandwich",
        price: 80.58,
        quantity: 1,
    },
    {
        image: "assets/images/product/vp-2.png",
        name: "Grilled Chicken Quesadilla",
        price: 25.64,
        quantity: 1,
    },
    {
        image: "assets/images/product/vp-4.png",
        name: "Spicy Ahi Roll",
        price: 12.0,
        quantity: 1,
    },
    {
        image: "assets/images/product/vp-5.png",
        name: "Spicy Dumplings",
        price: 16.28,
        quantity: 1,
    },
    {
        image: "assets/images/product/vp-6.png",
        name: "Chicken Nugget",
        price: 20.5,
        quantity: 1,
    },
    ]);
    const totalPrice = cartItems.reduce(
    (acc, item) => acc + item.price * item.quantity,
    0
    );
      const userName = "Mark Jecno";
      const profileImage = "assets/images/icons/p5.png";

    return (
        <>      
            <header className="header-light">
                <div className="custom-container">
                    <nav className="navbar navbar-expand-lg p-0">
                        <button className="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#offcanvasNavbar">
                            <span className="navbar-toggler-icon">
                                <i className="ri-menu-line"></i>
                            </span>
                        </button>
                        <Link to="/">
                            <img className="img-fluid logo" src="assets/images/svg/logo2.svg" alt="logo"/>
                        </Link> 
                        <a target="_blank" href="https://www.google.com/maps/@23.6016511,89.8515652,19z?entry=ttu&g_ep=EgoyMDI1MDEwOC4wIKXMDSoASAFQAw%3D%3D" 
                            className="btn btn-sm theme-btn location-btn mt-0 ms-3 d-flex align-content-center gap-1">
                            <i className="ri-map-pin-line"></i> Location
                        </a>


                        {/* right corner */}
                        <div className="nav-option order-md-2">
                        <div className="dropdown-button">
                        <div className="cart-button">
                            <span>{cartItems.length}</span>
                            <i className="ri-shopping-cart-line cart-bag"></i>
                        </div>
                        <div className="onhover-box">
                            <ul className="cart-list">
                            {cartItems.map((item, index) => (
                                <li key={index} className="product-box-contain">
                                <div className="drop-cart">
                                    <a href="#!" className="drop-image">
                                    <img src={item.image} className="blur-up lazyloaded" alt="" />
                                    </a>
                                    <div className="drop-contain">
                                    <a href="#!">
                                        <h5>{item.name}</h5>
                                    </a>
                                    <h6>
                                        <span>{item.quantity} x </span>${item.price}
                                    </h6>
                                    <button className="close-button close_button">
                                        <i className="fa-solid fa-xmark"></i>
                                    </button>
                                    </div>
                                </div>
                                </li>
                            ))}
                            </ul>
                            <div className="price-box">
                            <h5>Total :</h5>
                            <h4 className="theme-color fw-semibold">${totalPrice}</h4>
                            </div>
                            <div className="button-group">
                            <a
                                href="checkout.html"
                                className="btn btn-sm theme-btn w-100 d-block rounded-2"
                            >
                                View Cart
                            </a>
                            </div>
                        </div>
                        </div>

                        <div className="profile-part dropdown-button order-md-2">
                            <img className="img-fluid profile-pic" src={profileImage} alt="profile" />
                            <div>
                                <h6 className="fw-normal">Hi, {userName}</h6>
                                <h5 className="fw-medium">My Account</h5>
                            </div>
                            <div className="onhover-box onhover-sm">
                                <ul className="menu-list">
                                <li>
                                    <a className="dropdown-item" href="profile.html">
                                    Profile
                                    </a>
                                </li>
                                <li>
                                    <a className="dropdown-item" href="my-order.html">
                                    My orders
                                    </a>
                                </li>
                                <li>
                                    <a className="dropdown-item" href="saved-address.html">
                                    Saved Address
                                    </a>
                                </li>
                                <li>
                                    <a className="dropdown-item" href="saved-card.html">
                                    Saved cards
                                    </a>
                                </li>
                                <li>
                                    <a className="dropdown-item" href="setting.html">
                                    Settings
                                    </a>
                                </li>
                                </ul>
                                <div className="bottom-btn">
                                <a href="signin.html" className="theme-color fw-medium d-flex">
                                    <i className="ri-login-box-line me-2"></i>Logout
                                </a>
                                </div>
                            </div>
                            </div>
                        </div>

                        {/* middle content */}
                        <div className="offcanvas offcanvas-end" id="offcanvasNavbar">
                            <div className="offcanvas-header">
                                <h5 className="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                                <button className="navbar-toggler btn-close" id="offcanvas-close"></button>
                            </div>
                            <div className="offcanvas-body">
                                <ul className="navbar-nav justify-content-center flex-grow-1">
                                    <li className="nav-item dropdown mega-menu">
                                        <Link to="/" className="nav-link " id="accountDropdown" role="button" aria-expanded="false">Home</Link>
                                    </li>
                                    <li className="nav-item">
                                        <div className="nav-link dropdown-toggle" id="orderMenu" role="button" data-bs-toggle="dropdown"  aria-expanded="false">Order</div>
                                        {/* <a className="nav-link dropdown-toggle" href="#!" id="orderMenu" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">Order</a> */}
                                        <ul className="dropdown-menu mt-0 border-0" aria-labelledby="orderMenu">
                                            <li>
                                                <Link to="/menu-listing" className="dropdown-item">Menu listing</Link>
                                            </li>
                                            <li>
                                                <Link to="/menu-grid" className="dropdown-item">Menu grid</Link>
                                            </li>
                                            <li>
                                                <Link to="/address" className="dropdown-item">Address</Link>
                                            </li>
                                            <li>
                                                <Link to="/checkout" className="dropdown-item">Checkout</Link>
                                            </li>
                                            <li>
                                                <Link to="/confirm-order" className="dropdown-item">Confirm order</Link>
                                            </li>
                                            <li>
                                                <Link to="/offer" className="dropdown-item">Offer</Link>
                                            </li>
                                            <li>
                                                <Link to="/order-tracking" className="dropdown-item">Order tracking</Link>
                                            </li>
                                            <li>
                                                <Link to="/payment" className="dropdown-item">Payment</Link>
                                            </li>
                                            <li>
                                                <Link to="/restaurant-listing" className="dropdown-item">Restaurant listing</Link>
                                            </li>
                                        </ul>
                                    </li>
                                    <li className="nav-item">
                                        <div className="nav-link dropdown-toggle" id="blogMenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">Blog</div>
                                        <ul className="dropdown-menu mt-0 border-0" aria-labelledby="blogMenu">
                                            <li>
                                                <Link to="/blog-grid-left-sidebar" className="dropdown-item">Grid Left Sidebar</Link>
                                            </li>
                                            <li>
                                                <Link to="/blog-grid-right-sidebar" className="dropdown-item">Grid Right Sidebar</Link>
                                            </li>
                                            <li>
                                                <Link to="/blog-list" className="dropdown-item">Blog Listing</Link>
                                            </li>
                                            <li>
                                                <Link to="/blog-details" className="dropdown-item">Blog Details</Link>
                                            </li>
                                        </ul>
                                    </li>
                                    <li className="nav-item dropdown">
                                        {/* <a className="nav-link dropdown-toggle" href="#!" id="pagesMenu" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">Pages</a> */}
                                        <div className="nav-link dropdown-toggle" id="pagesMenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Pages 
                                        </div>
                                        <ul className="dropdown-menu mt-0 border-0" aria-labelledby="pagesMenu">
                                            <li><a className="dropdown-item" href="404.html">404</a></li>
                                            <li>
                                                <a className="dropdown-item" href="coming-soon.html">Coming soon</a>
                                            </li>
                                            <li>
                                                <a className="dropdown-item" href="contact.html">Contact</a>
                                            </li>
                                            <li>
                                                <a className="dropdown-item" href="empty-cart.html">Empty Cart</a>
                                            </li>
                                            <li><a className="dropdown-item" href="faq.html">FAQs</a></li>
                                            <li><a className="dropdown-item" href="otp.html">OTP</a></li>
                                            <li>
                                                <a className="dropdown-item" href="signin.html">Sign in</a>
                                            </li>
                                            <li>
                                                <a className="dropdown-item" href="signup.html">Sign up</a>
                                            </li>
                                            <li>
                                                <a className="dropdown-item" href="testimonial.html">Testimonial</a>
                                            </li>
                                            <li>
                                                <a className="dropdown-item" href="wishlist.html">Wishlist</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li className="nav-item">
                                        <Link to="/contact" className="nav-link">Contact</Link>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </header>
        </>
    );
};

export default Navbar;
