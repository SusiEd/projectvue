<template>
    <div class="container" style="margin-top: 100px">

        <div class="row justify-content-center">

            <!-- Post Content Column -->
            <div class="col-lg-8">

                <!-- Title -->
                <h1 class="mt-4">{{ post.title }}</h1>

                <hr>

                <!-- Date/Time -->
                <p>geposted am {{ post.created_at | moment("DD.MM.YYYY") }}</p>

                <hr>

                <!-- Preview Image -->
                <img class="img-fluid rounded" src="http://placehold.it/900x300" alt="">

                <hr>

                <!-- Post Content -->
                <p class="lead">{{ post.content }}</p>
                <router-link :to="{name: 'blog'}" class="btn btn-secondary">Zurück</router-link>

                <hr>

                <!-- Comments Form -->
                <div class="card my-4">
                    <h5 class="card-header">Leave a Comment:</h5>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <textarea class="form-control" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>

                <!-- Single Comment -->
                <div class="media mb-4">
                    <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                    <div class="media-body">
                        <h5 class="mt-0">Commenter Name</h5>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </div>
                </div>


            </div>



        </div>
        <!-- /.row -->

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
                .get('posts/show/' + this.$route.params.id)
                .then((response) => {
                    this.post = response.data;
                    // console.log(response.data);
                });
        }

    }
</script>

