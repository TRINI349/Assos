@extends("layouts.admin")

@section("titre")
Gestion des partenaires
@endsection

@section("contenu")
<h1 class="display-4 my-5"><strong>Les partenaires</strong></h1>
<a class="ajout1 btn btn-dark mb-5" href="partenaire/create">Ajouter un nouveau partenaire</a>
 <table class="table my-4 text-dark">
     <thead>
         <tr>
            <th>Id</td>
            <th>NOM</td>
            <th>Type</td>
         </tr>
     </thead>
     <tbody>
         @foreach ($lesPartenaires as $unPartenaire )
            <tr>
                <td>{{$unPartenaire->id}}</td>
                <td>{{$unPartenaire->nom}}</td>
                <td>{{$unPartenaire->type}}</td>
                <td class="col-4 col-lg-3">
                    <div class="row">
                    <a class="btn btn-dark col mx-2" href="partenaire/{{$unPartenaire->id}}/edit">Modifier</a>
                    <form class="col row mx-2" action="partenaire/{{$unPartenaire->id}}" method="post">

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
