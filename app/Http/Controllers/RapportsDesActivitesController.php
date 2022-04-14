<?php

namespace App\Http\Controllers;

use App\Models\RapportDesActivites;
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
        return view('RapportDesActivites',compact('rapportDesActivites'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('RapportCreation');
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
        return redirect()->action([RapportsDesActivitesController::class, 'index'])->with('message', 'Rapport ajouter');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RapportsDesActivites  $rapportsDesActivites
     * @return \Illuminate\Http\Response
     */
    public function show(RapportsDesActivites $rapportsDesActivites)
    {
        $rapportsDesActivites = RapportsDesActivites::findOrFail($id);
        return view('showRapportsDesActivites', compact('rapportsDesActivites'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RapportsDesActivites  $rapportsDesActivites
     * @return \Illuminate\Http\Response
     */
    public function edit(RapportsDesActivites $rapportsDesActivites)
    {
        $rapportsDesActivites = RapportsDesActivites::findOrFail($id);

        return view('editRapportsDesActivites', compact('rapportsDesActivites'));
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
        $rapportsDesActivites = RapportsDesActivites::findOrFail($id);
        $rapportsDesActivites->fichier = $request->fichier;
        $rapportsDesActivites->lien = $request->lien;
        $rapportsDesActivites->save();
        return redirect()->action(
            [RapportsDesActivitesController::class, 'index']
        )->with('message', 'Rapport à jour');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RapportsDesActivites  $rapportsDesActivites
     * @return \Illuminate\Http\Response
     */
    public function destroy(RapportsDesActivites $rapportsDesActivites)
    {
        $rapportsDesActivites = RapportsDesActivites::findOrFail($id);
        $rapportsDesActivites->delete();
        return redirect()->action(
       [RapportsDesActivitesController::class, 'index']
        )->with('message', 'Rapport supprimer');
    }
}
