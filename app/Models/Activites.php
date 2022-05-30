<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Activites extends Model
{
    use HasFactory;
    protected $fillable=['type','nomVille','ville_id'];

    public function ville(){
        return $this-> belongsTo(villes::class,"ville_id"); //id sa correspond à la clé primaire de la ville
    }
//comme c est belongsto donc le nom de notre classmodel sera au singulier
    public function actions(){
        return $this->hasMany(Actions::class);
        //le premier c est la clé étrangers et le deuxieme c est l'id lui meme de la table
    }

    public function rapportsDesactivites(){
        return $this->hasMany(RapportsDesActivites::class);
    }

    public function activitesPartenaires(){
        return $this->belongsToMany(Partenaires::class,"partenaires")->using(Partenaires::class);
    }

    //public function Users()

    //{
    //return  $this->belongsToMany(User::class);

    //}//

}
