import {api} from '@/utils/api'
import {token} from '@/utils/token'

const AUTH_ROUTES = ['/editor', '/articles']
const LOGIN_INACCESSIBLE_ROUTES = ['/login', '/register']

export const interceptor = router => {
    router.beforeEach((to, from, next) => {
        if (to.matched.some(record => record.meta.requiresAuth) && !token.get()) {
            next({
                path: '/login',
                query: {redirect: to.fullPath}
            })
            return
        }
        if (LOGIN_INACCESSIBLE_ROUTES.includes(to.path) && token.get()) {
            next('/')
            return
        }
        if (AUTH_ROUTES.includes(to.path)) {
            api.user.checkAuth({rule: to.name}).then(res => {
                if (!res.done) {
                    next('/')
                    return
                }
                next()
            })
            return
        }
        next()
    })
}
