@extends("base")
@section("titre")
Modification D'un Rapport d'activite
@endsection

@section("contenu")
<div class="container my-2">
    <div class="col-12 col-sm-10 col-md-6 col-lg-4 mx-auto">
        <h1>Fomulaire de modification d'un rapport d'activite</h1>
        <form action="/RapportsDesActivites/{{$unRapportsDesActivites->id}}" method="post" enctype="multipart/form-data">
            @csrf
            @method("put")

            <input type="hidden" name="id" value="{{$unRapportsDesActivitest->id}}">
            <div class="row mb-2">
                <label for="annee">ANNEE</label>
                <input name="annee" minlength="2" maxlength="100" required type="text" class="form-control" id="annee"
                    placeholder="l'année du rapport de l'activite" value="{{$unRapportsDesActivites->annee}}">
                @error("annee")
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>

            <div class="row mb-2">
                <label for="lien fichier">LIEN FICHIER</label>
                <input name="lien fichier" min="0" required type="number" class="form-control" id="lien fichier"
                    placeholder="indique le lien du fichier" value="{{$unRapportsDesActivites->lienFichier}}">
                @error("lien fichier")
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection
