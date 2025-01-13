import { Link } from "react-router-dom";


const Footer = () => {
  return (
    <footer className="footer-section footer-sm">
      <img src="assets/images/home-bg2.png" className="img-fluid footer-img" alt=""/>
      <div className="custom-container">
          <div className="main-footer">
              <div className="row g-3">
                  <div className="col-xl-4 col-lg-12">
                      <div className="footer-logo-part">
                          <img className="img-fluid logo" src="assets/images/svg/logo.svg" alt="logo"/>
                          <p>
                              Welcome to our online order website! Here, you can browse our
                              wide selection of products and place orders from the comfort
                              of your own home.
                          </p>
                          <div className="social-media-part">
                              <ul className="social-icon">
                                  <li>
                                      <a href="https://www.facebook.com/login/">
                                          <i className="ri-facebook-fill icon"></i>
                                      </a>
                                  </li>
                                  <li>
                                      <a href="https://twitter.com/i/flow/login">
                                          <i className="ri-twitter-fill icon"></i>
                                      </a>
                                  </li>
                                  <li>
                                      <a href="https://www.linkedin.com/login/">
                                          <i className="ri-linkedin-fill icon"></i>
                                      </a>
                                  </li>
                                  <li>
                                      <a href="https://www.instagram.com/accounts/login/">
                                          <i className="ri-instagram-fill icon"></i>
                                      </a>
                                  </li>
                                  <li>
                                      <a href="https://www.youtube.com/">
                                          <i className="ri-youtube-fill icon"></i>
                                      </a>
                                  </li>
                              </ul>
                          </div>
                      </div>
                  </div>
                  <div className="col-xl-8">
                      <div className="row g-3">
                          <div className="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                              <div>
                                  <h5 className="footer-title">Company</h5>
                                  <ul className="content">
                                      <li>
                                          <Link to="/about" className="nav-links"> <h6>About us</h6> </Link>
                                      </li>
                                      <li>
                                          <Link to="/contact" className="nav-links"> <h6>Contact us</h6> </Link>
                                      </li>
                                      <li>
                                          <Link to="/offer" className="nav-links"> <h6>Offer</h6> </Link>
                                      </li>
                                      <li>
                                          <Link to="/faq" className="nav-links"> <h6>FAQs</h6> </Link>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                          <div className="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                              <div>
                                  <h5 className="footer-title">Account</h5>
                                  <ul className="content">
                                      <li>
                                          <Link to="/my-order" className="nav-links"> <h6>My orders</h6> </Link>
                                      </li>
                                      <li>
                                          <Link to="/wishlist" className="nav-links"> <h6>Wishlist</h6> </Link>
                                      </li>
                                      <li>
                                          <Link to="/checkout" className="nav-links"> <h6>Shopping Cart</h6> </Link>
                                      </li>
                                      <li>
                                          <Link to="/saved-address" className="nav-links"> <h6>Saved Address</h6> </Link>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                          <div className="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                              <div>
                                  <h5 className="footer-title">Useful links</h5>
                                  <ul className="content">
                                      <li>
                                          <Link to="/blog" className="nav-links"> <h6>Blogs</h6> </Link>
                                      </li>
                                      <li>
                                          <Link to="/login" className="nav-links"> <h6>Login</h6> </Link>
                                      </li>
                                      <li>
                                          <Link to="/register" className="nav-links"> <h6>Register</h6> </Link>
                                      </li>
                                      <li>
                                          <Link to="/profile" className="nav-links"> <h6>Profile</h6> </Link>
                                      </li>
                                      <li>
                                          <Link to="/setting" className="nav-links"> <h6>Settings</h6> </Link>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                          <div className="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                              <div>
                                  <h5 className="footer-title">Top Brands</h5>
                                  <ul className="content">
                                      <li>
                                          <Link to="/menu-listing" className="nav-links"> <h6>PizzaBoy</h6> </Link>
                                      </li>
                                      <li>
                                          <Link to="/menu-listing" className="nav-links"> <h6>Saladish</h6> </Link>
                                      </li>
                                      <li>
                                          <Link to="/menu-listing" className="nav-links"> <h6>IcePops</h6> </Link>
                                      </li>
                                      <li>
                                          <Link to="/menu-listing" className="nav-links"> <h6>Maxican Hoy</h6> </Link>
                                      </li>
                                      <li>
                                          <Link to="/menu-listing" className="nav-links"> <h6>La Foodie</h6> </Link>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div className="bottom-footer-part">
              <div className="d-flex align-items-center justify-content-between flex-wrap gap-2">
                  <h6>@ Copyright 2024 ZOMO. All rights Reserved.</h6>
                  <img className="img-fluid cards" src="assets/images/icons/footer-card.png" alt="card"/>
              </div>
          </div>
      </div>
    </footer>
  );
};

export default Footer;