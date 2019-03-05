import {post} from './post'

export const article = {
    info: (o) => {
        return post('api/article/info', o)
    }
}
