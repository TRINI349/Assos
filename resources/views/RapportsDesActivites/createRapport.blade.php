@extends("layouts.base")
@section("titre")
Ajout D'un Rapport d'activite
@endsection

@section("contenu")
<div class="container my-2">
    <div class="col-12 col-sm-10 col-md-6 col-lg-4 mx-auto">
        <h1>Fomulaire d'ajout d'un rapport d'activite</h1>
        <form action="/rapportsDesActivites" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row mb-2">
                <label for="annee">ANNEE</label>
                <input name="annee" minlength="2" maxlength="100" required type="text" class="form-control" id="annee"
                    placeholder="l'année du rapport">
                @error("annee")
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>

            <div class="row mb-2">
                <label for="lien Fichier">LIEN FICHIER</label>
                <input name="lien Fichier" min="0" required type="number" class="form-control" id="lien Fichier"
                    placeholder="indiquer le lien du fichier">
                @error("lien Fichier")
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection
