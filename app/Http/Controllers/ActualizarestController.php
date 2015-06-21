<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\actualizarestRequest;
use App\Http\Controllers\Controller;
use App\estudiante;

use Illuminate\Http\Request;

class ActualizarestController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('actualizarest');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(actualizarestRequest $Request)
	{
		$estudiante = new estudiante;
	   	$estudiante-> id = $request['id']; 
	   	$estudiante-> nombre = $request['nombre'];
	   	$estudiante-> apellido = $request['apellido']; 
	   	$estudiante-> telefono = $request['telefono'];
	   	$estudiante-> edad = $request['edad']; 
	   	$estudiante-> sexo = $request['sexo'];
	   	$estudiante-> estado = $request['estado'];   
	    $estudiante-> save();
	    return redirect('actualizarest');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		
		$estudiante = estudiante::find($id);
		return view('actualizarest', compact('estudiante'));
		//$actualizarest = estudiante::find($id);
		//return redirect('actualizarest.edit', compact('actualizarest'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, actualizarestRequest $request)
	{

		$estudiante = estudiante::find($id);
		
		$estudiante->update($request->all()); 
	   	
		return redirect('formulario');

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
