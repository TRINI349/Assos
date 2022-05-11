@extends("layouts.admin")

@section("titre")
Gestion des utilisateurs
@endsection

@section("contenu")
<h1 class="my-2">Les utilisateurs</h1>
<a class="btn btn-primary mb-2" href="user/create">Ajouter un nouvel utilisateur</a>
 <table class="table text-light">
     <thead>
         <tr>
            <th>Id</td>
            <th>NOM</td>
            <th>PRENOM</td>
         </tr>
     </thead>
     <tbody>
         @foreach ($user as $unUser )
            <tr>
                <td>{{$unUser->id}}</td>
                <td>{{$unUser->nom}}</td>
                <td>{{$unUser->prenom}}</td>
                <td class="col-4 col-lg-3">
                    <div class="row">
                    <a class="btn btn-primary col mx-2" href="user/{{$unUser->id}}/edit">Modifier</a>
                    <form class="col row mx-2" action="user/{{$unUser->id}}" method="post">

                        @csrf
                        @method('delete')
                        <input type="hidden" name="id">
                        <button class="btn btn-primary">Supprimer</button>
                    </form>
                </div>
                </td>
            </tr>
         @endforeach

     </tbody>
 </table>
@endsection
