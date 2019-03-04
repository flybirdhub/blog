import axios from 'axios'
import {token} from '@/utils/token'
import {BASE_API_URL} from '@/config/var/api'

axios.defaults.baseURL = BASE_API_URL
axios.interceptors.request.use(config => {
    if (token.get()) {
        config.headers['X-Access-Token'] = token.get()
    }
    return config
}, error => {
    // Do something with request error
    return Promise.reject(error)
});

axios.interceptors.response.use(response => {
    // Do something with response data
    return response
}, error => {
    // Do something with response error
    return Promise.reject(error);
})

export const post = (s, o = {}) => {
    return new Promise((resolve) => {
        axios.post(s, o)
            .then(res => {
                resolve(res.data)
            })
    })
}
