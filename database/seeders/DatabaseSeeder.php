<?php

namespace Database\Seeders;

use App\Models\Role;

use App\Models\User;
use App\Models\Villes;

use App\Models\Actions;
use App\Models\Activites;
use App\Models\Partenaires;
//use App\Models\RapportDesActivites;
use Illuminate\Database\Seeder;
use App\Models\ActivitePartenaire;
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


            Villes::create(['nom'=>'villiers sur marne']);
            Villes::create(['nom'=>'la queue en brie']);
            Villes::create(['nom'=>'plessis trevise']);
            Villes::create(['nom'=>'bry sur marne']);



            Activites::create(['type'=>'prevention Specialisee','nomVille'=>'villiers sur marne','ville_id'=>'1']);
            Activites::create(['type'=>'prevention Specialisee','nomVille'=>'plessis trevise','ville_id'=>'3']);
            Activites::create(['type'=>'prevention Specialisee','nomVille'=>'la queue en brie','ville_id'=>'2']);
            Activites::create(['type'=>'prevention Specialisee','nomVille'=>'bry sur marne','ville_id'=>'4']);
            Activites::create(['type'=>'auto-ecole','nomVille'=>'villiers sur marne','ville_id'=>'1']);
//methode statique :: Actions==classe create une methode
//faut aussi respecter l'odre des migrations
            Actions::create([
                'activite_id'=>'2',
                'titre'=>'Chantier séjour ',
                'dateAction'=>'2021/08/01',
                'contenu'=>'Nous avons co-construit avec des jeunes de Villiers sur marne un projet de séjour.
                Les jeunes ont, début juillet, participé à un chantier éducatif de peinture sur leur quartier pour pouvoir financer des vacances.
                Fin juillet nous sommes partis avec ce groupe de 6 jeunes en camping en Vendée autour d’activités sportives.
                    ',
                'adresseAction'=>'VILLIERS SUR MARNE',
                'image'=>'monImage'
                 ]);

            RapportsDesActivites::create(['annee'=>'2019','lien'=>'lien1','activite_id'=>'2']);
            RapportsDesActivites::create(['annee'=>'2020','lien'=>'lien2','activite_id'=>'2']);
            RapportsDesActivites::create(['annee'=>'2021','lien'=>'lien3','activite_id'=>'2']);


//il est recommande car si nous avons besoin de modifie notre table nous pouvons le faire des ici qu'a le faire à la main
///apres l'enregistrement je lui demande de les recupere dans une variable et tu met l'id de l'admin
           $super= Role::create(['nom'=>'superAdmin']);
           $admin= Role::create(['nom'=>'admin']);

            User::create(['nom'=>'monNom','prenom'=>'monPrenom','email'=>'secretariat@emmaus-synergie.fr','password'=>bcrypt('emmaussynergie'),'role_id'=>$admin->id]);

            User::create(['nom'=>'monNom','prenom'=>'monPrenom','email'=>'cdesamblanc@emmaus-synergie.fr','password'=>bcrypt('emmaussynergie'),'role_id'=>$super->id]); // il fait appell à un getteur et il respecte bien le principe d'encapsulation

            Partenaires::create(['nom'=>'CAF','type'=>'SOCIO']);
            Partenaires::create(['nom'=>'Terittoire 10 Paris Est Marne et Bois','type'=>'PARTENAIRES SPECIFIQUE A L AUTO-ECOLE SOCIALE']);
            Partenaires::create(['nom'=>'LES COLLECTIVITES TERRITORIALLES ET PARTENAIRES INSTITUTIONNELS','type'=>'PARTENAIRES SOCIAO']);

            ActivitePartenaire::create(["activite_id","partenaire_id"]);

    }

    }






