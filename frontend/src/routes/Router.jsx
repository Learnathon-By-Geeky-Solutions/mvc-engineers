import {createBrowserRouter} from "react-router-dom";
import Home from "../pages/Home.jsx";
import Main from "../layout/MainLayout.jsx";


const router = createBrowserRouter([
    {
        path : '/',
        element : <Main />,
        children : [
            {
                path : '/',
                element : <Home />
            },
        ]
    }
])

export default router
