@extends('app2')

@section('content')


	<div class"row">
		<div class="col-md-3" id="menu">
			<br>
			<div class="dropdown" id="me">
				<button class="btn btn-success btn-lg dropdown-toggle btn-ttc" type="button" id="estudiante" data-toggle="dropdown" aria-extended="true">
					ESTUDIANTE   
					<span class="caret"></span>
				</button>
					<ul class="dropdown-menu dropdown-menu-right" role="menu" aria-labelledby="estudiante" id="estud">
					
						<li><a id="1" href="formulario"><p>REGISTRAR</p></a></li>
						<li><a id="3" href="regasigest"><p>REGISTRAR ASIGNATURA</p></a></li>
						<li><a id="4" href="regnotas"><p>REGISTRAR NOTAS</p></a></li>
						<li><a id="5" href="vernotalum"><p>VER NOTAS</p></a></li>
						<li><a id="6" href="datgenalum"><p>DATOS GENERALES</p></a></li>
					</ul>
			</div>
     		<br>
			<br>
				<div class="dropdown">
				<button class="btn btn-success btn-lg dropdown-toggle btn-ttc" type="button" id="profesor" data-toggle="dropdown" aria-extended="true">
					PROFESOR   
					<span class="caret"></span>
				</button>
					<ul class="dropdown-menu dropdown-menu-right" role="menu" aria-labelledby="profesor" id="profe">
						<li><a id="1" href="regprofesor"><p>REGISTRAR</p></a></li>
						<li><a id="2" href="actprof"><p>ACTUALIZAR</p></a></li>
						<li><a id="3" href="regasigprof"><p>REGISTRAR ASIGNATURA</p></a></li>
						<li><a id="4" href="datgenprof"><p>DATOS GENERALES</p></a></li>
					</ul>
			</div>
			<br>
			<br>
				<div class="dropdown">
				<button class="btn btn-success btn-lg dropdown-toggle btn-ttc" type="button" id="asignatura" data-toggle="dropdown" aria-extended="true" >
					ASIGNATURA  
					<span class="caret"></span> 
				</button>
					<ul class="dropdown-menu dropdown-menu-right" role="menu" aria-labelledby="asignatura" id="asigna">
						<li><a id="1" href="regasignatura"><p>REGISTRAR</p></a></li>
						<li><a id="2" href="actasignatura"><p>ACTUALIZAR</p></a></li>
					</ul>
			</div>
			<br>

		</div>

			<div class="col-md-9 bordeinset" id="pag">
				<div class="jumbotron boxlogin">
			
			<div class="panel panel-success">
				<div class="panel-heading ">REGISTROS DE ESTUDIANTE</div>
				<table class="table table-striped table-bordered table-hover ">
					<thead>
						
						<tr>
							<th>IDENTIFICACION</th>
							<th>NOMBRE</th>
							<th>APELLIDO</th>
							<th>TELEFONO</th>
							<th>ESTADO</th>
							<th>ACCION</th>
						</tr>
					</thead>
					<tbody>
						@foreach($estudiantes as $estudiante)
							<tr>
								<td>{{ $estudiante->id }}</td>
								<td>{{ $estudiante->nombre }}</td>
								<td>{{ $estudiante->apellido }}</td>
								<td>{{ $estudiante->telefono }}</td>
								<td>{{ $estudiante->estado }}</td>
								<td> <a href="/actualizarest/{{$estudiante->id}}/edit" class="btn btn-success btn-sm">ACTUALIZAR</a> </td>
							</tr>
						@endforeach
					</tbody>
				</table>
				{!! $estudiantes->render() !!}
				
			</div>
				
		</div>
	
			</div>
		</div>
		

	<script src="{{ asset ('js/jquery.js') }}"></script>
	<script src="{{ asset ('js/bootstrap.js') }}"></script>
	
		
	@endsection
</body>
</html>