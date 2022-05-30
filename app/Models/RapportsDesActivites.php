<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RapportsDesActivites extends Model
{
    use HasFactory;
    protected $fillable=['annee','lien','activite_id'];
    //[]un arret

    public function activite(){
        return $this->belongsto(Activites::class,"activite_id");
    }
}
//une variable dans une classe c est une caraceristique daune class
