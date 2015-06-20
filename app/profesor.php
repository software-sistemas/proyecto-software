<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class profesor extends Model {

	protected $table = 'profesors';
	protected $fillable = [ 'idprofesor', 'nombre', 'apellido', 'telefono', 'direccion', 'sexo', 'estado'];

}
