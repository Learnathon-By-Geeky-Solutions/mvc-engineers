
const AdvertisementSection = () => {
  return (
    <section className="container app-container pt-0">
    <div className="app-section">
        <div className="container">
            <div className="d-flex align-items-center">
                <div className="app-img">
                    <img className="img-fluid phone" src="assets/images/service-phone.png" alt="app-phone" loading="lazy"/>
                </div>
                <div className="app-content">
                    <h2>Zomo App : Online & Mobile Ordering</h2>
                    <h5>
                        Get the app for free and place takeout orders online whenever you
                        want.
                    </h5>
                    <div className="app-buttons d-flex align-items-center gap-3">
                        <a href="https://www.apple.com/in/app-store/">
                            <img className="img-fluid app-btn" src="assets/images/svg/app-store.svg" alt="app-store"  loading="lazy" />
                        </a>
                        <a href="https://play.google.com/store/apps">
                            <img className="img-fluid app-btn" src="assets/images/svg/google-play.svg"
                                alt="google-play" loading="lazy" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
  );
};

export default AdvertisementSection;