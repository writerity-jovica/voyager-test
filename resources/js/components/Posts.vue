<template>
    <ag-grid-vue style="width: 100%; height: 500px" class="ag-theme-balham" :gridOptions="gridOptions" :columnDefs="columnDefs" :rowData="rowData"></ag-grid-vue>
</template>

<script>
    import { AgGridVue } from "ag-grid-vue";
    import actions from "./Actions.vue";
    import postImage from "./PostImage.vue";
    
    export default {
        props: ["column_defs","row_data"],
        components: { AgGridVue, actions, postImage },
        data() {
            return {
                gridOptions: {
                    rowHeight: 100
                },
                columnDefs: null,
                rowData: null
            }
        },
        beforeMount() {
            this.columnDefs = JSON.parse(this.column_defs);
            this.rowData = JSON.parse(this.row_data);
        }
    }
</script>

<style>
    .ag-cell img {
        width: 100%!important;
    }
</style>
