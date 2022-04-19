@extends("base")
@section("titre")
Modification D'une Ville
@endsection

@section("contenu")
<div class="container my-2">
    <div class="col-12 col-sm-10 col-md-6 col-lg-4 mx-auto">
        <h1>Fomulaire de modification d'une Ville</h1>
        <form action="/Villes/{{$uneVille->id}}" method="post" enctype="multipart/form-data">
            @csrf
            @method("put")

            <input type="hidden" name="id" value="{{$uneVille->id}}">
            <div class="row mb-2">
                <label for="nom">NOM</label>
                <input name="nom" minlength="2" maxlength="100" required type="text" class="form-control" id="nom"
                    placeholder="le titre de l'action" value="{{$uneVille->titre}}">
                @error("nom")
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection
