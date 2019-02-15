import Vue from 'vue'
import App from './App.vue'
// 导入路由表
import {router} from '@/config/router'

Vue.config.productionTip = false

new Vue({
  render: h => h(App),
  router
}).$mount('#app')
