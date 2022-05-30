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
    public function up() //il cree une table
    {
        Schema::create('roles', function (Blueprint $table) { //$table est un objet  Bleuprint rst une classe car elle en majuscule
            $table->id();
            $table->string('nom')->unique;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()//detruit une table  en laravel tous les tables des tables au pluriels et des classes au singuliers
    {
        Schema::dropIfExists('roles');
    }
};
