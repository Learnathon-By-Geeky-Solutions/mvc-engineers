import { Link } from "react-router-dom";

const ErrorPage = () => {
  return (
    <section className="error-section pt-0">
        <div className="container">
            <div className="banner-content text-center">
                <img className="img-fluid banner-img mx-auto" src="assets/images/404.png" alt="404"/>
                <p>
                    The page you are looking for could not be found. The link to this
                    address may be outdated or we may have moved the since you last
                    bookmarked it.
                </p>
                <Link to="/" className="btn theme-outline d-inline-flex mx-auto">Back To Home</Link>
            </div>
        </div>
    </section>
  );
};

export default ErrorPage;