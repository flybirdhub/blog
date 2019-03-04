import Vue from 'vue'
import 'element-ui/lib/theme-chalk/index.css';
import {
    Carousel,
    CarouselItem,
    Message
} from 'element-ui'

Vue.component(Carousel.name, Carousel)
Vue.component(CarouselItem.name, CarouselItem)

Vue.prototype.$message = Message
