<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Profesor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profesor', function (Blueprint $table) {
            $table->string('idprofesor', 20);
            $table->string('nombreprof', 100);
            $table->string('apellido', 100);
            $table->string('telprof',10);
            $table->string('direccionprof',20);
            $table->string('sexoprof',10);
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
        Schema::drop('profesor');
    }
}
