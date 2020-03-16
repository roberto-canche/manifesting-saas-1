<template>
    <div>
        <router-view></router-view>
        <router-link to="/gear">Gear</router-link>
        <router-link to="/about">About</router-link>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
