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

        abort(403);  //page non trouve forbiden t as pas le droit d'accéder pour raison de sécurite  ca dire la page existe mais t as pas le droit

    }

    elseif(auth()->user()->role->nom!='admin' && auth()->user()->role->nom!='superAdmin')
    //si encore t'as un utilisateur authentifier dont le role n est pas admin et si l'utilisateur authentifier don le role n est pas superadmin bloque le passage

//pour utiliser le middleware faut regarder le fichier le kernel pour au
    {

        abort(403);
    }

    return $next($request);
    }
}

