@extends("layouts.admin")

@section("titre")
Gestion des roles
@endsection

@section("contenu")
<h1  class="display-4 my-5"><strong>Les Roles</strong></h1>
<a class="ajout btn btn-dark my-5" href="Role/create">Ajouter un nouveau role</a>
 <table class="table my-4 text-dark">
     <thead>
         <tr>
            <th>Id</td>
            <th>NOM</td>
         </tr>
     </thead>
     <tbody>
         @foreach ($lesRoles as $unRole )
            <tr>
                <td>{{$unRole->id}}</td>
                <td>{{$unRole->nom}}</td>
                <td class="col-4 col-lg-3">
                    <div class="row">
                    <a class="btn btn-dark col mx-2" href="Role/{{$unRole->id}}/edit">Modifier</a>
                    <form class="col row mx-2" action="Role/{{$unRole->id}}" method="post">

                        @csrf
                        @method('delete')
                        <input type="hidden" name="id">
                        <button class="btn btn-warning">Supprimer</button>
                    </form>
                </div>
                </td>
            </tr>
         @endforeach

     </tbody>
 </table>
@endsection
