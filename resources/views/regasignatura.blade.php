<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>formulario</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">		
	<link rel="stylesheet" href="{{ asset ('css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset ('css/regnotal.css') }}">
</head>
<body>
	
		<div class="jumbotron boxlogin">
				<h2>REGISTRAR ASIGNATURA</h2>
				<br><br><br><br>
				<div class="container">
					<center>
				{!! Form::open(['route' => 'regasignatura.store', 'method' => 'POST','class' => 'form-inline']) !!}
						<div class="form-group">
							{!! Form::label('codigo', 'CODIGO') !!}
							{!! Form::text('codigo', null,['class' => 'form-control']) !!}
						</div>
						<br><br>								
						<div class="form-group">
							{!! Form::label('nombre', 'NOMBRE') !!}
							{!! Form::text('nombre', null,['class' => 'form-control']) !!}
						</div>
						<br><br>
						<div class="form-group" id="estad">
							{!! Form::label('estado', 'ESTADO') !!}
							{!! Form::select('estado', ['activo' => 'ACTIVO', 'inactivo' => 'INACTIVO'], null, ['class' => 'form-control']) !!}	
						</div>

						<!--<button type="submit" class="btn btn-success"  id="bot">
							INGRESAR
						</button>-->
								<br>
								<br>
								<br>
						{!! Form::submit('INGRESAR', ['class' => 'btn btn-success', 'id' => 'bot']) !!}
					{!! Form::close() !!}
					</center>
				</div>
	
	<script src="{{ asset ('js/jquery.js') }}"></script>
	<script src="{{ asset ('js/bootstrap.js') }}"></script>
</body>
</html>