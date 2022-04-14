<?php

namespace Database\Seeders;

use App\Models\Villes;

use App\Models\Actions;
use App\Models\Activites;

use Illuminate\Database\Seeder;
use App\Models\RapportDesActivites;
use App\Models\RapportsDesActivites;
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



            $activite=Activites::create(['type'=>'prevention Specialisee','nom'=>'villiers sur marne','idVille'=>'1']);
            $activite=Activites::create(['type'=>'prevention Specialisee','nom'=>'plessis trevise','idVille'=>'3']);
            $activite=Activites::create(['type'=>'prevention Specialisee','nom'=>'la queue en brie','idVille'=>'2']);
            $activite=Activites::create(['type'=>'prevention Specialisee','nom'=>'bry sur marne','idVille'=>'4']);
            $activite=Activites::create(['type'=>'auto-ecole','nom'=>'villiers sur marne','idVille'=>'1']);

            Actions::create([
                'dateAction'=>'31/05/2022',
                'titre'=>'MonTitre',
                'contenu'=>'MonContenu',
                'image'=>'MonImage',
                'adresseAction'=>'11 rue feederic passy',
                'idActivite'=>'2'   ]);

            RapportsDesActivites::create(['annee'=>'2019','fichier'=>'lien','idActivite'=>'2']);
            RapportsDesActivites::create(['annee'=>'2020','fichier'=>'lien','idActivite'=>'2']);
            RapportsDesActivites::create(['annee'=>'2021','fichier'=>'lien','idActivite'=>'2']);




    }
}





