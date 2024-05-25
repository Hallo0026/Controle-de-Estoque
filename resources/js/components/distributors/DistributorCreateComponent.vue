<template>

    <card-component title="Cadastrar Fornecedor">

        <template v-slot:body>
            <form>

                <div class="mb-3 col">
                    <label for="name" class="form-label">Razão Social</label>
                    <input type="text" class="form-control" id="name" v-model="name" aria-describedby="nameHelp">
                </div>

                <div class="mb-3 col">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" v-model="email" aria-describedby="email">
                    <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                </div>

                <div class="mb-3 col-12 col-md-6">
                    <label for="telefone" class="form-label">Telefone</label>
                    <input type="text" class="form-control" id="phone" v-model="phone" v-mask="'(##) #####-####'" aria-describedby="telefoneHelp">
                </div>

                <div class="row">
                    <div class="mb-3 col">
                        <label for="endereco" class="form-label">Endereço</label>
                        <input type="text" class="form-control" id="address" v-model="address" aria-describedby="enderecoHelp">
                    </div>

                    <div class="mb-3 col">
                        <label for="address_number" class="form-label">Número</label>
                        <input type="text" class="form-control" id="address_number" v-model="address_number" aria-describedby="numeroEnderecoHelp">
                    </div>
                </div>



                <div class="mb-3 col">
                    <label for="cidade" class="form-label">Cidade</label>
                    <input type="text" class="form-control" id="city" v-model="city" aria-describedby="cidadeHelp">
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="state" class="form-label">Estado</label>
                            <select class="form-select" id="state" v-model="state">
                                <option selected>Selecione um estado...</option>
                                <option value="AC">Acre</option>
                                <option value="AL">Alagoas</option>
                                <option value="AP">Amapá</option>
                                <option value="AM">Amazonas</option>
                                <option value="BA">Bahia</option>
                                <option value="CE">Ceará</option>
                                <option value="DF">Distrito Federal</option>
                                <option value="ES">Espírito Santo</option>
                                <option value="GO">Goiás</option>
                                <option value="MA">Maranhão</option>
                                <option value="MT">Mato Grosso</option>
                                <option value="MS">Mato Grosso do Sul</option>
                                <option value="MG">Minas Gerais</option>
                                <option value="PA">Pará</option>
                                <option value="PB">Paraíba</option>
                                <option value="PR">Paraná</option>
                                <option value="PE">Pernambuco</option>
                                <option value="PI">Piauí</option>
                                <option value="RJ">Rio de Janeiro</option>
                                <option value="RN">Rio Grande do Norte</option>
                                <option value="RS">Rio Grande do Sul</option>
                                <option value="RO">Rondônia</option>
                                <option value="RR">Roraima</option>
                                <option value="SC">Santa Catarina</option>
                                <option value="SP">São Paulo</option>
                                <option value="SE">Sergipe</option>
                                <option value="TO">Tocantins</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="cep" class="form-label">CEP</label>
                            <input type="text" class="form-control" id="postal_code" v-model="postal_code" v-mask="'#####-###'" aria-describedby="cepHelp">
                        </div>
                    </div>
                </div>

                <div class="alert alert-danger" v-if="hasError">{{ error }}</div>
                <div class="alert alert-success" v-if="success">Fornecedor cadastrado com sucesso!</div>


            </form>
        </template>

        <template v-slot:footer>
            <div class="row">
                <div class="col-6"><a href="/distributors/index" class="btn btn-secondary">Voltar</a></div>
                <div class="col-6 text-end"><button class="btn btn-primary" @click="cadastrar()">Cadastrar</button></div>
            </div>
        </template>

    </card-component>

</template>

<script>
    import axios from 'axios';

    export default {
        data() {
            return {
                name: '',
                email: '',
                phone: '',
                address: '',
                address_number: '',
                city: '',
                state: '',
                country: 'Brasil',
                postal_code: '',
                success: false,
                error: '',
                hasError: false,
            };
        },

        methods: {
            cadastrar() {

                axios.post('/api/v1/distributors', {
                    name: this.name,
                    email: this.email,
                    phone: this.phone,
                    address: this.address,
                    address_number: this.address_number,
                    city: this.city,
                    state: this.state,
                    country: this.country,
                    postal_code: this.postal_code,
                }).then(response => {
                    console.log(response);
                }).catch(error => {
                    //console.log(error);
                    let errorMessage = error.response.data.message;
                    errorMessage = errorMessage.split('(');
                    this.error = errorMessage[0];
                    this.hasError = true;

                });
            },
        },

    };

</script>
