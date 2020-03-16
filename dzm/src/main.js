import Vue from 'vue'
import VueRouter from 'vue-router'



Vue.config.productionTip = false

Vue.use(VueRouter)

import Reception from './components/Reception.vue';


const routes = [
  { path: '/', component: Reception },
]

const router = new VueRouter({
  mode: 'history',
  routes
})

new Vue({

data () {
    return {

    }
  },
  mounted () {

  },

  router,
  render: h => h(Reception)
}).$mount('#app')



