
@extends('base')
@section('content')
<div class="container">
    <h1 class="text-center mt-5">Poster une nouvelle Action</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <form method="POST" action="#">
        @csrf
        <div class="col-12">
            <div class="form-group">
                <label>TITRE</label>
                <input type="text" name="title" class="form-controller" placeholder="Titre de votre action">
            </div>
        </div>

        <div class="col-12">
            <div class="form-group">
                <label>Date Action</label>
                <input type="text" name="title" class="form-controller" placeholder="Titre de votre action">
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label>Contenu</label>
                <input type="text" name="title" class="form-controller" placeholder="Titre de votre action">
            </div>
        </div>

        <div class="col-12">
            <div class="form-group">
                <label>Adresse de l'action</label>
                <input type="text" name="title" class="form-controller" placeholder="Titre de votre action">
            </div>
        </div>

        <div class="col-12">
            <div class="form-group">
                <label>Image</label>
                <img src="">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>
</div>
@endsection
