<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user=User::all();
        return view('admin.user.user',["user"=>$user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.user.createUser',["role"=>Role::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, User $user)
    {
        $attributs=$request->validate(
            [
                "nom"=>"required|string",
                "prenom"=>"required|string",
                "email"=>"required|string",
                "idRoles"=>"numeric|exists:Role,id|required"
            ]);

            //Enregistrement de l'action dans la table
        User::create($attributs);

            //redirection vers le dashboard
        return redirect("/user");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user=User::find($id);

        return view('admin.user.modifierUser', ["unUser"=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,User $id)


    {

        $user=User::find($request->id);
        $attributs=$request->validate(
            [
                "nom"=>"required|string",
                "prenom"=>"required|string",
                "email"=>"required|string",
                "idRoles"=>"numeric|exists:Role,id|required"
            ]);



        $user->update($attributs);
        //Le message flash
        session()->flash("success","$user->user a bien était modifier ! ");
        return redirect('/user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($user)
    {
        $user->delete();
        return redirect('/user')->with('message', 'user supprimer');
    }
}
