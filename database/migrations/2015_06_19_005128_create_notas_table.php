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
			$table->increments('idnota');
			$table->string('periodo');
			$table->float('nota1');
			$table->float('nota2');
			$table->float('nota3');

			$table->integer('idmatriculan')->unsigned();
			$table->foreign('idmatriculan')
			->references('idmatricula')
			->on('matriculas')
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
