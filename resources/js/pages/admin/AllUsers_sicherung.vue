<template>
    <div>
        <h1>Alle User</h1>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">E-Mail</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="user in users" :key="user.id">
                <td>{{ user.id }}</td>
                <td>
                    <form action="">
                        <div class="form-group col-md-12">
                            <input type="text" class="form-control" :value="user.name" @change="putUser($event.target.value, user.id)">
                        </div>
                    </form>
                </td>
                <td>
                    <form action="">
                        <div class="form-group col-md-12">
                            <input type="text" class="form-control" :value="user.email" @change="putEmail($event.target.value, user.id)">
                        </div>
                    </form>
                </td>


                <td><button class="btn btn-secondary" @click="deleteUser(user.id)">Löschen</button></td>
            </tr>
            </tbody>
        </table>
    </div>
</template>



<script>
    export default {
        name: "AllUsers",
        data(){
            return {
                users: [],
                changeData: ''

            }
        },
        methods: {
            getUser(){
                axios.get('users/getUsers')
                    .then(res=>{
                        this.users = res.data.users;
                        console.log(this.users);
                    })
                    .catch(err=>{
                        console.log(err);
                    });
            },
            putUser(value, id){
                axios.put('users/putUser', {
                    id: id,
                    value: value
                })
                    .then(res=>{
                        console.log(res);
                    })
                    .catch(err=>{
                        console.log(err);
                    })
            },
            putEmail(value, id){
                axios.put('users/putEmail', {
                    id: id,
                    value: value
                })
                    .then(res=>{
                        console.log(res);
                    })
                    .catch(err=>{
                        console.log(err);
                    })
            },
            deleteUser(id) {
                let confirmation = confirm("Willst du den User wirklich löschen?");
                if (confirmation) {
                    axios
                        .delete('users/delete/' + id)
                        .then(response => {
                            let i = this.users.map(item => item.id).indexOf(id);
                            this.users.splice(i, 1)
                        });
                }
            }
        },
        created() {
            this.getUser();
        }
    }
</script>
<style scoped>
    h1 {
        margin-top: 40px;
    }
</style>
