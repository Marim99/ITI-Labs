<template>
    <div class="container">
     <button type="button" @click="showForm=true;showUsers=false;showAdmins=false" class="btn btn-success mx-2">Form</button>
     <button type="button" @click="showUsers=true;showAdmins=false;showForm=false " class="btn btn-info mx-2">Users</button>
     <button type="button" @click="showAdmins=true;showUsers=false;showForm=false " class="btn btn-warning  mx-2">Admins</button>
     <div v-if="showForm" >
        <formComponent  @form-submitted="addUser"/>  
     </div>
     <div v-if="showUsers">
      <userComponent :users="filteredUsers" @delete-user="deleteUser"/>
    </div>

     <div v-if="showAdmins">
      <adminsComponent :users="filteredAdmins" @delete-user="deleteUser"/>      
     </div>
  </div>
</template>
<script>

import userComponent from '../Users/user.vue'
import adminsComponent from '../Admins/admins.vue'
import formComponent from '../Form/form.vue'
export default {
    name: 'HomePage',
    components:{
     
        userComponent,
        adminsComponent,
        formComponent,
    },
    data() {
        return {
          showForm: false,
          showUsers: false,
          showAdmins: false,
          name: '',
          age: null,
          role: 'user',
          users: []
        }
    },
  methods: {

    addUser(userData) {
      this.users.push({
        id: Date.now(),
        name: userData.name,
        age: userData.age,
        role: userData.role
      });
      this.showForm = false;
    },
    deleteUser(id) {
      this.users = this.users.filter(user => user.id !== id);
    }
  },
  computed: {
    filteredUsers() {
      return this.users.filter(user => user.role === 'user');
        },
    filteredAdmins() {
      return this.users.filter(user => user.role === 'admin');
        }
     }
    }
</script>

<style scoped>

</style>