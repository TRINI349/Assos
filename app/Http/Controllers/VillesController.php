<?php

namespace App\Http\Controllers;

use App\Models\Villes;
use Illuminate\Http\Request;

class VillesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $villes=Villes::all();
        return view('Villes',compact('villes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('creatVille');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Villes  $villes
     * @return \Illuminate\Http\Response
     */

    public function show(Villes $villes)
    {
        $validated = $request->validate([
            'nom' => 'string|required',

        ]);

            $villes = new Villes();
            $villes->name = $request->name;

            $villes->save();
        return redirect('Ville')->with('message', 'Ville ajouter');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Villes  $villes
     * @return \Illuminate\Http\Response
     */

    public function edit(Villes $villes)
    {
        $villes = Villes::findOrFail($id);

        return view('editVilles', compact('villes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Villes  $villes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Villes $villes)
    {

        $villes = Villes::findOrFail($id);
        $villes->nom = $request->nom;

        $villes->save();
        return redirect()->action(
            [Villes::class, 'index']
        )->with('message', 'Ville à jour');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Villes  $villes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Villes $villes)
    {
        $villes = Villes::findOrFail($id);
        $villes->delete();
        return redirect('showVilles')->with('message', 'Ville supprimer');
    }
}
