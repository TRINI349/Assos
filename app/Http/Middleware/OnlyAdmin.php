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
        if($utilisateur==null)
     {

        abort(403);

    }
    elseif([auth()->user->role->nom!='admin' && auth()->user->role->nom!='superAdmin'])

    {
        abort(403);
    }

    return $next($request);
    }
}

