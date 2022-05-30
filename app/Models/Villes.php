<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Villes extends Model
{
    use HasFactory;
    protected $fillable=['nom'];
// on ai entrain de manipuler des class model pas des tables
    public function activites(){
        return $this->hasMany(Activites::class,"activite_id");
    }
}

