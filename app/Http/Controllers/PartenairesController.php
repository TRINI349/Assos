<?php

namespace App\Http\Controllers;

use App\Models\Partenaires;
use Illuminate\Http\Request;

class PartenairesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partenaires=Partenaires::all();
        return view('partenaire.partenaire',['partenaires'=>$partenaires]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('partenaire.createPartenaires');
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
            ["nom"=>"required|string"]);

            //Enregistrement de l'action dans la table
        Partenaires::create($attributs);

            //redirection vers le dashboard
        return redirect("partenaire.createPartenaires");
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Partenaires  $partenaires
     * @return \Illuminate\Http\Response
     */

    public function show(Partenaires $partenaires)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Partenaires  $partenaires
     * @return \Illuminate\Http\Response
     */
    public function edit(Partenaires $partenaires, $id)
    {
        $partenaires=Partenaires::find($id);

        return view('partenaire.modifierPartenaire', ["unPartenaire"=>$partenaires]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Partenaires  $partenaires
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Partenaires $partenaires, $id)
    {
        $partenaires=Partenaires::find($request->$id);

        $attributs = $request->validate(

        [

            "nom"=>"string|required"
        ]);

        $partenaires->update($attributs);
        //Le message flash
        session()->flash("success","$partenaires->nom a bien était modifier ! ");
        return redirect("/partenaire");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Partenaires  $partenaires
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $partenaires = Partenaires::findOrFail($id);
        $partenaires->delete();
        return redirect('partenaire')
        ->with('message', 'Partenaire supprimer');
    }
}
