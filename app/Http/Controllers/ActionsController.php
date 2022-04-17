<?php

namespace App\Http\Controllers;

use App\Http\Requests\ActionRequest;
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
        $Actions=Actions::all();
        return view('Action'.'Actions',["actions"=>"$actions"]);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('Actions');
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
                "contenue"=>"required|string",
                "image"=>"required|image"]);

             //Enregistre sur le serveur le drapeau
        $cheminImage=$request->file("#")->store("actions");

             //Remplace le chemin de l'image dans les attributs
        $attributs["#"]=$cheminImage;

            //Enregistrement de l'action dans la table
        Actions::create($attributs);

            //redirection vers le dashboard
        return redirect("Action.createAction");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Actions  $actions
     * @return \Illuminate\Http\Response
     */
    public function show(Actions $actions)
    {
        $actions = Actions::findOrFail($id);
        return view('showAction', compact('action'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Actions  $actions
     * @return \Illuminate\Http\Response
     */
    public function edit(Actions $actions)
    {
        $actions = Actions::findOrFail($id);

        //Afficher un formulaire modification pré-rempli

        return view('Actions.editAction', ["UneAction"=>$actions]);
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

       $actions = Actions::findOrFail($id);
       $actions->dateAction = $request->dateAction;
       $actions->titre = $request->titre;
       $actions->content = $request->content;
       $actions->adresseAction = $request->adresseAction;
       $actions->image = $request->image;
       $actions->save();
        return redirect('Action')->with('message', 'Action à jour');
    }

    $pays=Pays::find($request->id);

    $attributs = $request->validate(
      [
          "nom" => "required|min:2|max:100|string",
          "population" => "numeric|required|min:0",
          "region" => "required|string|min:4",
          "drapeau"=>"image"
      ]

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
        return redirect('Action')->with('message','Action supprimer');
    }
}
