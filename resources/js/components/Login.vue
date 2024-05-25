<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Login vue</div>

                    <div class="card-body">
                        <form method="POST" action="" @submit.prevent="login($event)">

                            <input type="hidden" name="_token" :value="csrf_token">

                            <div class="row mb-3">

                                <label for="email" class="col-md-4 col-form-label text-md-end">Email</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="" v-model="email" required autocomplete="email" autofocus>


                                        <span class="invalid-feedback" role="alert">
                                            <strong>Mensagem</strong>
                                        </span>

                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end">Senha</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" v-model="password" required autocomplete="current-password">

                                        <span class="invalid-feedback" role="alert">
                                            <strong>Mensagem</strong>
                                        </span>

                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember">

                                        <label class="form-check-label" for="remember">
                                            Manter-me conectado
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Login
                                    </button>

                                    <a class="btn btn-link" href="">
                                        Esqueceu sua senha?
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

    import axios from 'axios';

    export default {
        props: ['csrf_token'],
        data() {
            return {
                email: '',
                password: '',
            };
        },
        methods:
        {
            login(e) {

                let data = {
                    email: this.email,
                    password: this.password,
                    _token: document.getElementsByName('_token')[0].value
                }

                let config = {
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                    }
                }

                axios.post('api/v1/login', data, config)
                .then(response => {
                    const token = response.data.token;
                    console.log(response);
                    if(token) {
                        //document.cookie = 'token=' + token;
                        localStorage.setItem('access_token', token);
                    }
                    e.target.submit()
                })
                .catch(error => {
                    console.log(error);
                });

            }

        }
    }
</script>
