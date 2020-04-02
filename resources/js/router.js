import Vue from 'vue'
import VueRouter from 'vue-router'

import DashboardLayout from './pages/Layout/DashboardLayout'

//Views
import Gear from './pages/Gear'
import NotFound from './components/NotFound'
//import HomeComponent from './components/HomeComponent'
import AboutComponent from './components/AboutComponent'

//Manifesting Saas

Vue.use(VueRouter)

export default new VueRouter({
    mode: 'history',
    component: DashboardLayout,
    routes: [
        { 
            path: '/', 
            component: DashboardLayout,
            children: [
                {
                    path: '/gear',
                    name: 'Gear',
                    component: Gear
                },
                
            ]
        },
        {
            path: '/*',
            name: '404',
            component: NotFound
        }
    ]
})