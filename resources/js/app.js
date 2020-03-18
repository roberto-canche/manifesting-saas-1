import Vue from 'vue';
import router from './router';
import App from './components/App';

import ManifestingSaas from './manifesting-saas'

require('./bootstrap');

//window.Vue = require('vue');
// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

//Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.use(ManifestingSaas)

const app = new Vue({
    el: '#app',
    components: {
        App
    },
    router
});
