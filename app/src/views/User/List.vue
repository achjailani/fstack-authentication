<template>
    <div class="row">
      <div class="col-md-12 d-flex justify-content-center">
          <div class="col-md-10">
            <div class="card">
            <div class="card-header">
                List of users
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Fullname</th>
                            <th scope="col">Username</th>
                            <th scope="col">Email</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark Deleto</td>
                            <td>mackdeleto</td>
                            <td>mark@gmail.com</td>
                            <td>
                                <router-link class="btn btn-primary btn-sm" to="/users/edit">Edit</router-link>
                                <router-link class="btn btn-danger btn-sm ml-2" to="/about">Delete</router-link>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>jacobhollen</td>
                            <td>jacobhollen@gmail.com</td>
                            <td>
                                <router-link class="btn btn-primary btn-sm" to="/users/edit">Edit</router-link>
                                <router-link class="btn btn-danger btn-sm ml-2" to="/about">Delete</router-link>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>larrypage</td>
                            <td>larrypage@gmail.com</td>
                            <td>
                                <router-link class="btn btn-primary btn-sm" to="/users/edit">Edit</router-link>
                                <router-link class="btn btn-danger btn-sm ml-2" to="/about">Delete</router-link>
                            </td>
                        </tr>
                    </tbody>
                    </table>
            </div>
            </div>
          </div>
      </div>
    </div>
</template>
