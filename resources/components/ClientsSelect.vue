<script>
    
    export default {
        data()
        {
            return {
                selectedIds: null,
                clients: [],
            }
            
        },
        mounted()
        {
            let comp = this;
           
            comp.search();

        },
        methods:{
            search(){

                let comp = this;
                axios.get('/api/clients')
                    .then(function (response) {
                        comp.clients = response.data;
                    })
                    .catch(function (error) {
                        // handle error
                        console.log(error);
                    })
            }
        }
    }
</script>
<template>
    <label for="select-clients">Seleccionar uno o varios clientes para consultar:</label>
    <select id="select-clients" class="form-select" multiple v-model="selectedIds" aria-label="Seleccionar uno varios cliente">
        <option v-for="client in clients" :key="client.id" :value="client.id">{{ client.empresa }}</option>
    </select>
</template>

