<template>
    <div>

        <template v-if="data && data.length">

            <table class="table">
                <thead>
                    <tr>
                        <!-- Iteração sobre as colunas -->
                        <th v-for="(column, index) in columns" :key="index">{{ displayNames[column] }}</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="(item, index) in data" :key="index">
                        <!-- Iteração sobre os valores das colunas -->
                        <td v-for="(column, index) in columns" :key="index">{{ item[column] }}</td>
                    </tr>
                </tbody>
            </table>

        </template>

        <template v-else>
            <div class="alert alert-danger">Nenhum registro encontrado.</div>
        </template>

    </div>
</template>

<script>
    export default {
        props: {
            data: {
                type: Array,
                required: true,
            },
            columns: {
                type: Array,
                required: true,
            },
            displayNames: {
                type: Object,
                default: () => ({}),
            },
        },
    };
</script>
