<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-header">{{ title }}</div>


                    <div class="card-body">
                        <form>

                            <div class="mb-3 col">
                                <label for="name" class="form-label">Razão Social</label>
                                <input type="text" class="form-control" id="name" aria-describedby="nameHelp">
                            </div>

                            <div class="mb-3 col">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" aria-describedby="email">
                                <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                            </div>

                            <div class="mb-3 col-12 col-md-6">
                                <label for="telefone" class="form-label">Telefone</label>
                                <input type="text" class="form-control" id="telefone" aria-describedby="telefoneHelp">
                            </div>

                            <div class="mb-3 col">
                                <label for="endereco" class="form-label">Endereço</label>
                                <input type="text" class="form-control" id="endereco" aria-describedby="enderecoHelp">
                            </div>

                            <div class="mb-3 col">
                                <label for="cidade" class="form-label">Cidade</label>
                                <input type="text" class="form-control" id="cidade" aria-describedby="cidadeHelp">
                            </div>

                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="estado" class="form-label">Estado</label>
                                        <select class="form-select" id="estado">
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
                                        <input type="text" class="form-control" id="cep" aria-describedby="cepHelp">
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>


                    <div class="card-footer">
                        <div class="row">
                            <div class="col-6"><button class="btn btn-secondary">Voltar</button></div>
                            <div class="col-6 text-end"><button class="btn btn-primary">Cadastrar</button></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['title']
    }
</script>
