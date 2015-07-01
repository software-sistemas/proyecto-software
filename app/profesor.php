<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class profesor extends Model {

	protected $table = 'profesors';
	protected $fillable = [ 'id', 'nombre', 'apellido', 'telefono', 'titulos', 'sexo', 'estado'];
}
