<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Activites extends Model
{
    use HasFactory;
    protected $fillable=['type','nomVille','idVilles'];

    public function Villes(){
        return $this-> belongsTo(villes::class);
    }

    public function Actions(){
        return $this->hasMany(Actions::class);
    }

    public function RapportsDesactivites(){
        return $this->hasMany(RapportsDesActivites::class);
    }

    public function Users()

    {
    return  $this->belongsToMany(User::class);

    }

}
