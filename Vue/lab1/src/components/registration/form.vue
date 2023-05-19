<template>
    <div>
        <form @submit.prevent="submitForm">
            <label for="name">Name:</label>
            <input type="text" id="name" v-model="name">
            <br>
            <label for="age">Age:</label>
            <input type="number" id="age" v-model="age">
            <br>
            <label for="role">Role:</label>
            <select id="role" v-model="role">
              <option value="user">User</option>
              <option value="admin">Admin</option>
            </select>
            <br>
            <button type="submit">Submit</button>
        </form>
    </div>
   
</template>

<script>
    export default {
        name:"RegistrationForm" , 
        data() {
            return {
              name: '',
              age: null,
              role: 'user',
            }
        },
        methods: {
          submitForm() {
            this.$emit('form-submitted', { name: this.name, age: this.age, role: this.role });
            this.name = '';
            this.age = null;
            this.role = 'user';
          }
        }
    }
</script>

<style scoped>

</style>