<?php

namespace App\Http\Controllers;

use App\Models\RapportsDesActivites;
use Illuminate\Http\Request;

class RapportsDesActivitesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rapportsDesActivites=RapportsDesActivites::all();
        return view('rapportsDesActivites.rapportsDesActivites',['rapportsDesActivites'=>$rapportsDesActivites]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rapportsDesActivites.createRapport
        ');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'fichier' => 'string|required',
            'lien' => 'string|required'
        ]);

            $rapportsDesActivites = new RapportsDesActivites();
            $rapportsDesActivites->name = $request->name;
            $rapportsDesActivites->type = $request->type;

            $rapportsDesActivites->save();
        return redirect('rapportsDesActivites')->with('message', 'Rapport ajouter');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RapportsDesActivites  $rapportsDesActivites
     * @return \Illuminate\Http\Response
     */
    public function show(RapportsDesActivites $rapportsDesActivites)
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RapportsDesActivites  $rapportsDesActivites
     * @return \Illuminate\Http\Response
     */
    public function edit(RapportsDesActivites $rapportsDesActivites,$id)
    {
        $rapportsDesActivites = RapportsDesActivites::findOfFail($id);


        return view('rapportsDesActivites.modifierRapport',['unRapportsDesActivites'=>$rapportsDesActivites]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RapportsDesActivites  $rapportsDesActivites
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RapportsDesActivites $rapportsDesActivites)
    {

    $rapportsDesActivites=RapportsDesActivites::find($request->id);

    $attributs = $request->validate(

    [
        'fichier'=>'required|min:2|max:100|string',
        'lien'=>'string'
    ]);

    $rapportsDesActivites->update($attributs);
    //Le message flash
    session()->flash("success","$rapportsDesActivites->fichier a bien était modifier ! ");
    return redirect('/modifierRapport');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RapportsDesActivites  $rapportsDesActivites
     * @return \Illuminate\Http\Response
     */
    public function destroy(RapportsDesActivites $rapportsDesActivites,$id)
    {
        $rapportsDesActivites = RapportsDesActivites::findOrFail($id);
        $rapportsDesActivites->delete();
        return redirect('rapportsDesActivites.rapportsDesActivites')->with('message', 'Rapport supprimer');
    }
}
