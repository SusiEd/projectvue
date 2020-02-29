<template>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-10">
                <div class="card card-default">
                    <div class="card-header">Post Nr {{ post.id }}</div>
                    <div class="card-body">
                        <form method="post">
                            <div class="form-group">
                                <label for="postTitle">Titel</label>
                                <input type="text" class="form-control" id="postTitle" placeholder="Titel" v-model="post.title">
                            </div>

                           <!-- <div class="form-group">
                                <label for="postAuthor">Autor </label>
                                <select name="post_author" id="postAuthor">
                                    <option value=""></option>
                                </select>
                            </div>-->

                           <!-- <div class="form-group">
                                <label for="tag">Password</label>
                                <input type="text" class="form-control" id="tag" placeholder="Beispieltag, Beispieltag, Beispieltag">
                            </div>-->

                            <div class="form-group">
                                <label for="postContent">Text</label>
                                <textarea class="form-control" id="postContent" rows="5" placeholder="Hier bitte Text einfügen" v-model="post.content"></textarea>
                            </div>

                           <!-- <div class="form-group">
                                <label for="postPic">Bild</label>
                                <input type="file" id="postPic" name="image">
                            </div>-->

                            <a @click="updatePost(post.id)" class="btn btn-primary" style="color: white">Update</a>
                            <router-link :to="{name: 'admin.all-posts'}" class="btn btn-secondary">Zurück zur Übersicht</router-link>
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
                post: []
            }
        },
        created() {
            axios
                .get('posts/edit/' + this.$route.params.id)
                .then((response) => {
                    this.post = response.data;
                    // console.log(response.data);
                });
        },
        methods: {
            updatePost() {
                axios
                    .put('posts/update/' + this.$route.params.id, this.post)
                    .then((response) => {
                        this.$router.push({name: 'admin.all-posts'});
                    });
            }
        }

    }
</script>
