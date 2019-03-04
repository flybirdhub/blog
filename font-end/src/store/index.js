import Vue from 'vue'
import Vuex from 'vuex'
import user from './user'

Vue.use(Vuex)
Vue.use({
  install (Vue) {
    Vue.prototype.$store = new Vuex.Store({
      modules: {
        user
      }
    })
  }
})
