import axios from "axios";
import Cookies from "js-cookie";

const useAxiosSecure = () => {
  const xsrfToken = Cookies.get("XSRF-TOKEN");

  const axiosSecure = axios.create({
    baseURL: "http://localhost:8000",
    withCredentials: true,
    headers: {
      "Accept": "application/json",
      "X-XSRF-TOKEN": xsrfToken,
    },
  });

  return axiosSecure;
};

export default useAxiosSecure;