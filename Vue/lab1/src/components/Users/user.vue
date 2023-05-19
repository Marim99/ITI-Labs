<template>
    <div class="container col-6">
        <h3>Users</h3>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Age</th>
      <th scope="col">Delete</th>

    </tr>
  </thead>
  <tbody>
    <tr v-for="user in users" :key="user.id">
      <th scope="row">{{user.id}}</th>
      <td>{{user.name}}</td>
      <td>{{user.age}}</td>
      <td><button class="btn btn-danger"  @click="deleteUser(user.id)">Delete</button> </td>
    </tr>
  </tbody>
</table>
    </div>
</template>

<script>
    export default {
        name: 'userComponent',
        props: {
        users: {
        type: Array,
        required: true,
        },
        },
        methods: {
        deleteUser(id) {
        this.$emit("delete-user", id);
        },
        },
    }
    // console.log(this.props);
</script>

<style scoped>

</style>