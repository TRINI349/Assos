@extends("layouts.admin")
@section("titre")
Modification D'un Rapport d'activite
@endsection
<!--en laravel l'envoie des information via le formulaire c est post ce n est pas get -->
@section("contenu")
<div class="container my-2">
    <div class="col-12 col-sm-10 col-md-6 col-lg-4 mx-auto">
        <h1 class="titre py-5">Modifier un rapport</h1>
        <form action="/rapportsDesActivites/{{$unRapportsDesActivites->id}}" method="post" enctype="multipart/form-data">
            @csrf
            @method("put")

            <input type="hidden" name="id" value="{{$unRapportsDesActivites->id}}">
            <div class="row mb-2">
                <label for="annee">ANNEE</label>
                <input value="{{old("annee")}}" name="annee" value="{{$unRapportsDesActivites->annee}}" minlength="2" maxlength="100" required type="text" class="form-control" id="annee"
                    placeholder="l'année du rapport">
                @error("annee")
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>

            <div class="row mb-2">
                <label for="lien">LIEN</label>
                <input  value="{{old("lien")}}"name="lien" value="{{$unRapportsDesActivites->lien}}"  type="text" class="form-control" id="lien"
                    placeholder="indiquer le lien du fichier">
                @error("lien")
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-dark my-5">Submit</button>
        </form>
    </div>
</div>
@endsection
