<template>
    <div>
        <h1>Alle Posts von</h1>
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
                <td><router-link :to="{name: 'dashboard.edit-post', params: { id: post.id }}" class="btn btn-primary">Bearbeiten
                </router-link></td>
                <td><button class="btn btn-secondary" @click="deletePost(post.id)">Löschen</button></td>
            </tr>
            </tbody>
        </table>
    </div>
</template>
<script>
    export default {
        data() {
            return {
                id : this.$route.params.id,
                posts: []
            };

        },
        mounted() {
            this.fetchPosts();
        },
        methods: {
            fetchPosts() {
                axios
                    .get('posts/userPosts')
                    .then(({ data }) => {
                        this.posts = data
                    })
            },
            deletePost(id) {
                axios
                    .delete('posts/userPost/delete/' + id)
                    .then(response => {
                        let i = this.posts.map(item => item.id).indexOf(id);
                        this.posts.splice(i, 1)
                    });
            }
        }
    }
</script>
