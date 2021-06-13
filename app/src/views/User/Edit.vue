<template>
    <div class="row">
        <div class="col-md-12 d-flex justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <h5 class="card-header">Edit User</h5>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label for="login">Name</label>
                                <input type="text" name="name" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label for="login">Email</label>
                                <input type="email" name="email" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label for="login">Username</label>
                                <input type="text" name="email" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password">Confirm Password</label>
                                <input type="password" name="confirm_password" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="reset" class="ml-2 btn btn-danger">Cancel</button>
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