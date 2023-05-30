<template>
  <nav class="navbar navbar-expand-lg fixed-top  bg-body-tertiary" style="background-color: rgb(214, 214, 214,0.3);">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex justify-content-end ">
        <li class="nav-item">
            <router-link class="navbar-brand" to="/users">home</router-link>
        </li>
        <li class="nav-item">
        <router-link class="navbar-brand" to="/users/create">Add</router-link>
      </li>
      </ul>
    </div>
  </div>
</nav>

</template>

<script>
    export default {
        name: "navbarComponent"
    }
</script>

<style scoped>

</style>