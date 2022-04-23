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
        return view('ville.ville',['villes'=>$villes]);
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
        //
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Villes  $villes
     * @return \Illuminate\Http\Response
     */

    public function edit(Villes $villes,$id)
    {
        $villes = Villes::find($id);

        return view('editVilles', ["uneVille",$villes]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Villes  $villes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Villes $villes,$id)
    {

        $attribut = Villes::find($request->id);


        $attribut->save();
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
    public function destroy(Villes $villes,$id)
    {
        $villes = Villes::find($id);
        $villes->delete();
        return redirect('showVilles')->with('message', 'Ville supprimer');
    }
}
