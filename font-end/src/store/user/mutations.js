import * as types from './mutation-types'

export const mutations = {
    [types.SET_USER_PROFILE](state, o) {
        state.profile = o
    },
    [types.SET_USER_LOGIN](state, b) {
        state.isLogin = b
    }
}
