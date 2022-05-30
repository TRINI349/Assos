<?php

namespace App\Http\Controllers;

use App\Models\Activites;
use Illuminate\Http\Request;
use App\Models\RapportsDesActivites;

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
        return view('admin.rapportsDesActivites.rapportsDesActivites',['lesRapportsDesActivites'=>$rapportsDesActivites]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.rapportsDesActivites.createRapport',["lesActivites"=>Activites::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {

        $attributs = $request->validate([
            'annee' => 'string|required',
            'lien' => 'string',
            'activite_id'=>'numeric|exists:activites,id|required' //verifier le id activite correspond bien à un id dans la  table activite
        ]);

            // $rapportsDesActivites = new RapportsDesActivites();
            // $rapportsDesActivites->name = $request->name;
            // $rapportsDesActivites->type = $request->type;
                // $rapportsDesActivites->save();
                // return redirect('/rapportsDesActivites')->with('message', 'Rapport ajouter');

            $rapportsDesActivites=RapportsDesActivites::create($attributs);
            //1je stoke mes mes requettes dans la variable attributs
            //on peut aussi les recupere dans une variable
            //2j'utilise la methode statique create
            //Le message flash
            session()->flash("success","$rapportsDesActivites->annee a bien était modifier ! ");


            return redirect("/rapportsDesActivites");


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
    public function edit(RapportsDesActivites $rapportsDesActivites)
    {
        // $rapportsDesActivites = RapportsDesActivites::findOfFail($id);


        return view('admin.rapportsDesActivites.modifierRapport',['unRapportsDesActivites'=>$rapportsDesActivites,'activites'=>Activites::all()]);
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

    // $rapportsDesActivites=RapportsDesActivites::find($request->id);

    $attributs = $request->validate(
//si j envoie le formulaire sera sous forme d'un arret assosiatif ou je peux consulter mes attribut avec le dd($attributs)
    [
        'annee'=>'required|min:2|max:100|string',
        'lien'=>'string',
        //'activite_id'=>'numeric|exists:activites,id|required'
    ]);

    $rapportsDesActivites->update($attributs);
    //Le message flash
    session()->flash("success","$rapportsDesActivites->fichier a bien était modifier ! ");
    return redirect('/rapportsDesActivites');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RapportsDesActivites  $rapportsDesActivites
     * @return \Illuminate\Http\Response
     */
    public function destroy(RapportsDesActivites $rapportsDesActivites)  //il a qu'un seul parametres son type et son nom (le type c est la classe et le nom c est sa variable)
    {
        // $rapportsDesActivites = RapportsDesActivites::findOrFail($id);
        $rapportsDesActivites->delete();
        return redirect('/rapportsDesActivites')->with('message', 'Rapport supprimer');
    }
}
