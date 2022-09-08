<script>
    import ClientsSelect from './ClientsSelect.vue';
    import LeasingTable from './LeasingTable.vue';
    export default {
        components: {
            ClientsSelect,
            LeasingTable
        },
        methods: {
            search()
            {
                let ids = Array(this.$refs.clients.selectedIds)
                this.$refs.leasings.search(ids);
            }
        }
    }
</script>
<template>
    <clients-select ref="clients"></clients-select>
    <button @click="search">Cargar info</button>
    <leasing-table ref="leasings"></leasing-table>
</template>

