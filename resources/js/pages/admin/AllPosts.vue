<template>
    <div>
        <h1>Alle Posts</h1>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Nr.</th>
                <th scope="col">Autor</th>
                <th scope="col">Titel</th>
                <th scope="col">Bild</th>
                <th scope="col">Kategorie</th>
                <th scope="col">Erstellt am</th>
                <th scope="col">Geändert am</th>
                <!--<th scope="col">Tags</th>-->
                <th scope="col">Aktionen</th>
                <th scope="col"></th>

            </tr>
            </thead>
            <tbody>
            <tr v-for="post in posts" :key="post.id">
                <td>{{ post.id }}</td>
                <td>{{ post.user.name }}</td>
                <td>{{ post.title }}</td>
                <td>Bild Platzhalter</td>
                <td>Kategorie</td>
                <td>{{ post.created_at | moment("DD.MM.YYYY, HH:MM") }}</td>
                <td>{{ post.updated_at | moment("DD.MM.YYYY, HH:MM") }}</td>
                <!--<td>tags</td>-->
                <td><router-link :to="{name: 'admin.edit-post', params: { id: post.id }}" class="btn btn-primary">Bearbeiten
                </router-link></td>
                <td><button type="button" class="btn btn-secondary">Löschen</button></td>
            </tr>
            </tbody>
        </table>
    </div>
</template>
<script>
    export default {
        data() {
            return {
                posts: []

            }
        },
        mounted() {
            this.fetchPosts();
        },
        methods: {
            fetchPosts() {
                axios
                    .get('/posts')
                    .then(({ data }) => {
                        this.posts = data
                    })
            }
        }
    }
</script>
