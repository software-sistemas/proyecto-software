<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInscribirsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('inscribirs', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('año');

			$table->string('idasig');
			$table->foreign('idasig')
			->references('id')
			->on('asignaturas')
			->onDelete('cascade');

			$table->integer('idcur')->unsigned();
			$table->foreign('idcur')
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
		Schema::drop('inscribirs');
	}

}
