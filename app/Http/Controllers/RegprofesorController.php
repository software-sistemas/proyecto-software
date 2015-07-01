<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\regprofesorRequest;
use App\Http\Controllers\Controller;
use App\profesor;

use Request;

class RegprofesorController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('reg-profesor');
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
	public function store(regprofesorRequest $Request)
	{
		//input = Request::all();

	    $profesor = new profesor;
	   	$profesor-> id = $Request['id']; 
	   	$profesor-> nombre = $Request['nombre'];
	   	$profesor-> apellido = $Request['apellido']; 
	   	$profesor-> telefono = $Request['telefono'];
	   	$profesor-> titulos = $Request['titulos']; 
	   	$profesor-> sexo = $Request['sexo'];
	   	$profesor-> estado = $Request['estado'];   
	    $profesor-> save();
	    return redirect('regprofesor');
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
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
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
