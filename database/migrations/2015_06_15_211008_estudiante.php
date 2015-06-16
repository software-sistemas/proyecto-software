<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Estudiante extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiante', function (Blueprint $table) {
            $table->string('idestudiante', 20);
            $table->string('nombreest', 100);
            $table->string('apellidoest', 100);
            $table->string('telest',10);
            $table->string('edadest',5);
            $table->string('sexest',10);
            $table->integer('añocursar');
            $table->string('estado');
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
        Schema::drop('estudiante');
    }
}
