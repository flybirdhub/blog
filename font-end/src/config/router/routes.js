export const routes = [
    {
        name: 'home',
        path: '/',
        meta: {
            requiresAuth: false
        },
        component: (resolve) => {
            require(['@/pages/home'], resolve)
        }
    }
]
