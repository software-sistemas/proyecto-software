@extends('app2')

@section('content')
	
		<div class="jumbotron boxlogin">

			<div class="panel panel-primary">
				<div class="panel-heading">REGISTROS DE ESTUDIANTE</div>
				<table class="table table-striped table-bordered">
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
				{{ $estudiantes->render() }}
			</div>
				
		</div>
	
	@endsection
</body>
</html>