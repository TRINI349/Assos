
<div class="container-fluid">
        <div id="logoImg" class="col-lg-4 align-self-start">

                <img  id="logoDesign" class="w-25" src="{{asset('images/EmmausSynergie.jpg')}}"  alt="">

        </div>
        <div class="col-lg-8" id="lconArea">

                <img class="contactIcon" src="{{asset('img/telephone-fill.svg')}}" alt="">
                <img class="contactIcon" src="{{asset('img/envelope-plus-fill.svg')}}" alt="">
                <img class="contactIcon" src="{{asset('img/person-lines-fill.svg')}}" alt="">

        </div>



    </div>
</div>

<nav class="navbar navbar-expand-lg navbar-light bg-light">

    <div class="container-fluid">

      <a class="navbar-brand" href="{{URL::to('/Accueil')}}">ACCUEIL</a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>


      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{URL::to('/Histoire')}}">HISTOIRE</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{URL::to('/NOS-ACTIONS')}}">ACTION</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">ACTIVITE</a>
          </li>


        </ul>
      </div>
    </div>
    <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
</nav>
