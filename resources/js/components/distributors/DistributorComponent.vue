<template>
    <div class="container">
        <card-component title="Distribuidores" icon="bi bi-search">

        <template v-slot:body>
            <table-component
            :data="distributors"
            :columns="[/*'id'*/, 'name', 'email', 'phone', 'address', 'city', 'state', 'country', 'postal_code']"
            :display-names="{
                //id: 'ID',
                name: 'Nome',
                email: 'E-mail',
                phone: 'Telefone',
                address: 'Endereço',
                city: 'Cidade',
                state: 'Estado',
                country: 'País',
                postal_code: 'CEP',
            }"
            >
            </table-component>


        </template>
        <template v-slot:footer>
            <div class="row">
                <div class="col-6"><a href="/home" class="btn btn-secondary">Voltar</a></div>
                <div class="col-6 text-end"><a href="/distributors/create" class="btn btn-primary">Novo</a></div>
            </div>
        </template>
        </card-component>
    </div>
</template>

<script>
    import axios from 'axios';

    export default {
        mounted() {
            this.getDistributors();
        },
        data() {
            return {
                distributors: [],
            };
        },
        methods: {
            getDistributors() {
            axios.get('/api/distributors')
                .then(response => {
                this.distributors = response.data;
                })
                .catch(error => {
                console.log(error);
                });
            },
        },
    };
</script>
