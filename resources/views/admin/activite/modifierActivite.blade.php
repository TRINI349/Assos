@extends("layouts.admin")
@section("titre")
Modification D'une Activite
@endsection

@section("contenu")
<div class="container my-2">
    <div class="col-12 col-sm-10 col-md-6 col-lg-4 mx-auto">
        <h1 class="titre py-5">Modifier une Activite</h1>
        <form action="/activite/{{$uneActivite->id}}" method="post" enctype="multipart/form-data">
            @csrf
            @method("put")

            <input type="hidden" name="id" value="{{$uneActivite->id}}">
            <div class="row mb-2">
                <label for="type">TYPE</label>
                <input  value="{{old("type")}}" name="type" minlength="2" maxlength="100" required type="text" class="form-control" id="type"
                    placeholder="le type de l'activite" value="{{$uneActivite->type}}">
                @error("type")
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>

            <div class="row mb-2">
                <label for="nomVille">NOM Ville</label>
                <input value="{{old("nomVille")}}" name="nomVille"  required type="text" class="form-control" id="nomVille"
                    placeholder="indique le nom de  l'activite" value="{{$uneActivite->nomVille}}">
                @error("nomVille")
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-dark">Submit</button>
        </form>
    </div>
</div>
@endsection
