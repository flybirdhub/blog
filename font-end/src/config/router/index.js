import Vue from 'vue'
import VueRouter from 'vue-router'
import {routes} from './routes'
import {interceptor} from './interceptor'

Vue.use(VueRouter)

export const router = new VueRouter({
    mode: 'history',
    routes
})
interceptor(router)

