<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>formulario</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">		
	<link rel="stylesheet" href="{{ asset ('css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset ('css/reg-prof.css') }}">
</head>
<body>
	
		<div class="jumbotron boxlogin">
				<h2>REGISTRAR PROFESOR</h2>
				<br><br><br><br>
				<div class="container">
					<center>
					{!! Form::open(['route' => 'regprofesor.store', 'method' => 'POST','class' => 'form-inline']) !!}
						<div class="form-group">
							{!! Form::label('idprofesor', 'IDENTIFICACION') !!}
							{!! Form::text('idprofesor', null,['class' => 'form-control']) !!}
						</div>
						<br><br>								
						<div class="form-group">
							{!! Form::label('nombre', 'NOMBRES') !!}
							{!! Form::text('nombre', null,['class' => 'form-control']) !!}
						</div>
						<br><br>
						<div class="form-group">
							{!! Form::label('apellido', 'APELLIDOS') !!}
							{!! Form::text('apellido', null,['class' => 'form-control']) !!}							
						</div>
						<br><br>								
						<div class="form-group">
							{!! Form::label('telefono', 'TELEFONO') !!}
							{!! Form::text('telefono', null,['class' => 'form-control']) !!}	
						</div>
						<br><br>
						<div class="form-group">
							{!! Form::label('direccion', 'DIRECCION') !!}
							{!! Form::text('direccion', null,['class' => 'form-control']) !!}	
							
						</div>
						<br><br>

						<div class="form-group" id="sexo">
							{!! Form::label('sexo', 'SEXO') !!}
							{!! Form::select('sexo', ['masculino' => 'M', 'femenino' => 'F'], null, ['class' => 'form-control']) !!}	
							
							
							{!! Form::label('estado', 'ESTADO') !!}
							{!! Form::select('estado', ['activo' => 'ACTIVO', 'inactivo' => 'INACTIVO'], null, ['class' => 'form-control']) !!}	
						</div>

						<!--<button type="submit" class="btn btn-success"  id="bot">
							INGRESAR
						</button>-->
						<br><br>
						{!! Form::submit('INGRESAR', ['class' => 'btn btn-success', 'id' => 'bot']) !!}
					{!! Form::close() !!}
					</center>
				</div>
	
	<script src="{{ asset ('js/jquery.js') }}"></script>
	<script src="{{ asset ('js/bootstrap.js') }}"></script>
</body>
</html>