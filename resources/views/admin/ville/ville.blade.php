@extends("layouts.admin")

@section("titre")
Gestion des villes
@endsection

@section("contenu")
<h1 class="display-4 my-5"><strong>Les villes</strong></h1>
<a class="ajout btn btn-dark ml-5" href="ville/create">Ajouter une ville</a>
 <table class="table my-4 text-dark">
     <thead>
         <tr>
            <th>Id</td>
            <th>NOM</td>
         </tr>
     </thead>
     <tbody>
         @foreach ($lesVilles as $uneVille )
            <tr>
                <td>{{$uneVille->id}}</td>
                <td>{{$uneVille->nom}}</td>
                <td class="col-4 col-lg-3">
                    <div class="row">
                    <a class="btn btn-dark col mx-2" href="ville/{{$uneVille->id}}/edit">Modifier</a>
                <form class="col row mx-2" action="ville/{{$uneVille->id}}" method="post">

                        @csrf
                        @method("delete")
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
