<template>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-lg-6 col-xs-12">
                <div class="card card-default">
                    <div class="card-header">Login</div>
                    <div class="card-body">
                        <div class="alert alert-danger" v-if="has_error && !success">
                            <p v-if="error == 'login_error'">Versuche es erneut!</p>
                            <p v-else>Du kannst dich nicht einloggen, prüfe E-Mail und Passwort</p>
                        </div>
                        <form autocomplete="off" @submit.prevent="login" method="post">
                            <div class="form-group">
                                <label for="email"</label>
                                <input type="email" id="email" class="form-control" placeholder="user@example.de" v-model="email" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Passwort</label>
                                <input type="password" id="password" class="form-control" v-model="password" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Sign in</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        data() {
            return {
                email: null,
                password: null,
                success: false,
                has_error: false,
                error: ''
            }
        },
        mounted() {
            //
        },
        methods: {
            login() {
                // get the redirect object
                var redirect = this.$auth.redirect()
                var app = this
                this.$auth.login({
                    data: {
                        email: app.email,
                        password: app.password
                    },
                    success: function(res) {
                        // handle redirection
                        const role = res.data.role;
                        app.success = true;
                        let redirectTo = '';
                        if(role === 1) {
                            redirectTo = 'dashboard';
                        } else if (role === 2) {
                            redirectTo = 'admin.dashboard';
                        }
                        this.$router.push({name: redirectTo})

                    },
                    error: function(res) {
                        app.has_error = true
                        app.error = res.response.data.error

                    },
                    rememberMe: true,
                    fetchUser: true
                })
            }
        }
    }
</script>
<style lang="css">
    .card {
        margin-top: 40px;
        margin-bottom: 50px;
    }

</style>
