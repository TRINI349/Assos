@extends("layouts.admin")
@section("titre")
Ajout D'une Action
@endsection

@section("contenu")
<div class="container my-2">
    <div class="col-12 col-sm-10 col-md-6 col-lg-4 mx-auto">
        <h1>Fomulaire d'ajout d'une Action</h1>
        <form action="/action" method="post" enctype="multipart/form-data">
            @csrf

            <div class="row mb-2">
                <label for="activite">ACTIVITE</label>
                <select name="idActivites" class="form-control" id="activite" required>
                    <option disabled  selected>Veuillez selectionnez une activite</option>
                    @foreach ($activites as $uneActivite)
                    <option value="{{$uneActivite->id}}">{{$uneActivite->nomVille}} : {{$uneActivite->type}}</option>
                    @endforeach
                </select>
                @error("idActivites")
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>

            <div class="row mb-2">
                <label for="titre">TITRE</label>
                <input name="titre" minlength="2" maxlength="100" required type="text" class="form-control" id="titre"
                    placeholder="le titre de l'action">
                @error("titre")
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>

            <div class="row mb-2">
                <label for="dateAction">DATE ACTION</label>
                <input name="dateAction" min="2021-01-01" required type="date" class="form-control" id="dateAction"
                    placeholder="indiquer la date de l'action">
                    <label for="start">Start date:</label>
                @error("dateAction")
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>

            <div class="row mb-2">
                <label for="adresseAction">ADRESSE ACTION</label>
                <input name="adresseAction" minlength="4" required type="" class="form-control" id="adresseAction"
                    placeholder="indiquer l'adresse de l'action">
                    <!--Pour afficher les messages d'erreurs pour les differents chanps on peut utiliser la directive error-->
                @error("adresseAction")
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>

            <div class="row mb-2">
                <label for="contenu">CONTENUE</label>
                <input name="contenu" minlength="4" required type="" class="form-control" id="contenu"
                    placeholder="indiquer le contenue de l'action">
                    <!--Pour afficher les messages d'erreurs pour les differents chanps on peut utiliser la directive error-->
                @error("contenu")
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>

            <div class="row mb-2">
                <label for="image">Image</label>
                <input name="image"  type="file" accept="image" class="form-control" id="image" placeholder="Rechercher une image">
                @error("image")
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>



            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection
