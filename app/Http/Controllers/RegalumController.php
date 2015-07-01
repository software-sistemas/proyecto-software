<?php namespace App\Http\Controllers;

use App\Http\Requests;

//llamada al archivo de validacion
use App\Http\Requests\formularioRequest;

use App\Http\Controllers\Controller;
//llama al modelo
use App\estudiante;
use App\curso;
//use App\matricula;
//recortar link
use Request;



class RegalumController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('formulario');
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

	//llamar request como parametro acontinuacion:
	public function store(formularioRequest $request)
	{
	//solo recibir un parametro
		// $input = Request::get('nombre');

	//los llama a todos:
	      //$input = Request::all();
	      //estudiante::create($input);
	      //return redirect('formulario');

    //llamanto a todos con all();
	    //$estudiante = new estudiante
	    //$estudiante->nombre=$input ['nombre']; 
	    //$estudiante->save();
/*
	    $estudiante = new estudiante;
	   	$estudiante-> id = $request['id']; 
	   	$estudiante-> nombre = $request['nombre'];
	   	$estudiante-> apellido = $request['apellido']; 
	   	$estudiante-> telefono = $request['telefono'];
	   	$estudiante-> direccion = $request['direccion']; 
	   	$estudiante-> sexo = $request['sexo'];
	   	$estudiante-> estado = $request['estado'];   
	    $estudiante-> save();
*/
	   /* $matricula = new matricula;
	    $matricula-> grado = $request['grado'];
	    $matricula->push();
	    
		*/
	    //return redirect('formulario');

    //hay que poner parametros ($request request)
		//$estudiante = new prueba($request->all());
		//$estudiante->save();





		 $id=0;

        $cursos=Curso::all();

        foreach ($cursos as $curso) {
            if($curso->grado==$request->grado && $curso->grupo==$request->grupo ){
                $id=$curso->id;

            }
        }

        \DB::table('estudiantes')->insert(array(
            array(
                'id' => $request->id,
                'nombre' => $request->nombre,
                'apellido'  =>	$request->apellido,
                'telefono'  =>	$request->telefono,
                'direccion' => $request->direccion,
                'sexo' => $request->sexo,
                'estado' => $request->estado,
            )
        ));


        \DB::table('matriculas')->insert(array(
            array(
                'idcurso' => $id,
                'idalumno' => $request->id,
            )
        ));
        
        return redirect()->route('formulario.index')->with('notice','Alumno Creado con Exito');
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
		/*$estudiante= estudiante::find($id);
		return view('actualizarest', compact('estudiante'));*/
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
