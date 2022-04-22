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
        Schema::create('activite__user', function (Blueprint $table) {

            $table->foreignId('Activite_id')->constrained()->onDelete('cascade');  //pour eviter les injections phantome
            $table->foreignId('User_id')->constrained()->onDelete('cascade');
            $table->primary(['Activite_id', 'User_id']);
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
        Schema::dropIfExists('pivot_table__activite__user');
    }
};
