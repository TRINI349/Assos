<?php

namespace App\Http\Controllers;

use App\Http\Requests\ActionRequest;
use App\Models\Actions;
use Illuminate\Http\Request;
use Illuminate\Notifications\Action;

class ActionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Actions=Actions::all();
        return view('Actions',compact('actions')); //["actions"=>"$actions"]

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('Actions');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param App\http\Requests\ArticleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ActionRequest $request)
    {

        $validated = $request->validate([
            'dateAction' => 'integer|required',
            'titre' => 'string|required',
            'adresseAction'=>'string'|'required',
            'content'=>'text'|'required',
            'image'=>'string'|'required'
        ]);

            $actions = new Actions();
            $actions->dateAction = $request->dateAction;
            $actions->titre = $request->titre;
            $actions->adresseAction =$request->adresseAction;
            $actions->content =$request->content;
            $actions->image = $request->image;

            $actions->save();
         return redirect('Action')->with('message', 'Action ajouter');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Actions  $actions
     * @return \Illuminate\Http\Response
     */
    public function show(Actions $actions)
    {
        $actions = Actions::findOrFail($id);
        return view('showAction', compact('action'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Actions  $actions
     * @return \Illuminate\Http\Response
     */
    public function edit(Actions $actions)
    {
        $actions = Actions::findOrFail($id);

        return view('editAction', compact('action'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\ActionRequest  $request
     * @param  \App\Models\Actions  $actions
     * @return \Illuminate\Http\Response
     */
    public function update(ActionRequest $request, Actions $actions)
    {

       $actions = Actions::findOrFail($id);
       $actions->dateAction = $request->dateAction;
       $actions->titre = $request->titre;
       $actions->content = $request->content;
       $actions->adresseAction = $request->adresseAction;
       $actions->image = $request->image;
       $actions->save();
        return redirect('Action')->with('message', 'Action à jour');
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
        return redirect('Action')->with('message','Action supprimer');
    }
}
