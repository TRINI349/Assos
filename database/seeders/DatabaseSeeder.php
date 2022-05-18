<?php

namespace Database\Seeders;

use App\Models\Role;

use App\Models\Villes;
use App\Models\Actions;

use App\Models\Activites;
use App\Models\Partenaires;
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


            $ville=Villes::create(['nom'=>'villiers sur marne']);
            $ville=Villes::create(['nom'=>'la queue en brie']);
            $ville=Villes::create(['nom'=>'plessis trevise']);
            $ville=Villes::create(['nom'=>'bry sur marne']);



            $activite=Activites::create(['type'=>'prevention Specialisee','nomVille'=>'villiers sur marne','idVilles'=>'1']);
            $activite=Activites::create(['type'=>'prevention Specialisee','nomVille'=>'plessis trevise','idVilles'=>'3']);
            $activite=Activites::create(['type'=>'prevention Specialisee','nomVille'=>'la queue en brie','idVilles'=>'2']);
            $activite=Activites::create(['type'=>'prevention Specialisee','nomVille'=>'bry sur marne','idVilles'=>'4']);
            $activite=Activites::create(['type'=>'auto-ecole','nomVille'=>'villiers sur marne','idVilles'=>'1']);

            Actions::create([
                'idActivites'=>'2',
                'titre'=>'Chantier séjour ',
                'dateAction'=>'2021/08/01',
                'texte'=>'Nous avons co-construit avec des jeunes de Villiers sur marne un projet de séjour.
                Les jeunes ont, début juillet, participé à un chantier éducatif de peinture sur leur quartier pour pouvoir financer des vacances.
                Fin juillet nous sommes partis avec ce groupe de 6 jeunes en camping en Vendée autour d’activités sportives.
                    ',
                'adresseAction'=>'VILLIERS SUR MARNE',
                'image'=>'monImage'
                 ]);

            RapportsDesActivites::create(['annee'=>'2019','lien'=>'lien1','idActivites'=>'2']);
            RapportsDesActivites::create(['annee'=>'2020','lien'=>'lien2','idActivites'=>'2']);
            RapportsDesActivites::create(['annee'=>'2021','lien'=>'lien3','idActivites'=>'2']);




           $super= Role::create(['nom'=>'superAdmin']);
           $admin= Role::create(['nom'=>'admin']);

            User::create(['nom'=>'monNom','prenom'=>'monPrenom','email'=>'secretariat@emmaus-synergie.fr','password'=>bcrypt('emmaussynergie'),'idRoles'=>$admin->id]);

            User::create(['nom'=>'monNom','prenom'=>'monPrenom','email'=>'cdesamblanc@emmaus-synergie.fr','password'=>bcrypt('emmaussynergie'),'idRoles'=>$super->id]);

            Partenaires::create(['nom'=>'CAF']);
            Partenaires::create(['nom'=>'PARIS EST MARNE ET BOIS']);




    }
}





