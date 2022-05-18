@extends("layouts.admin")
@section("titre")
Ajout D'une Action
@endsection

@section("contenu")
<div class="container my-2">
    <div class="col-12 col-sm-10 col-md-6 col-lg-4 mx-auto">
        <h1>Fomulaire d'ajout d'une Action</h1>
        <form action="/action" method="post" enctype="multipart/form-data">
            <!--pour le traitement c est que on post pour que le traitement soit sécuriser-->
            <!--a chaque fois qu'on demande des infos de la base de donnée ou de les modifier ou de les supprimer donc à chaque appel au serveur faut le faire en post -->
            <!--donc tous ce qu va vers la base de donnée ou le serveur va en post-->
            <!--et pour tous ce qui vient de la base de donné c est en get comme pour  afficher-->
            @csrf

            <div class="row mb-2">
                <label for="activite">ACTIVITE</label>
                <select name="idActivites" class="form-control" id="activite">
                    <option disabled  selected>Veuillez selectionnez une activite</option>
                    <!--toutes les activites une par une-->
                    @foreach ($activites as $uneActivite)
                    <option value="{{$uneActivite->id}}">{{$uneActivite->nomVille}} : {{$uneActivite->type}}</option>
                    <!---->
                    @endforeach
                </select>
                <!--pour afficher l'erreur et si je met le required il m'affiche pas le message  -->
                @error("idActivites")
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>

            <div class="row mb-2">
                <label for="titre">TITRE</label>
                <input name="titre" minlength="2" maxlength="100"  type="text" class="form-control" id="titre"
                    placeholder="le titre de l'action">
                @error("titre")
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>

            <div class="row mb-2">
                <label for="dateAction">DATE ACTION</label>
                <input name="dateAction" min="2021-01-01" type="date" class="form-control" id="dateAction"
                    placeholder="indiquer la date de l'action">
                    <label for="start">Start date:</label>
                @error("dateAction")
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>

            <div class="row mb-2">
                <label for="adresseAction">ADRESSE ACTION</label>
                <input name="adresseAction" minlength="4"  type="" class="form-control" id="adresseAction"
                    placeholder="indiquer l'adresse de l'action">
                    <!--Pour afficher les messages d'erreurs pour les differents chanps on peut utiliser la directive error-->
                @error("adresseAction")
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>

            <div class="row mb-2">
                <label for="contenu">CONTENUE</label>
                <input name="contenu" minlength="4"  type="" class="form-control" id="contenu"
                    placeholder="indiquer le contenue de l'action">
                    <!--Pour afficher les messages d'erreurs pour les differents chanps on peut utiliser la directive error-->
                @error("contenu")
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>

            <div class="row mb-2">
                <label for="image">Image</label>
                <input name="image"  type="file" accept="image" class="form-control" id="image" placeholder="Rechercher une image">
                @error("image")
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>



            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection
