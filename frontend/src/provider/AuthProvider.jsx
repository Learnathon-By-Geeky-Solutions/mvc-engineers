import { createContext, useState } from "react";
import useAxiosPublic from "../hooks/useAxiosPublic";


export const AuthContext = createContext(null);

const AuthProvider = ({children}) => {
  const [user, setUser] = useState(null);
  const [loading, setLoading] = useState(true);
  
  // await axios.get("http://localhost:8000/sanctum/csrf-cookie", {
  //   withCredentials: true,
  // });


  // const loginData = await axiosSecure.post("/login", {
  //     email: email,
  //     password: password,
  //     });
  //     console.log(loginData);

  //     if(loginData.status === 200){
  //         const userData = await axiosSecure.get("/api/user");
  //         if(userData.status === 200){
  //           console.log(userData.data);
  //         }
  //     }

  const signin = async (email, password) => {
    setLoading(true);
    await 
  };
      


  const authInfo = {
    user, setUser
  };
  return (
    <>
      <AuthContext.Provider value={authInfo}>
        {children}
      </AuthContext.Provider>
    </>
  );
};

export default AuthProvider;