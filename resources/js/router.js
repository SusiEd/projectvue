import VueRouter from 'vue-router'
// Pages
import Home from './pages/Home'
import Register from './pages/Register'
import Login from './pages/Login'
import Dashboard from './pages/user/Dashboard'
import Test from './pages/Test'
import User from './pages/User'
import Todo from './pages/Todo'
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
            //auth: true
            auth: {roles: 1, redirect: {name: 'login'}, forbiddenRedirect: '/403'}

    }, children:
        [
            {
                path: '/dashboard/test',
                name: 'dashboard.test',
                component: Test
            },
            {
                path: '/dashboard/user',
                name: 'dashboard.user',
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
            //auth: true
            auth: {roles: 2, redirect: {name: 'login'}, forbiddenRedirect: '/403'}
        }, children:
            [
                {
                    path: '/admin/test',
                    name: 'admin.test',
                    component: Test
                },
                {
                    path: '/admin/user',
                    name: 'admin.user',
                    component: User
                },
                {
                    path: '/admin/todo',
                    name: 'admin.todo',
                    component: Todo
                },
            ]
    },
    // wildcard
    {
        path: '*',
        redirect:'/'
    }

];

const router = new VueRouter({
    history: true,
    mode: 'history',
    routes,
})
export default router
