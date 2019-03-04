import Vue from 'vue'
import VueRouter from 'vue-router'
import {routes} from './routes'
import {token} from '@/utils/token'

const LOGINED_INACCESSIBLE_ROUTES = ['/login', '/register']
Vue.use(VueRouter)

export const router = new VueRouter({
    mode: 'history',
    routes
})

router.beforeEach((to, from, next) => {
    if (to.matched.some(record => record.meta.requiresAuth)) {
        if (!token.get()) {
            next({
                path: '/login',
                query: {redirect: to.fullPath}
            })
        } else {
            next()
        }
    } else {
        if (token.get() && LOGINED_INACCESSIBLE_ROUTES.includes(to.path)) {
            next('/')
        } else {
            next()
        }
    }
})

