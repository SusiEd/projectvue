<template>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-lg-6 col-xs-12">
                <div class="card card-default">
                    <div class="card-header">Registrierung</div>
                    <div class="card-body">
                        <div class="alert alert-danger" v-if="has_error && !success">
                            <p v-if="error == 'registration_validation_error'">Versuche es erneut!</p>
                            <p v-else>Fehler - Bitte alle Felder ausfüllen!</p>
                        </div>
                        <form autocomplete="off" @submit.prevent="register" v-if="!success" method="post">
                            <div class="form-group" v-bind:class="{ 'has-error': has_error && errors.name }">
                                <label for="name">Name</label>
                                <input type="text" id="name" class="form-control" placeholder="Name" v-model="name">
                                <span class="help-block" v-if="has_error && errors.name">{{ errors.name[0] }}</span>
                            </div>
                            <div class="form-group" v-bind:class="{ 'has-error': has_error && errors.email }">
                                <label for="email">E-Mail</label>
                                <input type="email" id="email" class="form-control" placeholder="user@example.de" v-model="email">
                                <span class="help-block" v-if="has_error && errors.email">{{ errors.email[0] }}</span>
                            </div>
                            <div class="form-group" v-bind:class="{ 'has-error': has_error && errors.password }">
                                <label for="password">Passwort</label>
                                <input type="password" id="password" class="form-control" v-model="password">
                                <span class="help-block" v-if="has_error && errors.password">{{ errors.password[0] }}</span>
                            </div>
                            <div class="form-group" v-bind:class="{ 'has-error': has_error && errors.password }">
                                <label for="password_confirmation">Passwort bestätigen</label>
                                <input type="password" id="password_confirmation" class="form-control" v-model="password_confirmation">
                            </div>
                            <button type="submit" class="btn btn-primary">Abschicken</button>
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
                name: '',
                email: '',
                password: '',
                password_confirmation: '',
                has_error: false,
                error: '',
                errors: {},
                success: false
            }
        },
        methods: {
            register() {
                var app = this
                this.$auth.register({
                    data: {
                        name: app.name,
                        email: app.email,
                        password: app.password,
                        password_confirmation: app.password_confirmation
                    },
                    success: function () {
                        app.success = true
                        this.$router.push({name: 'Login.vue', params: {successRegistrationRedirect: true}})
                    },
                    error: function (res) {
                        // console.log(res.response.data.errors)
                        app.has_error = true
                        app.error = res.response.data.error
                        app.errors = res.response.data.errors || {}
                    }
                })
            }
        }
    }
</script>
<style scoped>

    span {
        color: red;
    }

</style>
