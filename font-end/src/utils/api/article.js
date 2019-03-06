import {post} from './post'

export const article = {
    info: (o) => {
        return post('api/article/info', o)
    },
    getHotArticles: (o) => {
        return post('api/article/getHot', o)
    }
}
