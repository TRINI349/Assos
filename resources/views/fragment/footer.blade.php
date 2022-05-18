<footer class="container-fluid py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="logo-part">
                    <ul>
                        <li>
                            <img src="images/EmmausSynergie.jpg" class="w-50 logo-footer my-4">
                        </li>
                        <li>
                            <p class="my-4">
                                Adresse : 44 Avenue Lecomte,<br> 94350 Villiers Sur Marne
                            </p>
                        </li>

                        <li>
                            <p class="my-4">
                                N° SIRET: 44501098600021
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class=" text col-md-4">
                <ul>
                    <li><a href="{{URL::to('/formulaire')}}"> Nous Contacter</a></li>
                    <li>
                        <a href="{{URL::to('/NOS-PARTENAIRES')}}"> Nos Partenaires</a></li>
                    <li><a href="{{URL::to( '/MENTIONS-LEGALES')}} "> Mentions Légales</a></li>
                    <li><a href="{{URL::to( '/Politique De Confidentialité')}} "> Politique De Confidentialité</a></li>
                </ul>
            </div>
            <div class=" Departe col-md-4 ">
                <ul>
                    <li>
                        <img src="images/logoDepartement.png " href="# " class="logo-Departe my-4 " alt=" departement val de marne "></li>

                    </li>
                    <li>
                        <form méthode=action « POST »="# ">
                            <input type="search " name="rechercher " placeholder="Rechercher : ">
                            <i class="fas fa-search " id="search "></i>
                        </form>
                    </li>

                    <li>
                        <a href="# " id="teleph "></a><i class="fa-solid fa-phone my-4 "></i> : </li>

                    <li>
                        <a href="# " id="mail "></a><i class="fa-solid fa-envelope my-4 "></i> :</li>
                </ul>
            </div>
        </div>
    </div>
</footer>
