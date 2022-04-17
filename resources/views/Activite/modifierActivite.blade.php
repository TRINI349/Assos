@extends("base")
@section("titre")
Modification D'une Activite
@endsection

@section("contenu")
<div class="container my-2">
    <div class="col-12 col-sm-10 col-md-6 col-lg-4 mx-auto">
        <h1>Fomulaire de modification d'une Activite</h1>
        <form action="/Activite/{{$lePays->id}}" method="post" enctype="multipart/form-data">
            @csrf
            @method("put")

            <input type="hidden" name="id" value="{{$lePays->id}}">
            <div class="row mb-2">
                <label for="type">TYPE</label>
                <input name="type" minlength="2" maxlength="100" required type="text" class="form-control" id="type"
                    placeholder="le type de l'activite" value="{{$lePays->type}}">
                @error("type")
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>

            <div class="row mb-2">
                <label for="nom">NOM</label>
                <input name="nom" min="0" required type="number" class="form-control" id="nom"
                    placeholder="indique le nom de  l'activite" value="{{$lePays->nom}}">
                @error("nom")
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection
