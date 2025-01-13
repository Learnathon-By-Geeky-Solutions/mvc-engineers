
const BannerSection = () => {
  return (
    <section className="pt-4 home3">
      <div className="custom-container">
          <div className="position-relative">
              <img src="assets/images/home-bg2.png" className="img-fluid bg-home-img" alt=""/>
              <div className="home-content">
                  <div className="row w-100 h-100">
                      <div className="col-sm-6 col-12">
                          <div className="home-left-content">
                              <label>50% off on First delivery</label>
                              <h2>Made with love,<br />Savored with interest.</h2>
                              <p>Browse out top categories here to discover different food cuision.
                              </p>
                              <div className="search-section">
                                  <form className="auth-form search-head" target="_blank">
                                      <div className="form-group">
                                          <div className="form-input mb-0">
                                              <input type="search" className="form-control search" id="inputusername"
                                                  placeholder="Search for Restaurant"/>
                                              <i className="ri-search-line search-icon"></i>
                                          </div>
                                      </div>
                                  </form>
                                  <a className="btn theme-btn mt-0" href="#" role="button">Search</a>
                              </div>
                          </div>
                      </div>
                      <div className="col-sm-6 d-sm-block d-none">
                          <div className="home-right position-relative">
                              <img src="assets/images/mobile.png" className="img-fluid base-phone" alt=""/>
                              <div className="animated-img">
                                  <div className="food1">
                                      <img src="assets/images/food1.png" data-aos="fade-down" data-aos-easing="linear"
                                          data-aos-anchor-placement="top-center" data-aos-duration="1200"
                                          className="img-fluid" alt=""/>
                                  </div>
                                  <div className="food2">
                                      <img src="assets/images/food2.png" data-aos-duration="1200" data-aos="fade-down"
                                          data-aos-anchor-placement="bottom-center" className="img-fluid" alt=""/>
                                  </div>
                                  <div className="food3">
                                      <img src="assets/images/food3.png" data-aos="fade-down" data-aos-easing="linear"
                                          data-aos-anchor-placement="bottom-bottom" data-aos-duration="1000"
                                          className="img-fluid" alt=""/>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </section>
  );
};

export default BannerSection;