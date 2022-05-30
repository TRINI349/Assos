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

     //recupere l'ensemble des actions et les afficher dans view avec la methode all().
     //la sép   r   tions des dossiers est faite avec des points

    public function index()
    {
        $actions=Actions::paginate(5);
       // dd($action);
        return view('admin.action.action',["lesActions"=>$actions]);//on lui passe un arret qui contient les données:la variable  actions(a utiliser dans la vieuw) on peut lappele differement donc une variable actions a pour valeurs $actions
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
        return view('admin.action.createAction',["lesActivites"=>Activites::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     ** @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)//le stokage (store)
    //request et $request sont des objet requette dans les parametres du class request permet de mettre la requette sous forme d'objet
    //request nom d'une classe
    //$request c est l'objet de la classe request
    //pour recupere les infor du serveur
    //qui va servir a crer le futur objet actions
    {
// c est le traitement de creation d'une action ou je récupére tous les input qui sont stoké dans  la variable $attributs (propre à laravel) et je fais appelle à la méthode create pour crée une action on lui donnant un paramétres $attributs qui contiernt toutes nos inputs.
    //Validation des champs/attributs
    //dd($request->file("emmaus"));
        $attributs=$request->validate(
            ["titre"=>"required|min:2|max:100|string",
                "dateAction"=>"date|required",
                "adresseAction"=>"string|required",
                "contenu"=>"required|string",
                "image"=>"required|image",//elle garde l'emplacement dans l'ordinateur du client
                'activite_id'=>'numeric|exists:activites,id|required']);

                        //Enregistre sur le serveur l'image avec le store il doit l'enregistrer dans les actions
                        $cheminImage=$request->file("image")->store("actions");
                        //php artisan config:cache pour remettre a jour le cache juste q'on te modifie le env
                        //Remplace le chemin de l'image dans les attributs
                        $attributs["image"]=$cheminImage;//changer sans emplacement et sera dans le serveur

//php artisan storage:link j ia connecter ce qu'il a dans le storage sera en copie dans le public


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
        //return view("",["action"=>$actions])
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
//php artisan make:controlleur nomducontrolleur --resource --model=le nom de la classe model

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
            "contenu"=>"required|string",
            "image"=>"image|required",
           // 'idActivites'=>'numeric|exists:activites,id|required'
        ]
    );
// les inputs c est toutes les information ques j ai rempli dans mon formulaires

    if($request->image){
//au cas ou il n a ya pas d'image sa devrait passe sans modifier une images on met la condition
        //Enregistre sur le serveur le drapeau
        $cheminImage=$request->file("image")->store("lesActions");
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
