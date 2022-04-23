@extends("layouts.base")
@section("titre")
Ajout D'une Activite
@endsection

@section("contenu")
<div class="container my-2">
    <div class="col-12 col-sm-10 col-md-6 col-lg-4 mx-auto">
        <h1>Fomulaire d'ajout d'une Activite</h1>
        <form action="/activite" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row mb-2">
                <label for="type">TYPE</label>
                <input name="type" minlength="2" maxlength="100" required type="text" class="form-control" id="type"
                    placeholder="le type de l'activite">
                @error("type")
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>

            <div class="row mb-2">
                <label for="nom">NOM</label>
                <input name="nom" min="0" required type="number" class="form-control" id="nom"
                    placeholder="indiquer le nom de l'activite">
                @error("nom")
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection
