<nav class="sb-topnav navbar navbar-expand navbar-dark bg-primary">

    <div class="container-fluid">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3"><img class="w-25" src="#" alt="">  Emmaus Synergie</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
    </div>

</nav>

<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu bg-primary">
                <div class="nav">
                    <form method="POST" action="{{URL::to('logout')}}">
                        @csrf
                        <button class="nav-link btn">
                            <div class="sb-nav-link-icon text-black"><i class="fa-solid fa-house"></i></div>
                            Deconnexion
                        </button>
                    </form>

                    <a class="nav-link" href="{{URL::to('/dashboard')}}">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-lock"></i></div>
                        Dashboard
                    </a>

                    <a class="nav-link" href="{{URL::to('/action')}}">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-calendar"></i></div>
                        Actions
                    </a>

                    <a class="nav-link" href="{{URL::to('/activite')}}">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-handshake-simple"></i></div>
                        Activités
                    </a>

                    <a class="nav-link" href="{{URL::to('/partenaire')}}">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-user"></i></div>
                        Partenaires
                    </a>

                    <a class="nav-link" href="{{URL::to('/rapportsDesActivites')}}">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-feather-pointed"></i></div>
                        Rapports des activités
                    </a>

                    <a class="nav-link" href="{{URL::to('/ville')}}">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-id-card"></i></div>
                        Villes
                    </a>

                    <a class="nav-link" href="{{URL::to('/user')}}">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-hand-holding-dollar"></i></div>
                        Utilisateurs
                    </a>

                    <a class="nav-link" href="{{URL::to('/Role')}}">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-hand-holding-dollar"></i></div>
                        Roles
                    </a>
                </div>
            </div>
        </nav>
    </div>
