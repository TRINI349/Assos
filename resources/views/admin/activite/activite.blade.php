@extends("layouts.admin")

@section("titre")
Gestion des activites
@endsection

@section("contenu")
<h1 class=" display-4 my-5 "><strong>Les activites</strong></h1>
<a class="ajout1 btn btn-dark mb-5" href="activite/create">Ajouter Une Activite</a>
 <table class="table  text-dark">
     <thead>
         <tr>
            <th>Id</td>
            <th>TYPE</td>
            <th>NOM VILLE</td>
         </tr>
     </thead>
     <tbody>
         @foreach ($lesActivites as $uneActivite )
            <tr>
                <td>{{$uneActivite->id}}</td>
                <td>{{$uneActivite->type}}</td>
                <td>{{$uneActivite->nomVille}}</td>
                <td class="col-4 col-lg-3">
                    <div class="row">
                    <a class="btn btn-dark col mx-2 my-3" href="activite/{{$uneActivite->id}}/edit">Modifier</a>
                    <form class="col row mx-2" action="activite/{{$uneActivite->id}}" method="post">

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
@endsection
