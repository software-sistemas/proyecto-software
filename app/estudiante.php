<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class estudiante extends Model {

	protected $table = 'estudiantes';
	protected $fillable = [ 'idestudiante', 'nombre', 'apellido', 'telefono', 'edad', 'sexo', 'estado'];

}
