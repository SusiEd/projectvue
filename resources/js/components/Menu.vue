<template>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <router-link :to="{name: 'home'}" class="navbar-brand">HEY NEW ME</router-link>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto" v-if="$auth.check(1)">
                <li class="nav-item" v-for="(route, key) in routes.user" v-bind:key="route.path">
                    <router-link :to="{ name : route.path }" :key="key" class="nav-link">{{route.name}}</router-link>
                </li>
            </ul>
            <ul class="navbar-nav mr-auto" v-if="$auth.check(2)">
                <li class="nav-item" v-for="(route, key) in routes.admin" v-bind:key="route.path">
                    <router-link :to="{ name : route.path }" :key="key" class="nav-link">{{route.name}}</router-link>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto" v-if="!$auth.check()">
                <li class="nav-item" v-for="(route, key) in routes.unlogged" v-bind:key="route.path">
                    <router-link :to="{ name : route.path }" :key="key" class="nav-link">{{route.name}}</router-link>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto" v-if="$auth.check()">
                <li class="nav-item">
                    <a class="nav-link" href="#" @click.prevent="$auth.logout()">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
</template>
<script>
    export default {
        data() {
            return {
                userData: {},
                routes: {
                    // UNLOGGED
                    unlogged: [
                        { name: 'Blog', path: 'blog'},
                        { name: 'Register', path: 'register' },
                        { name: 'Login', path: 'login'}
                    ],
                    // LOGGED USER
                    user: [
                        { name: 'Test', path: 'dashboard.test' },
                        { name: 'User', path: 'dashboard.user' }
                    ],
                    // LOGGED ADMIN
                    admin: [
                        { name: 'Test', path: 'admin.test' },
                        { name: 'User', path: 'admin.user' },
                        { name: 'Todoliste', path: 'admin.todo' },
                        { name: 'Alle Posts', path: 'admin.all-posts' }
                    ]
                }
            }
        }
    }
</script>
<style>
    .bg-dark {
        background-color: #000000 !important;
    }


</style>
