
const ServiceSection = () => {
  return (
    <section className="service-section section-b-space">
      <div className="container">
          <div className="home-features-list row gy-xl-0 gy-md-4 gy-3 row-cols-xl-4 row-cols-lg-3 row-cols-sm-2">
              <div>
                  <div className="home-features-box">
                      <img className="img-fluid icon" src="assets/images/svg/routing.svg" alt="routing"/>
                      <div className="home-features-content">
                          <h5>Wide Map</h5>
                          <h6>Wide Range of Map, Order from anywhere anytime</h6>
                      </div>
                   </div>
              </div>
              <div>
                  <div className="home-features-box">
                      <img className="img-fluid icon" src="assets/images/svg/3d-rotate.svg" alt="3d-rotate"/>
                      <div className="home-features-content">
                          <h5>Easiest Order</h5>
                          <h6>Easy and hussle free order online process</h6>
                      </div>
                  </div>
              </div>
              <div>
                  <div className="home-features-box">
                      <img className="img-fluid icon" src="assets/images/svg/truck.svg" alt="truck"/>
                      <div className="home-features-content">
                          <h5>Most Delivery</h5>
                          <h6>we ensure your food is delivered swiftly</h6>
                      </div>
                  </div>
              </div>
              <div>
                  <div className="home-features-box">
                      <img className="img-fluid icon" src="assets/images/svg/credit-card.svg" alt="truck"/>
                      <div className="home-features-content">
                          <h5>Various Payment</h5>
                          <h6>Various payment options to make order seamless</h6>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </section>
  );
};

export default ServiceSection;