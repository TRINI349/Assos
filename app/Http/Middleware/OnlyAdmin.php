<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class OnlyAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    //si l'utulisateur n'est pas connecte(!)
    //s'il est connecte pas de (!)

    {

        $utilisateur=auth()->user(); //auth est une function qui recupere les information d'authentification
        //les infos

        if($utilisateur==null)

     {

        abort(403);

    }

    elseif(auth()->user()->role->nom!='admin' && auth()->user()->role->nom!='superAdmin')
    //si encore t'as un utilisateur authentifier dont le role n est pas admin et si l'utilisateur authentifier don le role n est pas superadmin bloque le passage


    {

        abort(403);
    }

    return $next($request);
    }
}

