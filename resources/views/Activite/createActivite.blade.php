@extends("layouts.base")
@section("titre")
Ajout D'une Activite
@endsection

@section("contenu")
<div class="container my-2">
    <div class="col-12 col-sm-10 col-md-6 col-lg-4 mx-auto">
        <h1>Fomulaire d'ajout d'une Activite</h1>
        <form action="/activite" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden"  value="2" name="idVilles">

            <select name="idVilles" id="">
                @foreach ($villes as $uneVille)
                <option value="{{$uneVille->id}}">{{$uneVille->id}} : {{$uneVille->Nom}} </option>
                @endforeach
            </select>
            <div class="row mb-2">
                <label for="type">TYPE</label>
                <input name="type"  required type="text" class="form-control" id="type"
                    placeholder="le type de l'activite">
                @error("type")
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>

            <div class="row mb-2">
                <label for="nomVille">NOM Ville</label>
                <input name="nomVille" min="0" required type="text" class="form-control" id="nomVille"
                    placeholder="indiquer le nom de l'activite">
                @error("nomVille")
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection
