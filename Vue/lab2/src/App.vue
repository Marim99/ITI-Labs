<template>
   <navbarComponent v-if="!$route.meta.hideNavbar"/>
  <div class="container">
  <router-view></router-view>
</div>
</template>
<script>

import navbarComponent from './components/Navbar.vue'
export default {
  name: 'App',
  components: {
    navbarComponent, 
  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  background-color: #f2f2f2;
  margin-top: 50px;
}
</style>
