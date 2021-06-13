<template>
    <div class="row">
        <div class="col-md-12 d-flex justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <h5 class="card-header">Login</h5>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label for="login">Email or Username</label>
                                <input type="text" name="login" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    // import { auth } from '../../service/api.js';
    export default {
        name: "Login",
        data() {
            return {
                auth: {}
            }
        }
    }
</script>