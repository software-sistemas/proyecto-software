<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class estudiante extends Model {

	protected $table = 'estudiantes';
	protected $fillable = [ 'id', 'nombre', 'apellido', 'telefono', 'edad', 'sexo', 'estado'];

}
