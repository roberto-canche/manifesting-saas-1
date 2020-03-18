import Vue from 'vue'
import VueRouter from 'vue-router'

import DashboardLayout from './pages/Layout/DashboardLayout'

//Views
import Gear from './pages/Gear'
//import HomeComponent from './components/HomeComponent'
import AboutComponent from './components/AboutComponent'

//Manifesting Saas
import ManifestingSaas from './manifesting-saas';

Vue.use(VueRouter)

export default new VueRouter({
    mode: 'history',
    component: DashboardLayout,
    routes: [
        { 
            path: '/gear', 
            component: DashboardLayout,
            children: [
                {
                    path: 'gear',
                    namr: 'Gear',
                    component: Gear
                }
            ]
        }
    ]
})