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
        Schema::create('activites_partenaires', function (Blueprint $table) {
            $table->foreignId("activite_id")->constrained("activites")->onDelete("cascade");
            $table->foreignId("partenaire_id")->constrained("partenaires")->onDelete("cascade");
            $table->primary(["activite_id","partenaire_id"]);
            $table->timestamps();
        });
    }
//php artisan make:controller DestinationController --resource --model=Destination
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('activite_partenaires');
    }
};
