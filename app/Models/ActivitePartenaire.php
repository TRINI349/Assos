<?php

//$fillable est un arret contien le nom de tous les attribut qu'on a le droit les renseinger comme nom,prenom au public
//le $guarded pour proteger ce que tu doit pas l'afficher au public



namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;


// use Illuminate\Database\Eloquent\Model;

// class ActivitePartenaire extends Model

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;
class ActivitePartenaire extends Pivot
{
    use HasFactory;
    protected $guarded=[];
  //  protected $fillable=['activite_id','partenaire_id'];

    //pas de id car j'ai que les clées étrangers
}

//les assosition en laravel faite sous forme de methode
//une methode destionations au pluereil qui return l'objet destinations

//c est classe ne va pas avoir l'assosiation c est eux de leurs cote
