<template>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Gender</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <tr v-for="user in state.users" :key="user.id"  v-theme="'dark'">
      <th scope="row">{{user.id}}</th>
      <td>{{user.first_name}}</td>
      <td>{{user.last_name}}</td>
      <td>{{user.gender}}</td>
      <td>
        <button class="btn btn-danger m-1" @click="deleteById(user.id)"><i class="bi bi-trash3-fill"></i></button>
        <router-link class="btn btn-primary m-1" :to="`/users/${user.id}/show`"><i class="bi bi-eyeglasses"></i></router-link>
        <router-link class="btn btn-success m-1" :to="`/users/${user.id}/edit`"><i class="bi bi-pencil-square"></i>
</router-link>
      </td>
    </tr>
  </tbody>
</table>
</template>

<script>
import axios from 'axios';
import { reactive} from 'vue';
    export default {
        name:'allUsers',
        props: {
  },
  setup(){
    let state=reactive({
      users:[{}],
      loading:true
    });
    function getAllUsers(){
    axios.get("http://localhost:3000/users")
      .then((res)=>{
        state.users= res.data
        state.loading=false
      })
    }
    getAllUsers()

    function deleteById(id){
      axios.delete(`http://localhost:3000/users/${id}`)
        .then((res)=>{
          console.log(res)
          getAllUsers()
        })
    }
    return{
      state,
      getAllUsers,
      deleteById
    }
  },
}
</script>

<style scoped>

</style>