<template>
    <div class="row">
        <div class="col-md-12 d-flex justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <h5 class="card-header">Login</h5>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label for="email_or_username">Email or Username</label>
                                <input type="text" v-model="email_or_username" autocomplete="off" name="email_or_username" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" v-model="password" autocomplete="off" name="password" class="form-control">
                            </div>
                            <button v-on:click.prevent="attemptLogin" class="btn btn-primary">Login</button>
                            <button @click.prevent="hello" class="btn btn-primary">Hello</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    // import api from '../../service/api.js';
    export default {
        name: "Login",
        data() {
            return {
                email_or_username: null,
                password: null
            }
        },
        mathods: {
            attemptLogin() {
                alert("Hello")
                // let data = {
                //     email_or_username: this.login,
                //     password: this.password
                // }
                
                // await api.auth.login(data).then((response) => {
                //     return response.json()
                // }).then((res) => {
                //     console.log(res)
                // }).catch((err) => console.error(err))
            },
            hello() {
                console.log("hello")
            }
        }
        
    }
</script>