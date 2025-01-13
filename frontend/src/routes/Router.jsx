import {createBrowserRouter} from "react-router-dom";
import Home from "../pages/Home.jsx";
import Main from "../layout/MainLayout.jsx";
import ErrorPage from "../pages/ErrorPage.jsx";


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
        ]
    }
])

export default router
