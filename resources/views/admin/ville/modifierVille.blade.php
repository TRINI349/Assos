@extends("layouts.admin")
@section("titre")
Modification D'une Ville
@endsection

@section("contenu")
<div class="container my-2">
    <div class="col-12 col-sm-10 col-md-6 col-lg-4 mx-auto">
        <h1 class="titre py-5">Modifier une Ville</h1>
        <form action="/ville/{{$uneVille->id}}" method="post" enctype="multipart/form-data">
            @csrf
            @method("put")

            <input type="hidden" name="id" value="{{$uneVille->id}}">
            <div class="row mb-2">
                <label for="nom">NOM</label>
                <input  value="{{old("nom")}}"name="nom"
                 required type="text" class="form-control" id="nom"
                    placeholder="le titre de l'action" value="{{$uneVille->nom}}">
                @error("nom")
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-dark my-5">Submit</button>
        </form>
    </div>
</div>
@endsection
