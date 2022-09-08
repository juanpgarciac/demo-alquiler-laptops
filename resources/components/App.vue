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
    <div class="row mt-5">
        <div class="col-12"><h2>Alquiler por clientes</h2></div>
        <div class="col-4">
            <clients-select ref="clients"></clients-select>  
            <button class="btn btn-primary" @click="search">Consultar info</button>          
        </div>
    </div>
    
    <div class="row mt-5">
        <div class="col">
            <leasing-table ref="leasings"></leasing-table>
        </div>
    </div>
</template>

