@extends('layouts.userBase')
@section('titre')
AUTO ECOLE
@endsection
@section('contenu')
        <div class="titre">
            <h1>AUTO ECOLE EMMAUS SYNERGIE</h1>
            <p>L'auto-école EMMAUS SUNERGIE a ouvert ces portes en septembre 2019.<br> En tant qu'auto-école sociale nous avons vocation a permettre à des personnes qui n'aurais pas la possibilité <br>de passé leurs permis de conduite sur une auto école
                classique de faire cedtte formation chez nous .
            </p>

            <!--slider-->
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="..." class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="..." class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="..." class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            </div>
        </div>
    <section class="bloc1">
        <div>
            <h2>NOS BENIFICIAIRES</h2>
            <h3>PAS D'INSCRIPTION MAIS DES PREINSCRIPTIONS</h3>
            <p>En effet, tous nos bénificiares ont été orienté par une structure d'accompagnement locale ( Mission locale, Assistante sociale, Educateur...).<br> Chaque candidature est étudiée en détail afin de déterminer si la personne peut intégrer notre
                dispositif de formation.<br> Les rentrées de formation s'éffectues par groupe afin de faciliter les apprentissages grâce aux intéractions .
            </p>
        </div>
    </section>
    <section class="bloc2">
        <div>
            <h2>NOTRE FORMATION</h2>
        </div>
        <div>
            <h3>COURS DE CODE EN PRESENTIEL</h3>
            <img href="" alt="">
            <p>Pendant plusieures mois les bénificaires assistent à plusieures cours de codes en groupe dispensée par un enseigant de la conduite.</p>
        </div>
        <div>
            <h3>PROGRAMME DE CONDUITE EN SIMULATEUR</h3>

            <p>Une fois la code en poche, les apprenants éffectuent un programme de leçons sur notre simulateur de conduite.<br> C’est une premiére approche de régle de base de la conduite:<br> Tenue de volant, passage de vitesse, changement de direction
                , dépassement...</p>
            </p>
            <img href="" alt="">
        </div>
        <div>
            <h3>COURS DE CONDUITE EN VEHICULE</h3>
            <img href="" alt="">
            <p>L’apprenant éffectue des heures de conuite avec le moniteur agrée dans un véhicule automatique ou manuel.<br> l’objectif est de préparer l’apprenant au mieux à l’examen de conduite.</p>
        </div>
    </section>
    <section class="bloc3" >
        <h2>
            ACCOMPAGNEMENT SOCIO PROFESSIONEL
        </h2>
        <p>En parraléle de la formation permis de conduire l’apprenant bénificie d’un accompagnement<br> pour l’aidé dans ces démarches sociale ,administratif de soutien de formation et prefossionel ...</p>
        <img href="" alt="">
    </section>
@endsection

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
