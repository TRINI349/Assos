<?php

namespace App\Http\Controllers;

use App\Models\ActiviteController;
use App\Models\Activites;
use Illuminate\Http\Request;

class ActiviteControllerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activites=Activites::all();
        return view('home',compact('activites')); //["actions"=>"$actions"]
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('');
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

        $attributs = $request->validate([
            'name' => 'required|min:2|max:100|string',
            'type' => 'required|string|min:4'
        ]);

        //Enregistrement du pays dans la table
        Pays::create($attributs);
        //redirection vers le dashboard
       return redirect("");
    }

    public function store(Request $request)
    {
        //Validation des champs/attributs
        $attributs=$request->validate(
            ["nom"=>"required|min:2|max:100|string|unique:Pays,nom",
            "population"=>"numeric|required|min:0",
            "region"=>"required|string|min:4"]
        );
        //Enregistrement du pays dans la table
        Pays::create($attributs);
        //redirection vers le dashboard
       return redirect("/admin/pays");

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ActiviteController  $activiteController
     * @return \Illuminate\Http\Response
     */
    public function show(ActiviteController $activiteController)
    {
        $activites = Activites::findOrFail($id);
        return view('showActivite', compact('activite'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ActiviteController  $activiteController
     * @return \Illuminate\Http\Response
     */
    public function edit(ActiviteController $activiteController)
    {
        $activites = Activites::findOrFail($id);

        return view('editActivite', compact('activite'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ActiviteController  $activiteController
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
       $activites = Activites::findOrFail($id);
       $activites->name = $request->name;
       $activites->type = $request->type;
       $activites->save();
        return redirect()->action(
            [ActiviteController::class, 'index']
        )->with('message', 'Activite à jour');

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ActiviteController  $activiteController
     * @return \Illuminate\Http\Response
     */


    public function destroy($id)
    {
        $activites = Activites::findOrFail($id);
        $activites->delete();
        return redirect()->action(
       [ActiviteController::class, 'index']
        )->with('message', 'Activite supprimer');
    }
}
