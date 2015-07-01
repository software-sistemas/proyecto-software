<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\regasignaturaRequest;
use App\Http\Controllers\Controller;
use App\asignatura;
use App\curso;

use Request;

class RegasignaturaController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//$user = asignatura::paginate();
		
		return view('regasignatura');

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(regasignaturaRequest $request)
	{
		//$input = Request::all();

	    /*$asignatura = new asignatura;
	   	$asignatura-> id = $request['id']; 
	   	$asignatura-> nombre = $request['nombre'];
	   	$asignatura-> estado = $request['estado'];   
	    $asignatura-> save();
	    return redirect('regasignatura');*/
	    
	    \DB::table('asignaturas')->insert(array(
            array(
                'id' => $request->id,
                'nombre' => $request->nombre,
                'estado' => $request->estado,
            )
        ));

        $id=0;

        $cursos=Curso::all();

        foreach ($cursos as $curso) {
            if($curso->grado==$request->grado){
                $id=$curso->id;
                \DB::table('inscribirs')->insert(array(
                    'idasig' => $request->id,
                    'idcur' => $id,
                    'año' => $request->año,
                ));
            }
        }

        return redirect()->route('regasignatura.index')->with('notice','Asignatura Creada con Exito');
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
