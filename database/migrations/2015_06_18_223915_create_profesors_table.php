<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfesorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('profesors', function(Blueprint $table)
		{
			$table->string('idprofesor');
			$table->string('nombre');
			$table->string('apellido');
			$table->string('telefono');
			$table->string('direccion');
			$table->string('sexo');
			$table->string('estado');
			$table->timestamps();
			$table->primary('idprofesor');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('profesors');
	}

}
