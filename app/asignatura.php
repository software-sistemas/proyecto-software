<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class asignatura extends Model {

	protected $table = 'asignaturas';
	protected $fillable = [ 'id', 'nombre', 'estado'];
}
