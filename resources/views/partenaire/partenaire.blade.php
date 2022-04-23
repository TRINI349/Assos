@extends("layouts.base")

@section("titre")
Gestion des partenaires
@endsection

@section("contenu")
<h1 class="my-2">Les partenaires</h1>
<a class="btn btn-primary mb-2" href="partenaire/createPartenaire">Ajouter un nouveau partenaire</a>
 <table class="table">
     <thead>
         <tr>
            <th>Id</td>
            <th>NOM</td>
         </tr>
     </thead>
     <tbody>
         @foreach ($partenaires as $unPartenaire )
            <tr>
                <td>{{$unPartenaire->id}}</td>
                <td>{{$unPartenaire->nom}}</td>
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
