@extends("layouts.base")

@section("titre")
Gestion des activites
@endsection

@section("contenu")
<h1 class="my-2">Les activites</h1>
<a class="btn btn-primary mb-2" href="activite/create">Ajouter une nouvelle activite</a>
 <table class="table">
     <thead>
         <tr>
            <th>Id</td>
            <th>TYPE</td>
            <th>NOM VILLE</td>
         </tr>
     </thead>
     <tbody>
         @foreach ($activites as $uneActivite )
            <tr>
                <td>{{$uneActivite->id}}</td>
                <td>{{$uneActivite->type}}</td>
                <td>{{$uneActivite->nomVille}}</td>
                <td class="col-4 col-lg-3">
                    <div class="row">
                    <a class="btn btn-primary col mx-2" href="activite/{{$uneActivite->id}}/edit">Modifier</a>
                    <form class="col row mx-2" action="activite/{{$uneActivite->id}}" method="post">

                        @csrf
                        @method("delete")
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
