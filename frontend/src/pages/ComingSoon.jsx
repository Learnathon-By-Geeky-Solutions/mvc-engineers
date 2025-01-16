
const ComingSoon = () => {
  return (
    <section className="fog">
        <div className="absolute-bg"></div>
        <div className="fog-container">
            <div className="fog-img fog-img-first"></div>
            <div className="fog-img fog-img-second"></div>
        </div>
        <div className="coming-soon">
            <div className="coming-soon-text">
                <h2>Stay Tuned ! we’ll be live soon...</h2>
                <p>
                    We&apos;ve had a great team working on something amazing, and we&apos;re
                    almost ready to present it to the public. improved, comparable
                    content
                </p>
                <div className="notify-section">
                    <form method="post" id="notify-form">
                        <div className="custom-group">
                            <input type="email" name="email" className="form-control" placeholder="Enter your email"
                                required=""/>
                            <button className="btn primary-btn theme-btn">notify me</button>
                        </div>
                        <h5 className="success-msg text-white mb-0 mt-3 d-none">
                            Thank You!
                        </h5>
                    </form>
                </div>
                <div className="coming-soon-social">
                    <a className="social-link" href="https://www.facebook.com/" target="_blank">
                        <i className="ri-facebook-fill"></i>
                    </a>
                    <a className="social-link" href="https://www.instagram.com/" target="_blank"><i
                            className="ri-instagram-line"></i></a>
                    <a className="social-link" href="https://www.instagram.com/" target="_blank"><i
                            className="ri-twitter-line"></i></a>
                    <a className="social-link" href="https://www.instagram.com/" target="_blank"><i
                            className="ri-pinterest-line"></i></a>
                </div>
            </div>
        </div>
        
        <div className="copyright-box">
            <p>@ Copyright 2024 ZOMO. All rights Reserved.</p>
        </div>
    </section>
  );
};

export default ComingSoon;