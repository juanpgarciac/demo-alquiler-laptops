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
            axios.get('/api/clients')
                .then(function (response) {
                    comp.clients = response.data;
                })
                .catch(function (error) {
                    // handle error
                    console.log(error);
                })
        },
        methods: {

        }
    }
</script>
<template>
        Clientes:
    <select multiple v-model="selectedIds">
        <option v-for="client in clients" :key="client.id" :value="client.id">{{ client.empresa }}</option>
    </select>
</template>

