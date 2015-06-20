<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCargasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cargas', function(Blueprint $table)
		{
			$table->increments('idcarga');

			$table->string('idprofesorc');
			$table->foreign('idprofesorc')
			->references('idprofesor')
			->on('profesors')
			->onDelete('cascade');

			$table->string('codigoc');
			$table->foreign('codigoc')
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
		Schema::drop('cargas');
	}

}
