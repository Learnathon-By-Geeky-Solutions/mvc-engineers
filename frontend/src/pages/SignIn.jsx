import { Link } from "react-router-dom";

const SignIn = () => {
  return (
    <>
      {/* page head section starts */}
      <section className="page-head-section">
          <div className="container page-heading">
              <h1 className="h1 mb-3 text-black font-semibold text-center">Login</h1>
          </div>
      </section>

      {/* signin page start */}
      <section className="login-hero-section section-b-space">
          <div className="container">
              <div className="row">
                  <div className="col-xl-5 col-lg-6 col-md-10 m-auto">
                      <div className="login-data">
                          <form className="auth-form">
                              <h2>Sign in</h2>
                              <h5>
                                  or 
                                  <Link to="/signup"><span className="theme-color">create an a account</span></Link>
                              </h5>
                              <div className="form-input">
                                  <input type="tel" className="form-control" placeholder="Enter your number"/>
                                  <i className="ri-phone-line"></i>
                              </div>
                              <div className="form-input">
                                  <input type="password" className="form-control" placeholder="Enter your password"/>
                                  <i className="ri-lock-password-line"></i>
                              </div>
                              <a href="index-2.html" className="btn theme-btn submit-btn w-100 rounded-2">CONTINUE</a>
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

export default SignIn;