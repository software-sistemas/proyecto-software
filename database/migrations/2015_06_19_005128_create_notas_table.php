<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('notas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('año');
			$table->string('periodo1')->nullable();
			$table->float('periodo2')->nullable();
			$table->float('periodo3')->nullable();
			$table->float('periodo4')->nullable();

			$table->string('idestudianten');
			$table->foreign('idestudianten')
			->references('id')
			->on('estudiantes')
			->onDelete('cascade');

			$table->string('codigon');
			$table->foreign('codigon')
			->references('id')
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
		Schema::drop('notas');
	}

}
