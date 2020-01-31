<template>
    <div>
        <h1>Meine Userliste</h1>
        <div v-for="user in users">
            <p>{{user.id}}</p>
            <p><input type="text" :value="user.name" @change="putUser($event.target.value, user.id)"></p>
            <p>{{user.email}}</p>
        </div>
    </div>
</template>
<script>
    export default {
        name: "Todo",
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
