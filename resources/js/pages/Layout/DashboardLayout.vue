<template>
    <div class="wrapper">
        <side-bar>
            <sidebar-link to="/gear">
                <p>Home</p>
            </sidebar-link>
            <sidebar-link to="/gear">
                <p>Gear Tracking</p>
            </sidebar-link>
        </side-bar>

        <div class="main-panel">
            <top-nav-bar></top-nav-bar>

            <dashboard-content></dashboard-content>
        </div>
    </div>
</template>

<script>
import TopNavBar from './TopNavbar'
import DashboardContent from './Content'

export default {
    components: {
        TopNavBar,
        DashboardContent
    }
}
</script>