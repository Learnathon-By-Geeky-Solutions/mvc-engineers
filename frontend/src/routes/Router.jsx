import {createBrowserRouter} from "react-router-dom";
import Home from "../pages/Home.jsx";
import Main from "../layout/MainLayout.jsx";
import ErrorPage from "../pages/ErrorPage.jsx";
import Contact from "../pages/Contact.jsx";
import FAQ from "../pages/FAQ.jsx";
import ComingSoon from "../pages/ComingSoon.jsx";
import SignIn from "../pages/signin.jsx";
import SignUp from "../pages/SignUp.jsx";


const router = createBrowserRouter([
    {
        path : '/',
        element : <Main />,
        errorElement: <ErrorPage />,
        children : [
            {
                path : '/',
                element : <Home />
            },
            {
                path : '/signin',
                element : <SignIn />
            },
            {
                path : '/signup',
                element : <SignUp />
            },
            {
                path : '/about',
                element : <ComingSoon />
            },
            {
                path : '/contact',
                element : <Contact />
            },
            {
                path : '/faq',
                element : <FAQ />
            }
        ]
    }
])

export default router
