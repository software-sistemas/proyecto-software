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
			$table->increments('idmatricula');
			$table->string('grupo');
			$table->integer('grado');

			$table->string('idestudiantem');
			$table->foreign('idestudiantem')
			->references('idestudiante')
			->on('estudiantes')
			->onDelete('cascade');

			$table->string('codigom');
			$table->foreign('codigom')
			->references('codigo')
			->on('asignaturas')
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
