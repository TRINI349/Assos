@extends("layouts.admin")
@section("titre")
Ajout D'un Partenaire
@endsection

@section("contenu")
<div class="container my-2">
    <div class="col-12 col-sm-10 col-md-6 col-lg-4 mx-auto">
        <h1 class="ajout3 py-5">Ajout d'un partenaire</h1>
        <form action="/partenaire" method="post" enctype="multipart/form-data">
            @csrf

            <div class="row mb-2">
                <label for="activite_id">ACTIVITE</label>
                <select value="{{old("activite_id")}}" name="activite_id" class="form-control" id="activite_id">
                    <option disabled  selected>Veuillez selectionnez une activite</option>
                    <!--toutes les activites une par une-->
                    @foreach ($lesActivites as $uneActivite)
                    <option value="{{$uneActivite->id}}">{{$uneActivite->type}}</option>
                    <!---->
                    @endforeach
                </select>
                <!--pour afficher l'erreur et si je met le required il m'affiche pas le message  -->
                @error("activite_id")
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="row mb-2">
                <label for="type">TYPE</label>
                <input value="{{old("type")}}" name="type" min="0" required type="text" class="form-control" id="type"
                    placeholder="indiquer le type">
                @error("type")
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="row mb-2">
                <label for="nom">NOM </label>
                <input value="{{old("nom")}}" name="nom" min="0" required type="text" class="form-control" id="nom"
                    placeholder="indiquer le nom du Partenaire">
                @error("nom")
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-dark my-3">Submit</button>
        </form>
    </div>
</div>
@endsection
