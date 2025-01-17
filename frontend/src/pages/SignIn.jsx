import { useState } from "react";
import { Link } from "react-router-dom";
import axios from "axios";
import useAxiosSecure from "../hooks/useAxiosSecure";

const SignIn = () => {
  const [email, setEmail] = useState("");
  const [password, setPassword] = useState("");
  const axiosSecure = useAxiosSecure();

  const handleSubmit = async (e) => {
    e.preventDefault();
    
    await axios.get("http://localhost:8000/sanctum/csrf-cookie", {
      withCredentials: true,
    });


    const loginData = await axiosSecure.post("/login", {
        email: email,
        password: password,
        });
        console.log(loginData);

  };

    const handleLogout = async () => {
        await axiosSecure.post("/logout");
        console.log("Logged out");
    }

    const showUserData = async () => {
        const userData = await axiosSecure.get("/api/user");
        console.log(userData);
    }

  return (
    <>
      {/* page head section starts */}
      <section className="page-head-section">
        <div className="container page-heading">
          <h1 className="h1 mb-3 text-black font-semibold text-center">
            Login
          </h1>
        </div>
      </section>

      {/* signin page start */}
      <section className="login-hero-section section-b-space">
        <div className="container">
          <div className="row">
            <div className="col-xl-5 col-lg-6 col-md-10 m-auto">
              <div className="login-data">
                <form className="auth-form" onSubmit={handleSubmit}>
                  <h2>Sign in</h2>
                  <h5>
                    or
                    <Link to="/signup">
                      <span className="theme-color">create an a account</span>
                    </Link>
                  </h5>
                  <div className="form-input">
                    <input
                      type="email"
                      className="form-control"
                      placeholder="Enter your email"
                      value={email}
                      onChange={(e) => setEmail(e.target.value)}
                    />
                    <i className="ri-user-3-line"></i>
                  </div>
                  <div className="form-input">
                    <input
                      type="password"
                      className="form-control"
                      placeholder="Enter your password"
                      value={password}
                      onChange={(e) => setPassword(e.target.value)}
                    />
                    <i className="ri-lock-password-line"></i>
                  </div>
                  <button
                    className="btn theme-btn submit-btn w-100 rounded-2"
                    type="submit"
                  >
                    Submit
                  </button>
                  

                  <p className="fw-normal content-color">
                    By creating an account, I accept the
                    <span className="fw-semibold">
                      Terms & Conditions & Privacy Policy
                    </span>
                  </p>
                </form>

              </div>
                <button
                    className="btn theme-btn submit-btn w-100 rounded-2"
                    type="submit"
                    onClick={handleLogout}
                  >
                    log out
                  </button>
                  <button
                    className="btn theme-btn submit-btn w-100 rounded-2"
                    type="submit"
                    onClick={showUserData}
                  >
                    User Data
                  </button>
            </div>
          </div>
        </div>
      </section>
    </>
  );
};

export default SignIn;
