@extends("layouts.base")

@section("titre")
Gestion des actions
@endsection

@section("contenu")
<h1 class="my-2">Les actions</h1>
<a class="btn btn-primary mb-2" href="Actions/create">Ajouter une nouvelle action</a>
 <table class="table">
     <thead>
         <tr>
            <th>Id</td>
            <th>TITRE</td>
            <th>ADRESSE ACTION</td>
            <th>DATE ACTION</td>
            <th>CONTENUE</td>
            <th>IMAGE</td>
         </tr>
     </thead>
     <tbody>
         @foreach ($actions as $uneAction )
            <tr>
                <td>{{$uneAction->id}}</td>
                <td>{{$uneAction->titre}}</td>
                <td>{{$uneAction->dateAction}}</td>
                <td>{{$uneAction->adresseAction}}</td>
                <td>{{$uneAction->contenue}}</td>
                <td>{{$uneAction->image}}</td>
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
