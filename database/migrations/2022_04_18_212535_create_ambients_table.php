<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmbientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ambients', function (Blueprint $table) {
            $table->id();
            $table->string('aula_lunes',40);
            $table->string('aula_martes',40);
            $table->string('aula_miercoles',40);
            $table->string('aula_jueves',40);
            $table->string('aula_viernes',40);
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
        Schema::dropIfExists('ambients');
    }
}
