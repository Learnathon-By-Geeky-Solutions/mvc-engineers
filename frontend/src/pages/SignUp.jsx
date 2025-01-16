import { Link } from "react-router-dom";


const SignUp = () => {
  return (
    <>
          {/* <!-- page head section starts --> */}
          <section className="page-head-section">
              <div className="container page-heading">
                  <h1 className="h1 mb-3 text-black font-semibold text-center">Create Account</h1>
              </div>
          </section>

          {/* <!-- signup page start --> */}
          <section className="login-hero-section section-b-space">
              <div className="container">
                  <div className="row">
                      <div className="col-xl-5 col-lg-6 col-md-10 m-auto">
                          <div className="login-data">
                              <form className="auth-form">
                                  <h2>Sign up</h2>
                                  <h5>
                                      or 
                                      <Link to="/signin"><span className="theme-color">login to your account</span></Link>
                                  </h5>
                                  <div className="form-input">
                                      <input type="text" className="form-control" placeholder="Enter your name"/>
                                      <i className="ri-user-3-line"></i>
                                  </div>
                                  <div className="form-input">
                                      <input type="tel" className="form-control" placeholder="Enter your number"/>
                                      <i className="ri-phone-line"></i>
                                  </div>
                                  <div className="form-input">
                                      <input type="password" className="form-control" placeholder="Enter your password"/>
                                      <i className="ri-lock-password-line"></i>
                                  </div>
                                  <a href="otp.html" className="btn theme-btn submit-btn w-100 rounded-2">CONTINUE</a>
                                  <p className="fw-normal content-color">
                                      By creating an account, I accept the
                                      <span className="fw-semibold">
                                          Terms & Conditions & Privacy Policy</span>
                                  </p>
                              </form>
                          </div>
                      </div>
                  </div>
              </div>
          </section>
    </>
  );
};

export default SignUp;