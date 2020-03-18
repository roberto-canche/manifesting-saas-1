<template>
    <li class="md-list-item">
        <router-link class="md-list-item-router" @click="hideSidebar" v-bind="$attrs">
            <div class="md-list-item-content">
                <slot>
                    <md-icon>{{ link.icon }}</md-icon>
                    <p>{{ link.name }}</p>
                </slot>
            </div>
        </router-link>
    </li>
</template>

<script>
export default {
    inject: {
        autoClose: {
            default:true
        }
    },

    props: {
        link: {
            type: [String, Object],
            default: () => {
                return {
                    name: "",
                    path: "",
                    icon: ""
                }
            }
        },
        tag: {
            type: String,
            default: "router-link"
        }
    },

    methods: {
        hideSidebar() {
            if( this.autoClose && this.$sidebar && this.$sidebar.showSidebar === true) {
                this.$sidebar.displaySidebar(false)
            }
        }
    }
}
</script>