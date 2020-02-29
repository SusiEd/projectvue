<template>
    <div>
        <h1>Test</h1>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">E-Mail</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="user in users" :key="user.id">
                <td>{{ user.id }}</td>
                <td><input type="text" :value="user.name" @change="putUser($event.target.value, user.id)"></td>
                <td>{{user.email}}</td>

                <!--<td><router-link :to="{name: 'admin.edit-post', params: { id: post.id }}" class="btn btn-primary">Bearbeiten
                </router-link></td>
                <td><button class="btn btn-secondary" @click="deletePost(post.id)">Löschen</button></td>-->
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
                axios.get('auth/getUsers')
                    .then(res=>{
                        this.users = res.data.users;
                        console.log(this.users);
                    })
                    .catch(err=>{
                        console.log(err);
                    });
            },
            putUser(value, id){
                axios.put('auth/putUser', {
                    id: id,
                    value: value
                })
                    .then(res=>{
                        console.log(res);
                    })
                    .catch(err=>{
                        console.log(err);
                    })
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
