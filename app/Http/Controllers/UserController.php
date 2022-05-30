<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


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
        return view('admin.user.user',["lesUsers"=>$user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.user.createUser',["lesRoles"=>Role::all()]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mdp = bcrypt($request->input('password'));
        $attributs=$request->validate(
            [
                "nom"=>"required|string",
                "prenom"=>"required|string",
                "email"=>"required|string",
                "password"=>"required|min:8",
                "role_id"=>"numeric|exists:Roles,id|required",

            ]);

            $attributs["password"]=$mdp; //
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
    public function update(Request $request,User $user)


    {

        //$user=User::find($request->id);
       // $mdp = bcrypt($request->input('password'));
        $attributs=$request->validate(
            [
                "nom"=>"required|string",
                "prenom"=>"required|string",
                "email"=>"required|string",
                //"password"=>"required|min:8",
                //"idRoles"=>"numeric|exists:Roles,id|required"
            ]);


            //$attributs["password"]=$mdp;
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
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect('/user')->with('message', 'user supprimer');
    }
}
