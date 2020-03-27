<template>
    <div class="content">
        <div class="md-layout">
            <div class="md-layout-item md-medium-size-100 md-small-size-100 md-size-100">
                <md-card>
                    <md-card-header data-background-color="blue">
                        <h4 class="title">Gears</h4>
                        <p class="category">List of gears dropzone</p>
                    </md-card-header>
                    <md-card-content>
                        <gears-table table-header-color="orange"></gears-table>
                    </md-card-content>
                </md-card>
            </div>
        </div>
    </div>
</template>

<script>
import GearsTable from '../components/Tables/GearsTable'

export default {
    components: {
        GearsTable
    }
}
</script>

<style>

</style>