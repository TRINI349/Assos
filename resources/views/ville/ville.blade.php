@extends("layouts.base")

@section("titre")
Gestion des villes
@endsection

@section("contenu")
<h1 class="my-2">Les villes</h1>
<a class="btn btn-primary mb-2" href="ville/createVille">Ajouter une nouvelle ville</a>
 <table class="table">
     <thead>
         <tr>
            <th>Id</td>
            <th>NOM</td>
         </tr>
     </thead>
     <tbody>
         @foreach ($villes as $uneVille )
            <tr>
                <td>{{$uneVille->id}}</td>
                <td>{{$uneVille->nom}}</td>
                <td class="col-4 col-lg-3">
                    <div class="row">
                    <a class="btn btn-primary col mx-2" href="">Modifier</a>
                    <form class="col row mx-2" action="" method="post">

                        @csrf
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
