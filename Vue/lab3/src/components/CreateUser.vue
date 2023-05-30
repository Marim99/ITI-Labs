<template>
<div class="mt-5 d-flex justify-content-center align-items-center flex-column" style="height: 90vh;">
<div class="card mt-5">
  <div class="card-header">
    User
  </div>
  <ul class="list-group list-group-flush m-3">
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">first name</label>
      <input v-model="state.user.first_name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="first name">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">last name</label>
      <input v-model="state.user.last_name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="last name">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">gender</label>
      <select v-model="state.user.gender" class="form-select" aria-label="Default select example">
        <option value="Male" :selected="state.user.gender=='Male'" >male</option>
        <option value="Female" :selected="state.user.gender=='Female'">female</option>
      </select> 
    </div>
  </ul>
</div>        
<button  class="btn btn-dark m-1" @click="submit()">create</button>
</div>
</template>

<script>
import axios from 'axios';
import { reactive } from 'vue'
import { useRouter } from 'vue-router'

    export default {
        name: 'createUser',
        props: {
  },
  setup(){
    let state=reactive({
      user:{
        first_name:'',
        last_name:'',
        gender:''
      }
    })
    let router=useRouter()
    function submit(){
        axios.post("http://localhost:3000/users",state.user)
        .then((res)=>{
          router.push(`/users/${res.data.id}/show`)
        })
    }
    return {
      submit,
      state
    }
  },
    }
</script>

<style scoped>
.card-header{
    background-color: black;
    color: #fff;
}
</style>