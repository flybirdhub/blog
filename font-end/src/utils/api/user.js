import {post} from './post'

export const user = {
    login: (o) => {
        return post('api/user/login', o)
    },
    profile () {
        return post('api/user/profile')
    },
    checkAuth (o) {
        return post('api/user/checkAuth', o)
    },
    createArticle (o) {
        return post('api/user/createArticle', o)
    }
}
