import {createRouter, createWebHistory} from "vue-router";

const router = createRouter({
    history: createWebHistory('/app'),
    routes: [
        {
            path: '/home',
            name: 'home',
            component: () => import('../pages/Home.vue'),
            meta: {
                layout: 'auth-layout'
            }
        },
        {
            path: '/sign-up',
            name: 'auth.sign-up',
            component: () => import('../pages/auth/SignUp.vue'),
        },
        {
            path: '/sign-in',
            name: 'auth.sign-in',
            component: () => import('../pages/auth/SignIn.vue'),
        }
    ]
})

export default router
