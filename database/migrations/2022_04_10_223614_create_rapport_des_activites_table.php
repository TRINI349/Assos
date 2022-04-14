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
        Schema::create('rapport_des_activites', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idActivite')->constraint('activite')->onDelete('cascade')->onUpdate;
            $table->integer('annee');
            $table->string('lienFichier',400)->unique;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rapport_des_activites');
    }
};
