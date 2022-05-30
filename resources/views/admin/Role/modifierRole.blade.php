@extends("layouts.admin")
@section("titre")
Modification Du Role
@endsection

@section("contenu")
<div class="container my-2">
    <div class="col-12 col-sm-10 col-md-6 col-lg-4 mx-auto">
        <h1 class="titre py-5">Modifier un role</h1>
        <form action="/Role/{{$unRole->id}}" method="post" enctype="multipart/form-data">
            @csrf
            @method("put")

            <input type="hidden" name="id" value="{{$unRole->id}}">
            <div class="row mb-2">
                <label for="nom">NOM</label>
                <input value="{{old("nom")}}" name="nom" minlength="2" maxlength="100" required type="text" class="form-control" id="nom"
                    placeholder="le role" value="{{$unRole->nom}}">
                @error("nom")
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-dark my-5">Submit</button>
        </form>
    </div>
</div>
@endsection
