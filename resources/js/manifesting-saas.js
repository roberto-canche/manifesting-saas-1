import SideBar from './components/SidebarPlugin'

// asset imports
import VueMaterial from "vue-material";
import "vue-material/dist/vue-material.min.css";
import 'vue-material/dist/theme/default.css'
//import "../sass/material-dashboard.scss";

export default {
    install(Vue) {
        Vue.use(SideBar)
        Vue.use(VueMaterial)
    }
}