@extends("layouts.admin")
@section("titre")
Ajout D'un utulisateur
@endsection

@section("contenu")
<div class="container my-2">
    <div class="col-12 col-sm-10 col-md-6 col-lg-4 mx-auto">
        <h1 class="ajout3 py-5">Ajouter un utilisateur</h1>
        <form action="/user" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row mb-2">
                <label for="role_id">ROLE</label>
                <select name="role_id" class="form-control" id="role_id" required>
                    <option disabled  selected>Veuillez selectionnez un Role</option>
                    @foreach ($lesRoles as $unRole)
                    <option value="{{$unRole->id}}">{{$unRole->nom}}</option>
                    @endforeach
                </select>
                @error("role_id")
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>
<!--les names de nos input nous devons etre les meme que les attribut aux migration et aux controlleurs-->
            <div class="row mb-2">
                <label for="nom">NOM</label>
                <input name="nom" minlength="2" maxlength="100" required type="text"  class="form-control" id="nom"
                    placeholder="le nom">
                    <!--devrait correspondre au meme que le name sert pour afficher un message d'erreur-->
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
                <label for="email">E-MAIL</label>
                <input value="{{old("email")}}" name="email" minlength="2" maxlength="100" required type="email"  class="form-control" id="email"
                    placeholder="le email">
                @error("email")
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>

            <div class="row mb-2">
                <label for="password">PASSWORD</label>
                <input name="password" minlength="2" maxlength="100" required type="password"  class="form-control" id="password"
                    placeholder="le mot de passe">
                @error("password")
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>
            <button type="submit"  class="btn btn-dark my-5">Submit</button>
        </form>
    </div>
</div>
@endsection
