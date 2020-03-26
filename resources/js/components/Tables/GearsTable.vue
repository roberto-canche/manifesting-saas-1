<template>
    <div>
        <md-table v-model="gears" :table-header-color="tableHeaderColor">
            <md-table-row slot="md-table-row" slot-scope="{ item }">
                <md-table-cell md-label="Name"> {{ item.name }} </md-table-cell>
                <md-table-cell>
                    <md-button class="md-just-icon md-simple md-primary">
                        <md-icon>Edit</md-icon>
                        <md-tooltip md-direction="top">Edit</md-tooltip>
                    </md-button>
                    <md-button class="md-just-icon md-simple md-danger">
                        <md-icon>Close</md-icon>
                        <md-tooltip md-direction="top">Close</md-tooltip>
                    </md-button>
                </md-table-cell>
            </md-table-row>
        </md-table>
    </div>
</template>

<script>
export default {
    name: 'gears-table',

    props: {
        tableHeaderColor: {
            type: String,
            default: ""
        }
    },

    data() {
        return {
            selected: [],
            gears: [
                {
                    name:'Sign contract for'
                },
                {
                    name: 'Lines from Great Russian'
                },
                {
                    name: 'Flooded'
                }
            ]
        }
    },

    created() {
        this.fetchGears
    },

    methods: {
        onSelect: function(items) {
            this.selected = items
        },

        fetchGears() {
            axios.get('http://127.0.0.1:8000/api/gears')
                .then(response => {
                    console.log(response);
                })
                .catch(err => {
                    console.log(err);
                })
        }
    }
}
</script>

<style>

</style>