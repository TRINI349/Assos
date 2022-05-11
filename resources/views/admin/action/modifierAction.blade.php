@extends("layouts.admin")
@section("titre")
Modification D'une Action
@endsection

@section("contenu")
<div class="container my-2">
    <div class="col-12 col-sm-10 col-md-6 col-lg-4 mx-auto">
        <h1>Fomulaire de modification d'une Action</h1>
        <form action="/action/{{$uneAction->id}}" method="post" enctype="multipart/form-data">
            @csrf
            @method("put")

            <input type="hidden" name="id" value="{{$uneAction->id}}">
            <div class="row mb-2">
                <label for="titre">TITRE</label>
                <input name="titre" minlength="2" maxlength="100" required type="text" class="form-control" id="titre"
                    placeholder="le titre de l'action" value="{{$uneAction->titre}}">
                @error("titre")
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>

            <div class="row mb-2">
                <label for="dateAction">DATE ACTION</label>
                <input name="dateAction" min="0" required type="number" class="form-control" id="dateAction"
                    placeholder="indique la date de l'action" value="{{$uneAction->dateAction}}">
                @error("dateAction")
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>

            <div class="row mb-2">
                <label for="adresseAction">ADRESSE ACTION</label>
                <input name="adresseAction" minlength="4" required type="" class="form-control" id="adresseAction"
                    placeholder="indiquer l'adresse de l'action" value="{{$uneAction->adresseAction}}">
                @error("adresseAction")
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>

            <div class="row mb-2">
                <label for="contenue">CONTENUE</label>
                <input name="contenue" minlength="4" required type="" class="form-control" id="contenue"
                    placeholder="indiquer le contenue de l'action" value="{{$uneAction->contenue}}">
                @error("contenue")<!--Pour afficher les messages d'erreurs pour les differents chanps on peut utiliser la directive error-->
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>

            <div class="row mb-2">
                <label for="image">Image</label>
                <input name="image" type="file" accept="image" class="form-control" id="image" placeholder="Rechercher une image">
                @error("image")
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection
