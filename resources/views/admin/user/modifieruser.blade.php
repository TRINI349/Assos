@extends("layouts.admin")
@section("titre")
Modification D'un utulisateur
@endsection

@section("contenu")
<div class="container my-2">
    <div class="col-12 col-sm-10 col-md-6 col-lg-4 mx-auto">
        <h1>Fomulaire de modification des utulisateurs</h1>
        <form action="/user/{{$unUser->id}}" method="post" enctype="multipart/form-data">
            @csrf
            @method("put")

            <input type="hidden" name="id" value="{{$unUser->id}}">
            <div class="row mb-2">
                <label for="nom">NOM</label>
                <input name="nom" minlength="2" maxlength="100" required type="text" class="form-control" id="nom"
                    placeholder="l'utilisateur" value="{{$unUser->nom}}">
                @error("nom")
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>

            <div class="row mb-2">
                <label for="prenom">PRENOM</label>
                <input name="prenom" minlength="2" maxlength="100" required type="text" class="form-control" id="prenom"
                    placeholder="l'utulisateur" value="{{$unUser->prenom}}">
                @error("prenom")
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>

            <div class="row mb-2">
                <label for="email">E-MAIL</label>
                <input name="email" minlength="2" maxlength="100" required type="email" class="form-control" id="email"
                    placeholder="Le email" value="{{$unUser->email}}">
                @error("email")
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection
