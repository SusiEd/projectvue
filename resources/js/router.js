import VueRouter from 'vue-router'
// Pages
import Home from './pages/Home'
import Register from './pages/Register'
import Login from './pages/Login'
import Dashboard from './pages/user/Dashboard'
import Test from './pages/Test'
import User from './pages/User'
import AdminDashboard from './pages/admin/AdminDashboard'
// Routes
const routes = [
    {
        path: '/',
        name: 'home',
        component: Home,
        meta: {
            auth: undefined
        }
    },

    {
        path: '/register',
        name: 'register',
        component: Register,
        meta: {
            auth: false
        }
    },
    {
        path: '/login',
        name: 'login',
        component: Login,
        meta: {
            auth: false
        }
    },
    // USER ROUTES
    {
        path: '/dashboard',
        name: 'dashboard',
        redirect: '/dashboard/test',
        component: Dashboard,
        meta: {
            auth: true

    }, children:
        [
            {
                path: '/dashboard/test',
                name: 'test',
                component: Test
            },
            {
                path: '/dashboard/user',
                name: 'user',
                component: User
            }
        ]
    },
    // Admin Routes
    {
        path: '/admin',
        name: 'admin.dashboard',
        redirect: '/admin/test',
        component: AdminDashboard,
        meta: {
            auth: true
        }, children:
            [
                {
                    path: '/admin/test',
                    name: 'test',
                    component: Test
                },
                {
                    path: '/admin/user',
                    name: 'user',
                    component: User
                },
            ]
    }

];

const router = new VueRouter({
    history: true,
    mode: 'history',
    routes,
})
export default router
