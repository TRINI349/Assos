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
        return view('admin.ville.ville',['villes'=>$villes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.ville.createVille');
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
            [
                "nom"=>"required|string"
            ]);

            //Enregistrement de l'action dans la table
        Villes::create($attributs);

            //redirection vers le dashboard
        return redirect("/ville");
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

    public function edit(Villes $ville)
    {
        // $villes = Villes::find($id);

        return view('admin.ville.modifierVille', ["uneVille"=>$ville]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Villes  $villes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Villes $ville)
    {

        // $villes = Villes::find($request->id);
        // dd($ville);
        $attributs = $request->validate(

        [
            "nom"=>"required|string"
        ]);

        $ville->update($attributs);
        //Le message flash
        session()->flash("success","$ville->nom a bien était modifier ! ");
        return redirect("/ville");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Villes  $villes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Villes $ville)
    {
        // $villes = Villes::findOrFail($id);  //pour le trouver la stoker et s'il ne l'a rouve pas il m'affiche la page 404
        $ville->delete();
        return redirect('/ville')->with('message', 'Ville supprimer');
    }
}
