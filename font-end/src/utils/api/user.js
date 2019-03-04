import {post} from './post'

export const user = {
    login: (o) => {
        return post('api/user/login', o)
    },
    profile () {
        return post('api/user/profile')
    }
}
