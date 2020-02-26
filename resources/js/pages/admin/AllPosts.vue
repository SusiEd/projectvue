<template>
    <div>
        <h1>Alle Posts</h1>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Nr.</th>
                <th scope="col">Autor</th>
                <th scope="col">Titel</th>
                <th scope="col">Erstellt am</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="post in posts">
                <td>{{ post.id }}</td>
                <td>{{ post.user.name }}</td>
                <td>{{ post.title }}</td>
                <td>{{ post.created_at | moment("DD.MM.YYYY") }}</td>
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
                    .get('auth/getPosts')
                    .then(({ data }) => {
                        this.posts = data
                    })
            }
        }
    }
</script>
