<template>

    <body id="page-top">

    <!-- Header -->
    <header class="masthead">
        <div class="container">
            <div class="intro-text">
                <img class="logo" src="/assets/img/logo-heynewme.svg" alt="Logo HEY NEW ME">
                <div class="intro-lead-in">Diätkochboxen</div>
                <h1 class="intro-heading text-uppercase">Koch dich schlank!</h1>
                <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="">Diätkochbox bestellen</a>
            </div>
        </div>
    </header>

    <!-- Services -->
    <section class="page-section" id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">Endlich abnehmen!</h2>
                    <h3 class="section-subheading text-muted">Hey New Me hilft dir dabei!</h3>
                </div>
            </div>

            <div class="row text-center">
                <div class="col-md-4">
				<span class="fa-stack fa-4x">
					<img src="/assets/img/icon-kochen.svg" alt="Selber Kochen">
				</span>
                    <h4 class="service-heading">Tolle Gerichte</h4>
                    <p class="text-muted">zum selber Kochen. Wir liefern Diätrezepte und frische Zutaten direkt zu Dir nach Hause!</p>
                </div>
                <div class="col-md-4">
				<span class="fa-stack fa-4x">
				<img src="/assets/img/icon-flexibel.svg" alt="Absolute Flexibilität">
				</span>
                    <h4 class="service-heading">Flexibel</h4>
                    <p class="text-muted">Unser Programm unterstützt Deine Diät. Plan alle Gerichte individuell und integrier Sie so in Deinen Alltag.</p>
                </div>
                <div class="col-md-4">
				<span class="fa-stack fa-4x">
				<img src="/assets/img/icon-abnehmen.svg" alt="Endlich abnehmen">
				</span>
                    <h4 class="service-heading">Abnehmen</h4>
                    <p class="text-muted">Wir helfen Dir dabei. Wir suchen für Dich Rezpete und kaufen für Dich ein. So nimmt du im Handumdrehen ab.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Recipes -->
    <section class="bg-light page-section" id="recipe">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">Rezepte dieser Woche</h2>
                    <h3 class="section-subheading text-muted">Nimm einfach und gesund ab.</h3>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 col-sm-6 recipe-item">
                    <a class="recipe-link" data-toggle="modal" href="#portfolioModal1">
                        <div class="recipe-hover">
                            <div class="recipe-hover-content">
                                <p>Zu den Rezepten ></p>
                            </div>
                        </div>
                        <img class="img-fluid" src="/assets/img/01-haehnchen-gemuese-thumbnail.jpg" alt="Hähnchen mit Gemüse">
                    </a>
                    <div class="recipe-caption">
                        <h4>Hähnchen mit Gemüse</h4>
                        <p class="text-muted">500 Kalorien</p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 recipe-item">
                    <a class="recipe-link" data-toggle="modal" href="#portfolioModal2">
                        <div class="recipe-hover">
                            <div class="recipe-hover-content">
                                <p>Zu den Rezepten ></p>
                            </div>
                        </div>
                        <img class="img-fluid" src="/assets/img/02-rotebeete-suppe-thumbnail.jpg" alt="">
                    </a>
                    <div class="recipe-caption">
                        <h4>Rote Beete Suppe</h4>
                        <p class="text-muted">300 Kalorien</p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 recipe-item">
                    <a class="recipe-link" data-toggle="modal" href="#portfolioModal3">
                        <div class="recipe-hover">
                            <div class="recipe-hover-content">
                                <p>Zu den Rezepten ></p>
                            </div>
                        </div>
                        <img class="img-fluid" src="/assets/img/03-pilz-pfanne-thumbnail.jpg" alt="">
                    </a>
                    <div class="recipe-caption">
                        <h4>Pilzpfanne</h4>
                        <p class="text-muted">400 Kalorien</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How to -->
    <section class="page-section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">Wie funktioniert's</h2>
                    <h3 class="section-subheading text-muted">So klappt es endlich mit dem Abnehmen</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <img class="rounded-circle img-fluid" src="/assets/img/about-rezepte.jpg" alt="Rezeptauswahl">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>1. Rezeptauswahl</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Wähle wöchentlich aus 15 kalorienarmen Gerichten online aus.</p>
                                </div>
                            </div>
                        </li>

                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="rounded-circle img-fluid" src="/assets/img/about-lieferung.jpg" alt="Angekommene Lieferung">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>2. Lieferung</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Rezepte und Zutaten werden direkt zu dir nach Hause geliefert.</p>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="timeline-image">
                                <img class="rounded-circle img-fluid" src="/assets/img/about-kochen.jpg" alt="Kochvorgang">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>3. Kochen</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Innerhalb von 30 Minuten frisch & gesund kochen.</p>
                                </div>
                            </div>
                        </li>

                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="rounded-circle img-fluid" src="/assets/img/about-geniessen.jpg" alt="frisch zubereitetes Gericht">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>4. Genießen</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Genieß dein selbstgekochtes Dinner und nimm gleichzeitig ab.</p>
                                </div>
                            </div>
                        </li>

                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <h4>Endlich
                                    <br>Ziel erreicht!
                                    <br><img class="heart-icon" src="/assets/img/heart-solid.svg" alt="Hey new Me Love">
                                </h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Rezensionen -->
    <section class="bg-light page-section" id="review">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">Rezensionen</h2>
                    <h3 class="section-subheading text-muted">So zufrieden sind unsere Kunden</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="review-client">
                        <img class="mx-auto rounded-circle" src="/assets/img/schilcher-julia.jpg" alt="">
                        <h4>Julia Schilcher</h4>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="review-client">
                        <img class="mx-auto rounded-circle" src="/assets/img/melle-thomas.jpg" alt="">
                        <h4>Thomas Melle</h4>
                        <p class="text-muted">Accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit.</p>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="review-client">
                        <img class="mx-auto rounded-circle" src="/assets/img/schuhbert-corinna.jpg" alt="">
                        <h4>Corinna Schuhbert</h4>
                        <p class="text-muted">At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter -->
    <section class="page-section" id="newsletter">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">Newsletter</h2>
                    <h3 class="section-subheading">Immer auf dem neuesten Stand. Erhalte regelmäßig News von uns.</h3>
                    <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="">Newsletter bestellen</a>
                </div>
            </div>
        </div>
    </section>
    </body>

</template>
