<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('role_id')->constrained("roles")->onDelete('cascade')->onUpdate('cascade');
            $table->string('nom');
            $table->string('prenom');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        //foreignId est une methode et en parametre en met( le nom de la classe(ausingulier) et _id) et elle fait réference à la table en utulisant la methode constrained()roles et pour le supprimer faut utiliser la methode onDelete('cascade')c a dire si jamais je veux supprimer un role bah ts les utulisateur devront etre supprimer avec ce role


        //et la migration duser nous avons une clé etranger qui fait reference à la table role donc ce qu il faut faire c est de l'excuter apres ou de changer la date
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
