import {api} from '@/utils/api'
import {token} from '@/utils/token'
import * as types from './mutation-types'

export const actions = {
    login({dispatch}, payLoad) {
        return new Promise((resolve) => {
            api.user.login(payLoad).then(res => {
                if (res.done) {
                    token.set(res.data)
                    dispatch('getUser').then(() => {
                        resolve()
                    })
                }
            })
        })
    },
    getUser({commit}) {
        return new Promise((resolve) => {
            api.user.profile().then(res => {
                if (res.done) {
                    commit(types.SET_USER_PROFILE, res.data)
                    resolve()
                }
            })
        })
    }
}
