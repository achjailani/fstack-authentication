<template>
  <nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <div class="container">
        <router-link class="navbar-brand text-light" to="/">Hook</router-link>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <router-link class="nav-link text-light" to="/">Home <span class="sr-only">(current)</span></router-link>
            </li>
            <li class="nav-item">
              <router-link class="nav-link text-light" to="/about">About</router-link>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Hi, Melisa
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <router-link class="dropdown-item" to="/users">All users</router-link>
                <router-link class="dropdown-item" to="/me">Profile</router-link>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item" @click="logout" >Logout</a>
              </div>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <router-link class="btn btn-outline-light" to="/login">Login</router-link>
            <router-link class="btn btn-light ml-2" to="/register">Register</router-link>
          </form>
        </div>
    </div>
  </nav>
  <div class="container mt-4"> 
    <router-view />
  </div>
</template>

<script>
export default {
  name: "App",
  methods: {
    logout() {
      this.$router.push('/');
    }
  }
};
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  color: #2c3e50;
}
</style>
