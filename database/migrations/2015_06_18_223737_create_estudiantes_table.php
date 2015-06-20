<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstudiantesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('estudiantes', function(Blueprint $table)
		{
			$table->string('idestudiante');
			$table->string('nombre');
			$table->string('apellido');
			$table->string('telefono');
			$table->integer('edad');
			$table->string('sexo');
			$table->string('estado');
			$table->timestamps();
			$table->primary('idestudiante');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('estudiantes');
	}

}
