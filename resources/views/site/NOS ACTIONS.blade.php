@extends('layouts.userBase')
@section('titre')
NOS ACTIONS
@endsection
@section('contenu')


    <div class="container-fluid">
        <h1 class="display-3 text-center">NOS ACTIONS</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4">

            @foreach ($actions as $uneAction)

                <div class="col">
                    <div class="card">
                        <img src={{$actions->image}} class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$actions->titre}}</h5>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">{{$actions->date}}</li>
                                <li class="list-group-item">{{$actions->adresseAction}}</li>
                            </ul>
                            <p class="card-text">{{$actions->contenu}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center mt-5">
            {{$actions->links()}}
        </div>
    </div>
    @endsection
