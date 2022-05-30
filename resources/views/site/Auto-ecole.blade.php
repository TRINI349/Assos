
@extends("layouts.user")
@section('titre')
    Auto-Ecole
@endsection
@section('contenu')
    <!-- 2nd section: -->
   <!-- <html>

    <body>
<section class="container">
    <div class="row">
        <div class=" col-sm-12 col-md-6">
            <div>
                <h1>AUTO ECOLE social EMMAÜS SYNERGIE</h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class=" col-sm-12 col-md-6">
                <p>L’auto-ecole Emmaüs-synergie a ouvert ces portes en septembre 2019.
                    En tant qu’auto-école sociale nous avons vocation a permettre à des personnes qu’n’aurais pas la possiblité
                    de passé leurs permis de conduire sur une auto-école classique de faire cette formation chez nous.
                </p>
        </div>
    </div>


        <!-- 3rd section carousel
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

    </html>-->
<html>

    <body>
        <section class="global1 container-fluid bg-light mt-5">
            <div class="row">
                <div class="mx-auto col-sm-12 col-md-6">
                    <div class="bloctitre m-5">
                        <h1>AUTO ECOLE SOCIAL EMMAÜS SYNERGIE</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="mx-auto col-sm-12 col-md-6">
                    <div class="blocP ">
                        <p>L’auto-ecole Emmaüs-synergie a ouvert ces portes en septembre 2019. En tant qu’auto-école sociale nous avons vocation a permettre à des personnes qu’n’aurais pas la possiblité de passé leurs permis de conduire sur une auto-école classique
                            de faire cette formation chez nous.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="global2">
            <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="3000">
                        <img src="images/image1.JPG " class="d-block w-100" alt="...">
                        <!--<div class="carousel-caption d-none d-md-block">
                      <h5>First slide label</h5>
                      <p>Some representative placeholder content for the first slide.</p>
                    </div>-->
                    </div>
                    <div class="carousel-item" data-bs-interval="3000">
                        <img src="images/Chantier.fresque1.JPG" class="d-block w-100" alt="...">
                        <!--<div class="carousel-caption d-none d-md-block">
                      <h5>Second slide label</h5>
                      <p>Some representative placeholder content for the second slide.</p>
                    </div>-->
                    </div>
                    <div class="carousel-item" data-bs-interval="3000">
                        <img src="images/chantier.fresque2.JPG" class="d-block w-100" alt="...">
                        <!-- <div class="carousel-caption d-none d-md-block">
                      <h5>Third slide label</h5>
                      <p>Some representative placeholder content for the third slide.</p>
                    </div>-->
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
        <section class="bloc1 container-fluid bg-light mt-5">
            <div class="row">
                <div class="mx-auto col-ms-12 col-md-6 col-lg-6">
                    <div class=" bloc2TITRE my-5">
                        <h2>NOS BENIFICIAIRES</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="mx-auto col-ms-12 col-md-6 col-lg-6">
                    <div class="bloc3P ">

                        <span><strong><em>PAS D'INSCRIPTION MAIS DES PREINSCRIPTIONS</em></strong></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="mx-auto col-ms-12 col-md-6 col-lg-6">
                    <div class="bloc4P my-4">
                        <p>En effet, tous nos bénificiares ont été orienté par une structure d'accompagnement locale ( Mission locale, Assistante sociale, Educateur...).<br> Chaque candidature est étudiée en détail afin de déterminer si la personne peut intégrer
                            notre dispositif de formation.<br> Les rentrées de formation s'éffectues par groupe afin de faciliter les apprentissages grâce aux intéractions .
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="container-fluid">
            <div class="row">
                <div class="titreFor mt-5  col-ms-12 col-md-6 col-lg-6 ">
                    <div>
                        <h2>NOTRE FORMATION</h2>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div row class="container-fluid bloCode  ">
                <div class="col-ms-12 col-md-6 col-lg-6  ">
                    <div class="Imgcode">
                        <img src={{asset('images/coderou.png')}} class="imCode" alt=" ">
                    </div>
                </div>
                <div class="col-ms-12 col-md-6 col-lg-6">
                    <div class="pCode">
                        <h3 class="pb-4">COURS DE CODE EN PRESENTIEL</h3>

                        <p>Pendant plusieures mois les bénificaires assistent à plusieures cours de codes en groupe dispensée par un enseigant de la conduite.</p>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="row container-fluid bloCode">
                <div class="col-ms-12 col-md-6 col-lg-6">
                    <div class="pCode2">
                        <h3 class="titreSimu">PROGRAMME DE CONDUITE EN SIMULATEUR</h3>
                        <p>Une fois la code en poche, les apprenants éffectuent un programme de leçons sur notre simulateur de conduite.<br> C’est une premiére approche de régle de base de la conduite:<br> Tenue de volant, passage de vitesse, changement de direction
                            , dépassement...
                        </p>
                    </div>
                </div>
                <div class="col-ms-12 col-md-6 col-lg-6">
                    <div class="Imgsimu">
                        <img src={{asset("images/simulateur.jpg" )}} class="Imgsimu" alt="simulateur ">
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="row container-fluid bloCode">
                <div class="col-ms-12 col-md-6 col-lg-6">
                    <div class="ImgVoitu">
                        <img src={{asset("images/VOITURE.jpg")}} class="ImgVoit" alt=" voiture auto-ecole">
                    </div>
                </div>
                <div class="col-ms-12 col-md-6 col-lg-6">
                    <div class="pCode3">
                        <h3 class="titreVoitu">COURS DE CONDUITE EN VEHICULE</h3>
                        <p>L’apprenant éffectue des heures de conuite avec le moniteur agrée dans un véhicule automatique ou manuel.<br> l’objectif est de préparer l’apprenant au mieux à l’examen de conduite.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="bloc3 container-fluid  bg-light ">
            <div class="row">
                <div class=" mx-auto text-center col-ms-12 col-md-6 col-lg-6">
                    <h2 class="px-5 pt-5">
                        ACCOMPAGNEMENT SOCIO PROFESSIONEL
                    </h2>
                </div>
            </div>
            <div class="row ">
                <div class=" mx-auto mb-5 pt-4  col-ms-12 col-md-6 col-lg-6">
                    <div>
                        <p class="auto text-center pcode5  ">En parraléle de la formation permis de conduire l’apprenant bénificie d’un accompagnement<br> pour l’aidé dans ces démarches sociale ,administratif de soutien de formation et prefossionel ...</p>
                    </div>
                </div>
            </div>
        </section>
        <script src="bootstrap-5.1.3-dist/js/bootstrap.bundle.js">
        </script>
    </body>

    </html>

@endsection
