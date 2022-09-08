<script>
    
    export default {
        props:['clientIds'],
        data()
        {
            return {
                leasings: [],
            }
            
        },
        mounted()
        {
            this.search(null);
        },
        methods:{
            search(clientIds){
                let comp = this;
                axios.get('/api/leasings', { params: {
                    client_ids: clientIds?.join(',')
                }})
                .then(function (response) {
                    comp.leasings = response.data;
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
    <table class="table table-striped">
        <thead>
            <tr>
                <td>Código</td>
                <td>Tipo de UA</td>
                <td>Marca</td>
                <td>Procesador</td>
                <td>Generación</td>
                <td>Empresa</td>
                <td>Asesor</td>
            </tr>
        </thead>
        <tbody>
            <tr v-for="leasing in leasings" :key="leasing.alquiler_id" >
                <td>{{ leasing["C\u00f3digo"] }}</td>
                <td>{{ leasing["Tipo de UA"] }}</td>
                <td>{{ leasing["Marca"] }}</td>
                <td>{{ leasing["Procesador"] }}</td>
                <td>{{ leasing["Generaci\u00f3n"] }}</td>
                <td>{{ leasing["Empresa"] }}</td>
                <td>{{ leasing["Asesor"] }}</td>
            </tr>

        </tbody>
    </table>
</template>
