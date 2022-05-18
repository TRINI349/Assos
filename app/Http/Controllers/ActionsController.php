<?php

namespace App\Http\Controllers;


use App\Models\Actions;
use App\Models\Activites;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class ActionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actions=Actions::paginate(4);
       // dd($action);
        return view('admin.action.action',["actions"=>$actions]);
    }

// je cree une variable $actions ou je stoke toutes mes actions avec la méthode all() et aprés j'affiche ma view action qui va aussi toutes mes actions

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
// c est le formulaire de création d'une action qui va parcourir aussi les activites car c est une clé étrangéres dont j ai besoin pour remplir  mon formulaire
        return view('admin.action.createAction',["activites"=>Activites::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     ** @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
// c est le traitement de creation d'une action ou je récupére tous les input qui sont stoké dans  la variable $attributs (propre à laravel) et je fais appelle à la méthode create pour crée une action on lui donnant un paramétres $attributs qui contiernt toutes nos inputs.
    //Validation des champs/attributs
        $attributs=$request->validate(
            ["titre"=>"required|min:2|max:100|string",
                "dateAction"=>"date|required",
                "adresseAction"=>"string|required",
                "texte"=>"required|string",
                "image"=>"required|image",
                'idActivites'=>'numeric|exists:activites,id|required']);

                        //Enregistre sur le serveur le drapeau
                        $cheminImage=$request->file("image")->store("actions");

                        //Remplace le chemin de l'image dans les attributs
                        $attributs["image"]=$cheminImage;




            //Enregistrement de l'action dans la table
        Actions::create($attributs);

            //redirection vers le dashboard
            session()->flash("success","L'action a bien été ajouter !");
        return redirect('/action'); //retourne la view action et le redirecte vers l'url
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Actions  $actions
     * @return \Illuminate\Http\Response
     */
    public function show(Actions $actions)
    {
        // pour afficher un seul view
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Actions  $actions
     * @return \Illuminate\Http\Response
     */
    public function edit(Actions $actions, $id)
    {
        // c'est le formulaire de modification on fait appel à la methode find() qui va nous aider à modifier une action par son id
        $actions = Actions::find($id);

        //Afficher un formulaire modification pré-rempli

        return view('admin.action.modifierAction', ["uneAction"=>$actions]);
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
// c est le traitement de la modification  ou en fait appel à la méthode find(qui récupere l'imput id via la variable $request )
        $actions=Actions::find($request->id);
        //find($id) prend un identifiant et renvoie un seul modèle. Si aucun modèle correspondant n'existe, il renvoie null.

        $attributs = $request->validate(

        [
            //c est le name de mes inputs("titre")qui est mentionné dans mon formulaire
            "titre"=>"required|min:2|max:100|string",
            "dateAction"=>"date|required",
            "adresseAction"=>"string|required",
            "texte"=>"required|string",
            "image"=>"monImage",
            'idActivites'=>'numeric|exists:activites,id|required'
        ]
    );
// les inputs c est toutes les information ques j ai rempli dans mon formulaires

    if($request->image){

        //Enregistre sur le serveur le drapeau
        $cheminImage=$request->file("image")->store("action");
        //Remplace le chemin de l'image dans les attributs
        $attributs["image"]=$cheminImage;
        }
        //Mettre a jour le pays avec de nouveau attributs
        // phase de modification avec la méthode update avec en paramétres $attribut qui contienttous  les input en question
        $actions->update($attributs);
        //Le message flash
        session()->flash("success","$actions->nom a bien était modifier ! ");
        return redirect("/action");
        }


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
        return redirect('/action')->with('message','Action supprimer');
    }
}
//findOrFail($id) prend un identifiant et renvoie un seul modèle. Si aucun modèle correspondant n'existe, il génère une erreur1.
