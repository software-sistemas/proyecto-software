<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Notasalumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notasalumn', function (Blueprint $table) {
            $table->string('idestasign');
            $table->string('idasgnest');
            $table->string('periodo');
            $table->string('nota1');
            $table->string('nota2');
            $table->string('nota3');
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
        Schema::drop('notasalumn');
    }
}
