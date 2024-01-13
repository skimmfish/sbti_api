import {createBrowserRouter} from "react-router-dom"
import Login from './views/Login.jsx';
import Signup from './views/Signup.jsx';
import Users from './views/Users.jsx';
import Notfound from './views/Notfound.jsx';


const router = createBrowserRouter([
    {
        path: '/login',
        element: <Login/>
    },
    {
        path: '/signup',
        element: <Signup/>
    },
    {
        path: '/users',
        element: <Users/>
    },
    {
        path: '*',
        element: <Notfound/>
    }
])

export default router

