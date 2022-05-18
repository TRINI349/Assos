@extends('layouts.user')
@section('titre')
PREVENTION-SPECIALISEE
@endsection
@section('contenu')
<section class=" globalPS container-fluid">
    <div class="row ">
        <div class=" blocPS col mx-12 md-6 lg-6">
            <div class="titPS">
                <h1>EQUIPE DE PREVENTION SPECIALISEE</h1>
            </div>
            <div class="PARPS">
                <p>

                    La Prévention Spécialisée relève des missions de l’Aide Sociale à l’Enfance, placée sous la responsabilité des Départements. Elle est une forme d’action éducative en direction des jeunes et des groupes de jeunes, âgés de 12 à 25 ans, qui peuvent être
                    en rupture ou en souffrance, en voie de marginalisation ou déjà marginalisés. Fondée sur la libre adhésion des jeunes et de leur famille, cette intervention éducative vise à développer leur autonomie et à favoriser leur inscription
                    dans la société et leur accès au droit commun. Cette présence continue sur un territoire, permet aux professionnels de la prévention spécialisée d’entrer en contact avec des adolescents et des jeunes adultes, qui n’adhèrent pas,
                    ou peu, aux accompagnements habituels dédiés à la jeunesse (écoles, mission locales, centre sociaux, clubs sportifs etc.) Articulant accompagnements individuels et travail sur les groupes, les professionnels de la prévention spécialisée,
                    déploient des outils et des pratiques « sur-mesure », adaptés aux spécificités de ces jeunes et de leurs territoires de résidence
                </p>
            </div>
        </div>
        <div class="col mx-12 md-6 lg-6 ">
            <div>
                <img src="images/territoire[1766].jpg" id="imagePS" alt="carte">
            </div>
        </div>
    </div>
</section>
<section class="GlobalIM">
    <div class="row container-fluid">
        <div class="col blocim mx-12 md-6 lg-6">
            <div>
                <h1 class=" titreIM text-center">
                    NOS MODES D'INTERVENTION ET MISSIONS
                </h1>
            </div>
        </div>
        <div class="row container imageIM">
            <div class="col ms-12 md-6 lg-6 ">
                <div>
                    <img src="images/Chantier.fresque1.JPG" id="imageIM" alt="chantier">
                </div>
            </div>
        </div>
    </div>
    <div class="row container-fluid IMPARA">
        <div class="col ms-12 md-6 lg-6">
            <div class="blocIM container-fluid">
                <p>
                    <strong> Les éducateurs fondent leur pratique sur une présence de proximité :</strong><br> travail de rue dans l’espace public, présence dans les structures et lors des évènements de quartier. <br>Immergées dans le milieu de vie
                    des jeunes, les équipes de Prévention Spécialisée développent et soutiennent des actions de développement social local telles que des fêtes de quartier, la mise en œuvre d’instances ou d’actions citoyennes, le soutien d’associations
                    d’habitants ou encore des actions d’embellissement du quartier.<br> <strong>Travail de rue :</strong><br> Les éducateurs sont au contact direct des populations sur leurs lieux de vie.<br> L’accompagnement éducatif :<br> Accompagner
                    le jeune dans toutes les démarches pour lui permettre d’avancé dans son projet sociaux professionnel.<br> <strong>Les actions collectives :</strong><br> Construire des actions de groupes afin de travailler sur un projet commun.<br>                        <strong>Les chantiers éducatifs :</strong><br> Réaliser des petites missions de travail avec les jeunes pour leurs apporter une expérience professionnel.
                    <br> <strong>Les actions solidaires :</strong><br> Sensibiliser les jeunes à la solidarité en leurs faisant participer à des actions de soutiens.
                </p>
            </div>

        </div>
    </div>
    </div>
</section>
<section class="globalSOS">
    <div class="row container-fluid">
        <div class="col ms-12 md-6 lg-6  SOSTIT">
            <div>
                <h2>SOUTIEN A L'ASSOCIATION SOS BOITE DE LAIT</h2>
            </div>
        </div>
    </div>
    <div class=" SOSIM row container">
        <div class="col ms-12 md-6 lg-6">
            <div>
                <img src="images/20200310_171747.jpg" class="d-block w-100 px-5" alt="">
            </div>
        </div>
        <div class="col ms-12 md-6 lg-6">
            <div>
                <img src="images/20200310_171756.jpg" class="d-block w-100 px-5" alt="">
            </div>
        </div>
        <div class="col ms-12 md-6 lg-6">
            <div>
                <img src="images/20220126_160206 (003).jpg" class="d-block w-100 px-5" alt="">
            </div>
        </div>
    </div>
    <div class="row container SOSPAR">
        <div class="blocSOS col ms-12 md-6 lg-6">
            <div>
                <P>
                    Réalisation de colis alimentaires avec des jeunes afin d’être expédier<br> par la poste ou aviation sans frontières vers les orphelinats sur le continent africain.
                </P>
            </div>
        </div>
    </div>
    <!--avec bcrypt il crer une clé de 10 nombreset le reste c est ton hash-->
</section>
@endsection
