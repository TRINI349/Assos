@extends("layouts.admin")

@section("titre")
Gestion des roles
@endsection

@section("contenu")
<h1 class="my-2">Les differents roles</h1>
<a class="btn btn-primary mb-2" href="Role/create">Ajouter un nouveau role</a>
 <table class="table my-4 text-dark">
     <thead>
         <tr>
            <th>Id</td>
            <th>NOM</td>
         </tr>
     </thead>
     <tbody>
         @foreach ($roles as $unRole )
            <tr>
                <td>{{$unRole->id}}</td>
                <td>{{$unRole->nom}}</td>
                <td class="col-4 col-lg-3">
                    <div class="row">
                    <a class="btn btn-primary col mx-2" href="Role/{{$unRole->id}}/edit">Modifier</a>
                    <form class="col row mx-2" action="Role/{{$unRole->id}}" method="post">

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
