<?php

namespace Database\Seeders;

use App\Models\Role;

use App\Models\Villes;
use App\Models\Actions;

use App\Models\Activites;
use Illuminate\Database\Seeder;
use App\Models\RapportDesActivites;
use App\Models\RapportsDesActivites;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();


            $ville1=Villes::create(['nom'=>'villiers sur marne']);
            $ville2=Villes::create(['nom'=>'la queue en brie']);
            $ville3=Villes::create(['nom'=>'plessis trevise']);
            $ville4=Villes::create(['nom'=>'bry sur marne']);



            $activite=Activites::create(['type'=>'prevention Specialisee','nom'=>'villiers sur marne','idVilles'=>'1']);
            $activite=Activites::create(['type'=>'prevention Specialisee','nom'=>'plessis trevise','idVilles'=>'3']);
            $activite=Activites::create(['type'=>'prevention Specialisee','nom'=>'la queue en brie','idVilles'=>'2']);
            $activite=Activites::create(['type'=>'prevention Specialisee','nom'=>'bry sur marne','idVilles'=>'4']);
            $activite=Activites::create(['type'=>'auto-ecole','nom'=>'villiers sur marne','idVilles'=>'1']);

            Actions::create([
                'dateAction'=>'2022-05-31',
                'titre'=>'MonTitre',
                'contenu'=>'MonContenu',
                'image'=>'monImage',
                'adresseAction'=>'11 rue feederic passy',
                'idActivites'=>'2'   ]);

            RapportsDesActivites::create(['annee'=>'2019','lien'=>'lien1','idActivites'=>'2']);
            RapportsDesActivites::create(['annee'=>'2020','lien'=>'lien2','idActivites'=>'2']);
            RapportsDesActivites::create(['annee'=>'2021','lien'=>'lien3','idActivites'=>'2']);




           $super= Role::create(['nom'=>'superAdmin']);
           $admin= Role::create(['nom'=>'admin']);

            User::create(['nom'=>'monNom','prenom'=>'monPrenom','email'=>'secretariat@emmaus-synergie.fr','password'=>bcrypt('emmaussynergie'),'idRoles'=>$admin->id]);

            User::create(['nom'=>'monNom','prenom'=>'monPrenom','email'=>'cdesamblanc@emmaus-synergie.fr','password'=>bcrypt('emmaussynergie'),'idRoles'=>$super->id]);






    }
}





