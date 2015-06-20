<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePruebasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pruebas', function(Blueprint $table)
		{
			$table->string('name', 20);
            $table->string('apellidos', 100);
            $table->string('identificacion', 100);
            $table->string('telefono',10);
            $table->string('edad',5);
            $table->string('sexo',10);
            $table->integer('anio');
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
		Schema::drop('pruebas');
	}

}
