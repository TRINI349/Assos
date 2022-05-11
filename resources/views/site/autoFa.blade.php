<head>
    <link rel="stylesheet" href="<?php echo asset('cssFile/styles.css'); ?>" type="text/css">
</head>
@extends("template")
@section('titre')
    Auto ecole
@endsection
@section('contenu')
    <!-- 2nd section: -->
    <html>

    <body>

        <div class="mx-auto col-sm-12 col-md-6">
            <h1>AUTO ECOLE EMMAÜS SYNERGIE</h1>
            <p>L’auto-ecole Emmaüs-synergie a ouvert ces portes en septembre 2019.
                En tant qu’auto-école sociale nous avons vocation a permettre à des personnes qu’n’aurais pas la possiblité
                de passé leurs permis de conduire sur une auto-école classique de faire cette formation chez nous.</p>
        </div>

        <!-- 3rd section carousel -->
        <div>
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" style="padding-top: 100px"
                style="padding-bottom:50px">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/image7.jpg" class="d-block w-100 h-50" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/image6.jpg" class="d-block w-100 h-50" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/image3.jpg" class="d-block w-100 h-50" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/image4.jpg" class="d-block w-100 h-50" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/image5.jpg" class="d-block w-100 h-50" alt="...">
                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>

        <div class="mx-auto col-sm-12 col-md-6">
            <h2>NOS BENICIARES</h2>
            <h3>Pas d’inscription mais des préscriptions.</h3>
            <p> En effet, tous nos bénificiares ont été orienté par une structure d’accompagnement locale ( Mission locale, Assistante sociale, Educateur...).
                Chaque candidature est étudiée en détail afin de déterminer si la personne peut intégrer notre dispositif de formation.
                Les rentrées de formation s’éffectues par groupe afin de faciliter les apprentissages grâce aux intéractions.</p>
        </div>

        {{-- 4th section start --}}
        <div>
        <Section>
            <div><h2>NOTRE FORMATION</h2></div>
           <h3> COURS DE CODE EN PRESENTIEL </h3>
        </section>
        <section>
        <h3>PROGRAMME DE CONDUITE EN SIMULATEUR</h3>
        </section>
         </div>
        <div class="second_landing">
            <div class="row p-t" style="padding-top: 100px;">
                <div class="col-sm-12 col-md-5">
                    <img id="abbe" src="{{ asset('img/abbePhoto.PNG') }}" class="img-fluid" alt="">
                </div>
                <div class="mx-auto col-sm-12 col-md-6">
                    <h1>AUTO ECOLE EMMAÜS SYNERGIE</h1>
                    <p>à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son
                        inclusion dans des applications de mise en page de texte, comme Aldus PageMaker à la vente de
                        feuilles
                        Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son</p>
                </div>
            </div>
        </div>

        <div>
            <h3>COURS DE CONDUITE EN VEHICULE</h3>
        </div>



        <div class="second_landing">
            <div class="row p-t" style="padding-top: 100px;">

                <div class="mx-auto col-sm-12 col-md-6">
                    <h1>AUTO ECOLE EMMAÜS SYNERGIE</h1>
                    <p>à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son
                        inclusion dans des applications de mise en page de texte, comme Aldus PageMaker à la vente de
                        feuilles
                        Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son</p>
                </div>

                <div class="col-sm-12 col-md-5">
                    <img id="abbe" src="{{ asset('img/abbePhoto.PNG') }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>

        <div class="second_landing">
            <div class="row p-t" style="padding-top: 100px;">
                <div class="col-sm-12 col-md-5">
                    <img id="abbe" src="{{ asset('img/abbePhoto.PNG') }}" class="img-fluid" alt="">
                </div>
                <div class="mx-auto col-sm-12 col-md-6">
                    <h1>AUTO ECOLE EMMAÜS SYNERGIE</h1>
                    <p>à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son
                        inclusion dans des applications de mise en page de texte, comme Aldus PageMaker à la vente de
                        feuilles
                        Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son</p>
                </div>
            </div>
        </div>

        <div class="mx-auto col-sm-12 col-md-6">
            <h2>AUTO ECOLE EMMAÜS SYNERGIE</h2>
            <h3>Pas d'inscription mais des prescription</h3>
            <p>à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son
                inclusion dans des applications de mise en page de texte, comme Aldus PageMaker à la vente de
                feuilles
                Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son</p>
        </div>

        <div class="second_landing">
            <div class="row p-t" style="padding-top: 100px;">

                <div class="col-xs-6 col-sm-6 col-md-6">
                    <h3>EQUIPE DE PREVENTION SPECIALISEE</h3>
                    <br>
                    <p> l’association Emmaus-synergie dispose d’un service de
                        prévention spécialisée

                        composé d’une équipe de direction et de huit
                        éducateurs de rues.

                        Ces profotionels interviennet sur quatres téritoire</p>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <img id="abbe" src="{{ asset('img/image6.jpg') }}" class="d-block w-10 h-10" alt="">
                </div>
            </div>
        </div>

        {{-- 5th section start --}}

        <div class="fifth_landing">
            <div class="row p-t" style="padding-top: 100px;">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <img id="abbe" src="{{ asset('img/image5.jpg') }}" class="d-block w-10 h-10" alt="">
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <h3>AUTO-ECOLE SOCIALE</h3>
                    <br>
                    <p>
                        L’association Emmaus-synergie dispose d’une auto-école
                        sociale composé

                        d’un enseigant de la conduite et d’un compagant social</p>
                </div>
            </div>
        </div>

    </body>

    </html>
@endsection
