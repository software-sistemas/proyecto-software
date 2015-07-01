<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatriculasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('matriculas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('año_mat');
			
			$table->string('idalumno');
			$table->foreign('idalumno')
			->references('id')
			->on('estudiantes')
			->onDelete('cascade');

			$table->integer('idcurso')->unsigned();
			$table->foreign('idcurso')
			->references('id')
			->on('cursos')
			->onDelete('cascade');


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
		Schema::drop('matriculas');
	}

}
