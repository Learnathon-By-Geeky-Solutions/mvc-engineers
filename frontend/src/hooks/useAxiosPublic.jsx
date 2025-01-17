import axios from "axios";

const axisoPublic = axios.create({
  baseURL: "http://localhost:8000",
});

const useAxiosPublic = () => {
  return axisoPublic;
};

export default useAxiosPublic;