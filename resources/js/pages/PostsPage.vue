<template>
    <div id="page-top">

        <!-- Header -->
        <header class="masthead-blog">
            <div class="container">
                <div class="intro-text">
                    <img class="logoblog" src="/assets/img/logo-heynewme.svg" alt="">
                    <div class="intro-lead-in">Diätkochboxen</div>
                    <h1 class="intro-heading text-uppercase">Blog</h1>
                </div>
            </div>
        </header>

        <!-- Nav Categories -->
        <nav class="bd-subnavbar pt-2 pb-3 pb-md-2">
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-md-auto">
                        <nav class="nav mx-auto d-flex align-items-center">
                            <a class="text-dark py-1 mr-3 fw-500 text-decoration-none" href="">Alle Posts</a>
                            <a class="text-dark py-1 mr-3" href="">Rezepte</a>
                            <a class="text-dark py-1 mr-3" href="">Tipps</a>
                            <a class="text-dark py-1" href="">Diäten</a>
                        </nav>
                    </div>
                    <div class="col-md-auto">
                        <div class="md-form">
                            <input class="form-control" type="text" placeholder="Suche" aria-label="Search">
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Page Content -->
        <div class="container">
            <div class="blogsection">
                <p>Alles Wissenswerte zu gesunder Ernährung: Kostenlose Ernährungspläne, Rezepte, Videos, Ebooks, wissenschaftliche Ratgeber sowie Tipps und Tricks rund um die Ernährungsziele Abnehmen, Muskelaufbau, Clean Eating, Definition und Fettabbau.</p>
            </div>


            <!-- Post -->
            <div v-for="post in posts" class="row">
                <div class="col-md-7">
                    <a href="#">
                        <img class="img-fluid rounded mb-3 mb-md-0" src="http://placehold.it/700x300" alt="">
                    </a>
                    <div class="text-muted">
                        Erstellt am {{ post.created_at | moment("DD.MM.YY") }} von {{ post.user.name }}
                        <a href="#">Start Bootstrap</a>
                    </div>
                </div>
                <div class="col-md-5">
                    <h3>{{ post.title }}</h3>
                    <p>{{ post.content }}</p>
                    <a class="btn btn-primary" href="#">Read More &rarr;</a>
                </div>
                <hr>
            </div>
            <!-- /.row -->




            <!-- Pagination -->
            <ul class="pagination justify-content-center paginationcolor">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                    </a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">3</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Next</span>
                    </a>
                </li>
            </ul>

        </div>
        <!-- /.container -->

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
                    .get('/posts') // Verbindung zu Laravel herstellen => Zugang Datenbank api.php
                    .then(({ data }) => {
                        this.posts = data
                    })
            }
        }
    }
</script>
