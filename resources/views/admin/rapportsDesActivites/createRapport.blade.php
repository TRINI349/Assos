@extends("layouts.admin")
@section("titre")
Ajout D'un Rapport d'activite
@endsection

@section("contenu")
<div class="container my-2">
    <div class="col-12 col-sm-10 col-md-6 col-lg-4 mx-auto">
        <h1 class="ajout3 py-5">Ajout d'un rapport</h1>
        <form action="/rapportsDesActivites" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row mb-2">
                <label for="annee">ANNEE</label>
                <input value="{{old("annee")}}" name="annee" minlength="2" maxlength="100" required type="text" class="form-control" id="annee"
                    placeholder="l'année du rapport">
                @error("annee")
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>

            <div class="row mb-2">
                <label for="lien">LIEN</label>
                <input value="{{old("lien")}}" name="lien"  type="text" class="form-control" id="lien"
                    placeholder="indiquer le lien du fichier">
                @error("lien")
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="row mb-2">
                <label for="activite_id">ACTIVITE</label>
                <select name="activite_id" class="form-control" id="activite_id" required>
                    <option disabled  selected>Veuillez selectionnez une activite</option>
                    @foreach ($lesActivites as $uneActivite)
                    <option value="{{$uneActivite->id}}">{{$uneActivite->nomVille}} : {{$uneActivite->type}}</option>



                    @endforeach
                </select>
                @error("activite_id")
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-dark my-5">Submit</button>
        </form>
    </div>
</div>
@endsection
