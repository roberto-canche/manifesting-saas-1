<template>
    <div class="sidebar"
        :data-color="activeColor"
        :style="sidebarStyle">
        <div class="logo">
            <a href="#">
                <div class="logo-img">
                    <img src="https://www.paragon-skydive.com/wp-content/uploads/2016/10/paragon-logo-for-white-backround-small-border-e1505598987644.png" alt="">
                </div>
            </a>
        </div>
        <div class="sidebar-wrapper">
            <slot name="content"></slot>
            <md-list class="nav">
                <slot>
                    <sidebar-link
                        v-for="(link, index) in sidebarLinks"
                        :key="link.name + index"
                        :to="link.path"
                        :link="link"
                    ></sidebar-link>
                </slot>
            </md-list>
        </div>
    </div>
</template>

<script>
import SidebarLink from "./SidebarLink";

export default {
    components: {
        SidebarLink
    },

    props: {
        activeColor: {
            type: String,
            default: "green",
            validator: value => {
                let acceptedValues = ["", "purple", "blue", "green", "orange", "red"];
                return acceptedValues.indexOf(value) !== -1;
            }
        },
        sidebarLinks: {
            type: Array,
            default: () => []
        },
    },
    computed: {
        sidebarStyle() {
            return {
            backgroundImage: `url(${this.backgroundImage})`
            };
        }
    }
}
</script>
<style>
    .nav-mobile-menu {
        display: none;
    }
</style>
