@extends('layouts.base')
@section('titre')
    Dashboard
@endsection
@section('contenu')


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>


    <!-- Custom styles for this template -->




<div class="container-fluid ">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark  sidebar collapse">
      <div class="position-sticky pt-3 mt-5">
        <ul class="nav flex-column">
          <li class="nav-item mb-3">
            <a class="nav-link text-primary   active" aria-current="page" href="#">
              <span data-feather="home" ></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item mb-3">
            <a class="nav-link text-primary" href="#">
              <span data-feather="file"></span>
              ACTION
            </a>
          </li>
          <li class="nav-item mb-3">
            <a class="nav-link text-primary" href="">
              <span data-feather="shopping-cart"></span>
             ACTIVITES
            </a>
          </li>
          <li class="nav-item mb-3">
            <a class="nav-link text-primary" href="#">
              <span data-feather="users"></span>
            VILLE
            </a>
          </li>
          <li class="nav-item mb-3">
            <a class="nav-link text-primary" href="#">
              <span data-feather="bar-chart-2"></span>
             RAPPORTS DES ACTIVITES
            </a>
          </li>
          <li class="nav-item mb-3">
            <a class="nav-link text-primary" href="#">
              <span data-feather="layers"></span>
             PARTENAIRES
            </a>
          </li>
          <li class="nav-item mb-3">
            <a class="nav-link text-primary" href="#">
              <span data-feather="layers"></span>
            ROLE
            </a>
          </li>
          <li class="nav-item mb-3">
            <a class="nav-link text-primary" href="#">
              <span data-feather="layers"></span>
            USERS
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2 text-primary">Dashboard</h1>
      </div>
    </main>
  </div>
</div>
@endsection


