import VueRouter from 'vue-router'
// Pages
import Home from './pages/Home'
import SinglePost from './pages/SinglePost'
import Blog from './pages/PostsPage'
import Register from './pages/Register'
import Login from './pages/Login'
import Dashboard from './pages/user/Dashboard'
import MyPosts from './pages/user/MyPosts'
import EditMyPost from './pages/user/EditMyPost'
import AddMyPost from './pages/user/AddMyPost'
import AllUsers from './pages/admin/AllUsers'
import AdminDashboard from './pages/admin/AdminDashboard'
import AllPosts from './pages/admin/AllPosts'
import AddPost from './pages/admin/AddPost'
import EditPost from './pages/admin/EditPost'

// Routes
const routes = [
    {
        path: '/',
        name: 'home',
        component: Home,
        meta: {
            auth: undefined  // everybody is allowed to see
        }
    },
    {
        path: '/blog',
        name: 'blog',
        component: Blog,
        meta: {
            auth: undefined // everybody is allowed to see
        }
    },
    {
        path: '/post/:id',
        name: 'post',
        component: SinglePost,
        meta: {
            auth: undefined // everybody is allowed to see
        }
    },
    {
        path: '/register',
        name: 'register',
        component: Register,
        meta: {
            auth: false // only see, if you are not logged
        }
    },
    {
        path: '/login',
        name: 'login',
        component: Login,
        meta: {
            auth: false // only see, if you are not logged
        }
    },
    // USER ROUTES
    {
        path: '/dashboard',
        name: 'dashboard',
        component: Dashboard,
        meta: {
            //auth: true
            auth: {roles: 1, redirect: {name: 'login'}, forbiddenRedirect: '/403'}

    }, children:
        [
            {
                path: '/dashboard',
                name: 'dashboard',
                component: Dashboard
            },
            {
                path: '/dashboard/my-posts',
                name: 'dashboard.my-posts',
                component: MyPosts
            },
            {
                path: '/dashboard/edit/:id',
                name: 'dashboard.edit-post',
                component: EditMyPost
            },
            {
                path: '/dashboard/add-post',
                name: 'dashboard.add-post',
                component: AddMyPost
            }

        ]
    },
    // Admin Routes
    {
        path: '/admin',
        name: 'admin.dashboard',
        component: AdminDashboard,
        meta: {
            //auth: true
            auth: {roles: 2, redirect: {name: 'login'}, forbiddenRedirect: '/403'}
        }, children:
            [

                {
                    path: '/admin/all-users',
                    name: 'admin.all-users',
                    component: AllUsers
                },
                {
                    path: '/admin/all-posts',
                    name: 'admin.all-posts',
                    component: AllPosts
                },
                {
                    path: '/admin/add-post',
                    name: 'admin.add-post',
                    component: AddPost
                },
                {
                    path: '/admin/edit/:id',
                    name: 'admin.edit-post',
                    component: EditPost
                }

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
