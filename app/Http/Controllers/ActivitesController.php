<?php

namespace App\Http\Controllers;

use App\Models\Activites;
use App\Models\Villes;
use Illuminate\Http\Request;

class ActivitesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activites=Activites::all();
        return view('admin.activite.activite',["lesActivites"=>$activites]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.activite.createActivite',["lesVilles"=>Villes::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //Validation des champs/attributs
        $attributs=$request->validate(
            ["type"=>"required|string",
                "nomVille"=>"string|required",
                "ville_id"=>"numeric|required"
            ]);
//un arret associatif
            //Enregistrement de l'action dans la table
        Activites::create($attributs);
//methode statique une class :: operateur statique et la methode est appel sur une class pas sur un objet designe par une fleche
            //redirection vers le dashboard
            session()->flash("success l'activite a bien était ajouté ! ");
        return redirect("/activite");
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ActiviteController  $activiteController
     * @return \Illuminate\Http\Response
     */
    public function show(Activites $activites)
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ActiviteController  $activiteController
     * @return \Illuminate\Http\Response
     */

    //public function edit($id)
    public function edit( Activites $activites,$id)
    //$activites nom du parametre et il faut le tipe avec la classe pour récuperer de tous les pays
    {
        $activites=Activites::find($id);  //on peut utiliser find ou get pour retrouver un objet par son  $id
        //
        //findOrfail si ca noutrve pas l'id il affiche une page 404

        return view('admin.activite.modifierActivite', ["uneActivite"=>$activites]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ActiviteController  $activiteController
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request,Activites $activites)
    {



        //$activites=Activites::find($request->id);

        $attributs = $request->validate(

        [
            "type"=>"required|min:2|max:100|string",
            "nomVille"=>"string|required"
        ]);

        $activites->update($attributs);
        //Le message flash
        session()->flash("success","$activites->type a bien était modifier ! ");
        return redirect("/activite");
    }




    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ActivitesController  $activiteController
     * @return \Illuminate\Http\Response
     */


    public function destroy($id)
    {
        $activites = Activites::findOrFail($id);
        $activites->delete();
        return redirect('/activite')
        ->with('message', 'Activite supprimer');
    }
}
