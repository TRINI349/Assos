<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $role=Role::all();
        return view('Role'.'Role',["roles"=>$role]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Role');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attributs=$request->validate(
            [
                "nom"=>"string|required"
            ]);


            //Enregistrement de l'action dans la table
        Role::create($attributs);

        //redirection vers le dashboard
    return redirect("Role.creatRole");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role=Role::find($id);

        return view('Role.modifierRole', ["unRole"=>$role]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $role=Role::find($request->id);

        $attributs = $request->validate(

        [

            "nom"=>"string|required"
        ]);

        $role->update($attributs);
        //Le message flash
        session()->flash("success","$role->nom a bien était modifier ! ");
        return redirect("/Role");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $role = Role::findOrFail($id);
        $role->delete();
        return redirect('Role')
        ->with('message', 'Le role est bien  supprimer');
    }
}
