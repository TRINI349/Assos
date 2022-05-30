<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">

    <div class="container-fluid">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-2 text-warning "><img class="navbar-brand" id="logoEmmaus" src="./storage/images/EmmauslogoRPF.jpg" alt="logo"></a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item  mx-5"><a class="nav-link active text-warning" aria-current="page" href="{{URL::to('/Accueil')}}">ACCUEIL</a></li>
                <li class="nav-item  mx-5"><a class="nav-link active text-warning" aria-current="page" href="{{URL::to('/Histoire')}}">HISTOIRE</a></li>
                <li class="nav-item  mx-5"><a class="nav-link  text-warning" aria-current="page" href="{{URL::to('/pageActions')}}">NOS-ACTION</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link  text-md-center text-lg-center dropdown-toggle mx-5 text-warning" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">ACTIVITE</a>
                    <ul class="dropdown-menu bg-dark " aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item  text-warning" href="{{URL::to('/Prévention-Spécialisée')}}">PREVENTION SPECIALISEE</a></li>
                        <li><a class="dropdown-item  text-warning" href="{{URL::to('/Auto-Ecole')}}">AUTO-ECOLE</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
    </div>

</nav>

<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-bg-dark w-30" id="sidenavAccordion">
            <div class="sb-sidenav-menu bg-dark">
                <div class="nav">
                    <form method="POST" action="{{URL::to('logout')}}">
                        @csrf
                        <button class="nav-link btn text-warning mt-5">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-house"></i></div>
                            Deconnexion
                        </button>
                    </form>

                    <a class="nav-link text-warning mt-4 mb-4" href="{{URL::to('/dashboard')}}">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-lock"></i></div>
                        Dashboard
                    </a>

                    <a class="nav-link  text-warning mt-4 mb-4" href="{{URL::to('/action')}}">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-calendar"></i></div>
                        Actions
                    </a>

                    <a class="nav-link  text-warning mt-4 mb-4" href="{{URL::to('/activite')}}">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-handshake-simple"></i></div>
                        Activités
                    </a>

                    <a class="nav-link  text-warning  mt-4 mb-4" href="{{URL::to('/partenaire')}}">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-user"></i></div>
                        Partenaires
                    </a>

                    <a class="nav-link  text-warning  mt-4 mb-4" href="{{URL::to('/rapportsDesActivites')}}">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-feather-pointed"></i></div>
                        Rapports des activités
                    </a>

                    <a class="nav-link text-warning  mt-4 mb-4" href="{{URL::to('/ville')}}">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-id-card"></i></div>
                        Villes
                    </a>
@if (auth()->user()->Role->nom=="superAdmin")


                    <a class="nav-link  text-warning  mt-4 mb-4" href="{{URL::to('/user')}}">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-hand-holding-dollar"></i></div>
                        Utilisateurs
                    </a>

                    <a class="nav-link  text-warning  mt-4 mb-4" href="{{URL::to('/Role')}}">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-hand-holding-dollar"></i></div>
                        Roles
                    </a>
                    @endif
                </div>
            </div>
        </nav>
    </div>


