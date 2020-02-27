<template>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-10">
                <div class="card card-default">
                    <div class="card-header">Neuen Post erstellen</div>
                    <div class="card-body">
                        <form method="post">
                            <div class="form-group">
                                <label for="postTitle">Titel</label>
                                <input type="text" class="form-control" id="postTitle" placeholder="Titel" v-model="title">
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
                                <textarea class="form-control" id="postContent" rows="5" placeholder="Hier bitte Text einfügen" v-model="content"></textarea>
                            </div>

                           <!-- <div class="form-group">
                                <label for="postPic">Bild</label>
                                <input type="file" id="postPic" name="image">
                            </div>-->

                            <a @click.prevent="createNewPost" class="btn btn-primary">Post erstellen</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        name: "AddPost", //Component
        data: function() {
            return {
                title: [],
                content: [],
                user_id: this.$route.params.id
            }
        },
        methods: {
            createNewPost() {
                axios.post('posts/add', {
                    title : this.title,
                    content: this.content,
                    user_id: this.user_id
                }).then((response) => {
                    console.log(response);
                    this.$router.to({name: 'admin.add-post'})
                }).catch((error) => {
                    console.log(error);
                });
            },

        },
    }
</script>
