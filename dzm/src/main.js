import Vue from 'vue'
import VueRouter from 'vue-router'


Vue.config.productionTip = false

Vue.use(VueRouter)

import Reception from './components/Reception.vue';
import vuetify from './plugins/vuetify';


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
  vuetify,
  render: h => h(Reception)
}).$mount('#app')



