@extends("layouts.admin")
@section("titre")
Modification D'un Rapport d'activite
@endsection

@section("contenu")
<div class="container my-2">
    <div class="col-12 col-sm-10 col-md-6 col-lg-4 mx-auto">
        <h1>Fomulaire de modification d'un rapport d'activite</h1>
        <form action="/rapportsDesActivites/{{$unRapportsDesActivites->id}}" method="post" enctype="multipart/form-data">
            @csrf
            @method("put")

            <input type="hidden" name="id" value="{{$unRapportsDesActivites->id}}">
            <div class="row mb-2">
                <label for="annee">ANNEE</label>
                <input name="annee" value="{{$unRapportsDesActivites->annee}}" minlength="2" maxlength="100" required type="text" class="form-control" id="annee"
                    placeholder="l'année du rapport">
                @error("annee")
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>

            <div class="row mb-2">
                <label for="lien">LIEN</label>
                <input name="lien" value="{{$unRapportsDesActivites->lien}}"  type="text" class="form-control" id="lien"
                    placeholder="indiquer le lien du fichier">
                @error("lien")
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="row mb-2">
                <label for="activite">ACTIVITE</label>
                <select name="idActivites"  class="form-control" id="activite">
                    @foreach ($activites as $uneActivite)
                    <option selected="{{$unRapportsDesActivites->idActivites==$uneActivite->id}}" value="{{$uneActivite->id}}">{{$uneActivite->nomVille}} : {{$uneActivite->type}}</option>



                    @endforeach
                </select>
                @error("activite")
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection
