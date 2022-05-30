<?php

namespace App\Http\Controllers;

use App\Models\Activites;
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
        $partenaires=Partenaires::paginate(20);
        return view('admin.partenaire.partenaire',['lesPartenaires'=>$partenaires]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() //la function create dans laravel refait les requette derriere comme create sql dans mvc
    {
        return view ('admin.partenaire.createPartenaire',["lesActivites"=>Activites::all()]);
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
            ["nom"=>"required|string",
            "type"=>"required|string",
            'activite_id'=>'numeric|exists:activites,id|required'
            ]);


            //Enregistrement de l'action dans la table
       $partenaires=Partenaires::create($attributs);

            //redirection vers le dashboard
            session()->flash("success","$partenaires->nom a bien était modifier ! ");

        return redirect("/partenaire");
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
    public function edit($id)
    {
        $partenaires=Partenaires::find($id);




        return view('admin.partenaire.modifierPartenaire', ["unPartenaire"=>$partenaires]);
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
        $partenaires=Partenaires::find($request->id);


        $attributs = $request->validate(

        [
            "nom"=>"string|required",
            "type"=>"string|required",
           // 'activite_id'=>'numeric|exists:activites,id|required'

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
        return redirect('/partenaire')->with('message', 'Partenaire supprimer');
    }
}
