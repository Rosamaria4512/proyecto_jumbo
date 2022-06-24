<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groups', function (Blueprint $table) {
            $table->id();
            $table->year('anio');
            $table->string('periodo',20);
            $table->unsignedBigInteger('teacher_id');
            $table->foreign("teacher_id")->references("id")->on("teachers")
            ->onDelete("cascade")->onUpdate("cascade");

            $table->unsignedBigInteger('subject_id');
            $table->foreign("subject_id")->references("id")->on("subjects")
            ->onDelete("cascade")->onUpdate("cascade");

            $table->unsignedBigInteger('ambient_id');
            $table->foreign("ambient_id")->references("id")->on("ambients")
            ->onDelete("cascade")->onUpdate("cascade");

            $table->unsignedBigInteger('hour_ambient_id');
            $table->foreign("hour_ambient_id")->references("id")->on("hourambients")
            ->onDelete("cascade")->onUpdate("cascade");

         

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
        Schema::dropIfExists('groups');
    }
}
