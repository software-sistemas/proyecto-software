<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class prueba extends Model {

	protected $table = 'pruebas';
	protected $fillable = [ 'nombre', 'apellido', 'identificacion', 'telefono', 'edad', 'sexo', 'anio', 'estado'];

}
