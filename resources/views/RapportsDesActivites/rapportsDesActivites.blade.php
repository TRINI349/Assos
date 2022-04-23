@extends("layouts.base")

@section("titre")
Gestion des rapports des  activites
@endsection

@section("contenu")
<h1 class="my-2">Les rapports des activites</h1>
<a class="btn btn-primary mb-2" href="rapportsDesActivites/createRapport">Ajouter un nouveau rapport d'activite</a>
 <table class="table">
     <thead>
         <tr>
            <th>Id</td>
            <th>ANNEE</td>
            <th>LIEN FICHIER</td>
         </tr>
     </thead>
     <tbody>
         @foreach ($rapportsDesActivites as $unRapportsDesActivites )
            <tr>
                <td>{{$unRapportsDesActivites->id}}</td>
                <td>{{$unRapportsDesActivites->type}}</td>
                <td>{{$unRapportsDesActivites->nom}}</td>
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
