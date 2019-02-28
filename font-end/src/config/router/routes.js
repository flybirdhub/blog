export const routes = [
    {
        name: 'login',
        path: '/login',
        meta: {
            requiresAuth: false
        },
        component: (resolve) => {
            require(['@/pages/login'], resolve)
        }
    },
    {
        name: 'home',
        path: '/',
        meta: {
            requiresAuth: false
        },
        component: (resolve) => {
            require(['@/pages/home'], resolve)
        }
    },
    {
        name: 'article',
        path: '/article/:id',
        meta: {
            requiresAuth: false
        },
        component: (resolve) => {
            require(['@/pages/article'], resolve)
        }
    },
    {
        name: 'author',
        path: '/author/:id',
        meta: {
            requiresAuth: false
        },
        component: (resolve) => {
            require(['@/pages/author'], resolve)
        }
    },
    {
        name: 'editor',
        path: '/editor',
        meta: {
            requiresAuth: true
        },
        component: (resolve) => {
            require(['@/pages/editor'], resolve)
        }
    },
    {
        name: 'articles',
        path: '/articles',
        meta: {
            requiresAuth: true
        },
        component: (resolve) => {
            require(['@/pages/articles'], resolve)
        }
    }
]
