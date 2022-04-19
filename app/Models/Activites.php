<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activites extends Model
{
    use HasFactory;
    protected $fillable=['type','nom'];

    public function Villes(){
        return $this-> belongsTo(villes::class);
    }

    public function Actions(){
        return $this->hasMany(Actions::class);
    }

    public function RapportsDesactivites(){
        return $this->hasMany(RapportsDesActivites::class);
    }
}
