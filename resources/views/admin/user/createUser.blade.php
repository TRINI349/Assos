@extends("layouts.admin")
@section("titre")
Ajout D'un utulisateur
@endsection

@section("contenu")
<div class="container my-2">
    <div class="col-12 col-sm-10 col-md-6 col-lg-4 mx-auto">
        <h1>Fomulaire d'ajout d'un utulisateur</h1>

        <div class="row mb-2">
            <label for="role">ROLE</label>
            <select name="idRole" class="form-control" id="Role" required>
                <option disabled  selected>Veuillez selectionnez un Role</option>
                @foreach ($role as $unRole)
                <option value="{{$unRole->id}}">{{$unRole->nom}}</option>
                @endforeach
            </select>
            @error("idRole")
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>

        <form action="/User" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row mb-2">
                <label for="nom">NOM</label>
                <input name="nom" minlength="2" maxlength="100" required type="text"  class="form-control" id="nom"
                    placeholder="le nom">
                @error("nom")
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>

            <div class="row mb-2">
                <label for="prenom">PRENOM</label>
                <input name="prenom" minlength="2" maxlength="100" required type="text"  class="form-control" id="prenom"
                    placeholder="le prenom">
                @error("prenom")
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>

            <div class="row mb-2">
                <label for="mail">MAIL</label>
                <input name="mail" minlength="2" maxlength="100" required type="text"  class="form-control" id="mail"
                    placeholder="le mail">
                @error("mail")
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection
