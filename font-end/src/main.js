import Vue from 'vue'
import App from './App.vue'
// 路由表
import {router} from '@/config/router'
// element-ui
import '@/config/ui-framework/element-ui'
// vue扩展
import '@/utils/vue/mixins'
// 状态管理
import './store'

Vue.config.productionTip = false

new Vue({
  render: h => h(App),
  router
}).$mount('#app')
