<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class estudiante extends Model {
	protected $table = 'estudiantes';
	protected $fillable = [ 'id', 'nombre', 'apellido', 'telefono', 'direccion', 'sexo', 'estado'];
}

/*
public function matriculas(){
		return $this->hasOne('matriculas', 'idestudiantem', 'id');
	}*/