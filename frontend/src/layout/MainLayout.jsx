import { Outlet } from "react-router-dom";
import Navbar from "../components/shared/Navbar";



const Main = () => {
  return (
    <>
      <Navbar />
      <Outlet />
    </>
  );
};

export default Main;