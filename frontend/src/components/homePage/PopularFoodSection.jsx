import PropTypes from 'prop-types';

const restaurants = [
  {
    image: "assets/images/product/vp-1.png",
    name: "Poultry Palace",
    rating: 3.9,
    items: "Chicken quesadilla, avocado...",
    place: "New Jersey",
    distance: 3.2,
    time: 25,
    offer: { discount: "upto $2", label: "50% OFF" },
  },
  {
    image: "assets/images/product/vp-2.png",
    name: "Ribeye Junction",
    rating: 3.2,
    items: "Chicken quesadilla, avocado...",
    place: "California",
    distance: 1,
    time: 10,
    offer: { discount: "upto $2", label: "50% OFF" },
  },
  {
    image: "assets/images/product/vp-3.png",
    name: "The Grill Master's Cafe",
    rating: 4.3,
    items: "Bread, Eggs, Butter, Fries...",
    place: "New York",
    distance: 5,
    time: 40,
  },
  {
    image: "assets/images/product/vp-4.png",
    name: "Cozy Cuppa Cafe",
    rating: 3.6,
    items: "cheesecake, waffles, Cakes...",
    place: "Dallas",
    distance: 4,
    time: 30,
  },
  {
    image: "assets/images/product/vp-5.png",
    name: "Mocha Magic Cafe",
    rating: 3.2,
    items: "Chinese, Momos, Dumplings...",
    place: "Seattle",
    distance: 1,
    time: 8,
  },
  {
    image: "assets/images/product/vp-6.png",
    name: "Latte Lounge",
    rating: 3.6,
    items: "Chicken fingers, Chicken goujons...",
    place: "Atlanta", distance: 3, time: 25, offer: { discount: "upto $2", label: "50% OFF" },
  },
  {
    image: "assets/images/product/vp-7.png",
    name: "The Burger Barn",
    rating: 3.8,
    items: "Burger, Garlic Bread, Sandwich...",
    place: "Chicago",
    distance: 2.4,
    time: 20,
    offer: { discount: "upto $2", label: "50% OFF" },
  },
  {
    image: "assets/images/product/vp-8.png",
    name: "Wing Master",
    rating: 3.2,
    items: "Chicken quesadilla, avocado...",
    place: "New York",
    distance: 1.8,
    time: 12,
    offer: { discount: "upto $2", label: "50% OFF" },
  },
];

const RestaurantCard = ({ image, name, rating, items, place, distance, time, offer }) => (
  
  <div className="col-xl-3 col-lg-4 col-md-6">
    {
      console.log({image, name, rating, items, place, distance, time, offer})
    }
    <div className="vertical-product-box product-style-3">
      <div className="vertical-product-box-img">
        <div>
          {image && <img className="product-img-top w-100 " src={image} alt={name}  /> }
        </div>
        {offer && (
          <div className="offers">
            <img src="assets/images/shape.png" alt="shape" className="img-fluid" loading="lazy" />
            <h6>{offer.discount}</h6>
            <div className="d-flex align-items-center justify-content-end">
              <h4>{offer.label}</h4>
            </div>
          </div>
        )}
      </div>
      <div className="vertical-product-body">
        <div className="d-flex align-items-center justify-content-between">
          <a href="menu-listing.html">
            <h4 className="vertical-product-title">{name}</h4>
          </a>
          <h6 className="rating-star">
            <span className="star"><i className="ri-star-s-fill"></i></span>{rating}
          </h6>
        </div>
        <h5 className="product-items">{items}</h5>
        <div className="location-distance d-flex align-items-center justify-content-between pt-sm-3 pt-2">
          <h5 className="place">{place}</h5>
          <ul className="distance">
            <li><i className="ri-map-pin-fill icon"></i> {distance} km</li>
            <li><i className="ri-time-fill icon"></i> {time} min</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
);

const PopularFoodSection = () => {
  return (
    <>
    {/* <!-- title start --> */}
    <div className="container">
        <div className="title-center">
            <h2>Tasty food to your destination <span> in 20 mins.</span></h2>
        </div>
    </div>

    {/* <!-- popular restaurant section starts --> */}
    <section className="popular-restaurant section-b-space ratio3_2 overflow-hidden">
        <div className="container">
            <div className="row g-md-4 g-3">
                {restaurants.map((restaurant, index) => (
                  <RestaurantCard key={index} {...restaurant} />
                ))}
            </div>
        </div>
    </section>

    </>
  )
}

RestaurantCard.propTypes = {
  image: PropTypes.string.isRequired,
  name: PropTypes.string.isRequired,
  rating: PropTypes.number.isRequired,
  items: PropTypes.string.isRequired,
  place: PropTypes.string.isRequired,
  distance: PropTypes.number.isRequired,
  time: PropTypes.number.isRequired,
  offer: PropTypes.shape({
    discount: PropTypes.string,
    label: PropTypes.string,
  }),
};


export default PopularFoodSection;