<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHourambientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hourambients', function (Blueprint $table) {
            $table->id();
            $table->string('hora_lunes',40);
            $table->string('hora_martes',40);
            $table->string('hora_miercoles',40);
            $table->string('hora_jueves',40);
            $table->string('hora_viernes',40);
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
        Schema::dropIfExists('hourambients');
    }
}
