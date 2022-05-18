<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actions extends Model
{
    use HasFactory;

    protected $fillable=['dateAction','titre','adresseAction','contenu','image',"idActivites"];

    public function Activites(){
        return $this->belongsTo(Activites::class);
    }

}
//avec la porté protected  on peut accéder modifier supprimer nos attribut
//et à l'aide de nos getteur qui nous aiderons à recupperer leurs valeurs

//extends c est à dire héritage donc actions hérite de la classe activites
//getteur recupere la valeur et fait  la lecture (pour aussi les consulter)
//setteur modifie la valeur de l'attribut et verifie  les information de l'attribut


//fetch::ALl tous les resultats
//$sql->setFetchMode(PDO::FEtch_class,"Admin")va devenir sous quel formes va vous presenter les donner  en arret associatif
//le Admin se correspond au nom de la classe
//$resultat=$sql->fetch() je recupere les resultats
