<?php

namespace App\Http\Controllers;


use App\Models\Actions;
use Illuminate\Http\Request;
use Illuminate\Notifications\Action;

class ActionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actions=Actions::all();
        return view('action.action',["actions"=>$actions]);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('action.createAction');
    }

    /**
     * Store a newly created resource in storage.
     *
     ** @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    //Validation des champs/attributs
        $attributs=$request->validate(
            ["titre"=>"required|min:2|max:100|string",
                "dateAction"=>"date|required",
                "adresseAction"=>"string|required",
                "contenue"=>"required|string",
                "image"=>"required|image"]);

             //Enregistre sur le serveur le drapeau
        $cheminImage=$request->file("#")->store("actions");

             //Remplace le chemin de l'image dans les attributs
        $attributs["monImage"]=$cheminImage;

            //Enregistrement de l'action dans la table
        Actions::create($attributs);

            //redirection vers le dashboard
        return redirect('action.createAction');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Actions  $actions
     * @return \Illuminate\Http\Response
     */
    public function show(Actions $actions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Actions  $actions
     * @return \Illuminate\Http\Response
     */
    public function edit(Actions $actions,$id)
    {
        $actions = Actions::find($id);

        //Afficher un formulaire modification pré-rempli

        return view('action.modifierAction', ["uneAction"=>$actions]);
    }


    /**
     * Update the specified resource in storage.
     *
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Actions  $actions
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Actions $actions)
    {

        $actions=Actions::find($request->id);

        $attributs = $request->validate(

        [
            "titre"=>"required|min:2|max:100|string",
            "dateAction"=>"date|required",
            "adresseAction"=>"string|required",
            "contenue"=>"required|string",
            "image"=>"monImage"
        ]
    );



    if($request->monImage){

        //Enregistre sur le serveur le drapeau
        $cheminImage=$request->file("monImage")->store("action");
        //Remplace le chemin de l'image dans les attributs
        $attributs["monImage"]=$cheminImage;
        }
        //Mettre a jour le pays avec de nouveau attributs
        $actions->update($attributs);
        //Le message flash
        session()->flash("success","$actions->titre a bien était modifier ! ");
        return redirect("/action");
        }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Actions  $actions
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $actions =Actions::findOrFail($id);
        $actions->delete();
        return redirect('action')->with('message','Action supprimer');
    }
}
