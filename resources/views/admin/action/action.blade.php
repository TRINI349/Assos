
@extends("layouts.admin")

@section("titre")
Gestion des actions
@endsection

@section("contenu")
<div class="container">
        <h1 class="display-4 my-5"><strong>Les actions</strong></h1>
        {{-- <div class="action row justify-content-right w-75 gx-3"> --}}
        <a class="ajout btn btn-dark mb-2" href="action/create">Ajouter une Action</a>
        <table class="table text-dark">
            <thead>
                <tr>
                    <th>Id</td>
                    <th>TITRE</td>
                    <th>DATE ACTION</td>
                    <th>ADRESSE ACTION</td>
                    <th>CONTENU</td>
                    <th>IMAGE</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($lesActions as $uneAction )  <!--$actions c est la variable "actions" dans le controlleure et quand lui a attribuer une valeur $actions-->
                    <tr>
                        <td>{{$uneAction->id}}</td><!-- avec laravel les attributs appellent les getteur et setteur tous seul-->
                        <td>{{$uneAction->titre}}</td>
                        <td>{{$uneAction->dateAction}}</td>
                        <td>{{$uneAction->adresseAction}}</td>
                        <td>{{$uneAction->contenu}}</td>
                        <td><img class="w-50 gy-5" src="/storage/{{$uneAction->image}}"></td>
                        <td class="col-4 col-lg-3">
                            <div class="row">
                            <a class="btn btn-dark col mx-2 my-3" href="action/{{$uneAction->id}}/edit">Modifier</a>
                            <form class="col row mx-2" action="action/{{$uneAction->id}}" method="post">

                                @csrf
                                @method("delete")
                                <input type="hidden" name="id">
                                <button class="btn btn-warning my-3">Supprimer</button>
                            </form>
                        </div>
                        </td>
                    </tr>
                @endforeach




            </tbody>
        </table>
        </div>
    </div>
@endsection
