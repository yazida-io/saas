import {createRouter, createWebHistory} from "vue-router";
import auth from "../middleware/auth";
import guest from "../middleware/guest";

const router = createRouter({
    history: createWebHistory('/app'),
    routes: [
        {
            path: '/home',
            name: 'home',
            component: () => import('../pages/Home.vue'),
            meta: {
                layout: 'auth-layout',
                middleware: [auth]
            }
        },
        {
            path: '/sign-up',
            name: 'auth.sign-up',
            component: () => import('../pages/auth/SignUp.vue'),
            meta: {
                middleware: [guest]
            }
        },
        {
            path: '/sign-in',
            name: 'auth.sign-in',
            component: () => import('../pages/auth/SignIn.vue'),
            meta: {
                middleware: [guest]
            }
        }
    ]
})

const middlewarePipeline = (context, middleware, index) => {
    const nextMiddleware = middleware[index] || null

    if (!nextMiddleware) {
        return context.next
    }

    return (...parameters) => {
        context.next(...parameters)
        const nextPipeline = middlewarePipeline(context, middleware, index + 1)
        nextMiddleware({ ...context, next: nextPipeline })
    }
}

router.beforeEach((to, from, next) => {
    if (to.matched.some((record) => record.meta.middleware)) {
        const middleware = to.matched
            .filter((record) => record.meta.middleware)
            .map((record) => record.meta.middleware)
            .flatMap((middleware) => (Array.isArray(middleware) ? middleware : [middleware]))

        const context = {
            to,
            from,
            next,
        }

        return middleware[0]({
            ...context,
            next: middlewarePipeline(context, middleware, 1),
        })
    }

    return next()
})

export default router
