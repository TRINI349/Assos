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
        return view('activite.activite',["activites"=>$activites]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('activite.createActivite',["villes"=>Villes::all()]);
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
                "idVilles"=>"numeric|required"
            ]);

            //Enregistrement de l'action dans la table
        Activites::create($attributs);

            //redirection vers le dashboard
        return redirect("/activite");
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ActiviteController  $activiteController
     * @return \Illuminate\Http\Response
     */
    public function show(Activites $activite)
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ActiviteController  $activiteController
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $activites=Activites::find($id);

        return view('activite.modifierActivite', ["uneActivite"=>$activites]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ActiviteController  $activiteController
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request,Activites $id)
    {



        $activites=Activites::find($request->id);

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
