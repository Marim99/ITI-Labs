<template>
    <div class="container p-5">
        <form @submit.prevent="submitForm"  >
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter user name" v-model="name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail2">Age</label>
                <input type="number" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp" placeholder="Enter user age" v-model="age">
            </div>
            <div class="form-group col-md-4">
                <label for="inputState">Role</label>
                <select id="inputState" class="form-control" v-model="role">
                    <option selected value="user">User</option>
                    <option value="admin">Admin</option>
                </select>
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
            </form>

    </div>

</template>
<script>

    export default {
        name: 'formComponent',
        components:{

        },

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