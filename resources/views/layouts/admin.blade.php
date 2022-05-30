<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <title>@yield('titre')</title>

    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="/admin/css/styles.css" rel="stylesheet" />
    <link href="/css/formulaireStyle.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/adfe8c5585.js" crossorigin="anonymous"></script>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="Accueil.css">
    <link rel="stylesheet" href="/css/formulaireStyle.css">
    <link rel="stylesheet" href="/css/styleAccueil.css">
    <link rel="stylesheet" href="/css/styleAction.css">
    <link rel="stylesheet" href="/css/styleAuto.css">
    <link rel="stylesheet" href="/css/styleHistoire.css">
    <link rel="stylesheet" href="/css/stylePartenaire.css">
    <link rel="stylesheet" href="/css/stylePrevention.css">
    <<link rel="stylesheet" href="/css/navbar_user.css">-->
    <!--<link rel="stylesheet" href="/css/styleFooter.css">-->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/adfe8c5585.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

</head>

<body class="sb-nav-fixed">
    @include('fragment.navbar_admin')

        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">

                    @yield('contenu')

                </div>
            </main>
        </div>

    </div>
<!--@include('fragment.footer')-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="/admin/js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="/admin/js/datatables-simple-demo.js"></script>
</body>
</html>
