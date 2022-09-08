<script>
    import ClientsSelect from './ClientsSelect.vue';
    import LeasingTable from './LeasingTable.vue';
    export default {
        components: {
            ClientsSelect,
            LeasingTable
        },
        data(){
            return {
                currentClients:[]
            }
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
            <small>CTRL + Click para seleccionar mas de un cliente</small><br>
            <button class="btn btn-primary mt-3" @click="search">Consultar info</button>  
            
        </div>
    </div>
    
    <div class="row mt-5">
        <div class="col">
            <leasing-table ref="leasings"></leasing-table>
        </div>
    </div>
</template>

