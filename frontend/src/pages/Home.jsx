import BannerSection from "../components/homePage/BannerSection";
import ServiceSection from "../components/homePage/ServiceSection";
import PopularFoodSection from "../components/homePage/PopularFoodSection";
import AdvertisementSection from "../components/homePage/AdvertisementSection";


const Home = () => {
  return (
    <div>
      <BannerSection />
      <ServiceSection />
      <PopularFoodSection />
      <AdvertisementSection />
    </div>
  );
};

export default Home;
