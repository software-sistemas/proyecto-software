<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>formulario</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">		
	<link rel="stylesheet" href="{{ asset ('css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset ('css/formu.css') }}">
	<link rel="stylesheet" href="{{ asset ('eventos.js') }}">
</head>
<body>
	
		<div class="boxlogin" >
			<br>
				<h2>REGISTRAR ESTUDIANTE</h2>
				<br>
				<div class="container">		
											
					<center>
					<!--<form method="POST" name="login" ig="login" class="form-inline">-->
						{!! Form::open(['route' => 'formulario.store', 'method' => 'POST','class' => 'form-inline']) !!}
						<div class="form-group">
							{!! Form::label('idestudiante', 'IDENTIFICACION') !!}
							{!! Form::text('idestudiante', null,['class' => 'form-control']) !!}
							@if($errors->has())						
								<b class="text-danger" >{{ $errors->first('idestudiante') }}</b>					
							@endif
						</div>
						<br><br>								
						<div class="form-group">
							{!! Form::label('nombre', 'NOMBRES') !!}
							{!! Form::text('nombre', null,['class' => 'form-control']) !!}
							@if($errors->has())						
								<b class="text-danger">{{ $errors->first('nombre') }}</b>						
							@endif
						</div>
						<br><br>
						<div class="form-group">
							{!! Form::label('apellido', 'APELLIDOS') !!}
							{!! Form::text('apellido', null,['class' => 'form-control']) !!}	
							@if($errors->has())						
								<b class="text-danger">{{ $errors->first('apellido') }}</b>						
							@endif						
						</div>
						<br><br>								
						<div class="form-group">
							{!! Form::label('telefono', 'TELEFONO') !!}
							{!! Form::text('telefono', null,['class' => 'form-control']) !!}	
							@if($errors->has())						
								<b class="text-danger">{{ $errors->first('telefono') }}</b>						
							@endif
						</div>
						<br><br>
						<div class="form-group">
							{!! Form::label('edad', 'EDAD') !!}
							{!! Form::text('edad', null,['class' => 'form-control']) !!}	
							@if($errors->has())						
								<b class="text-danger">{{ $errors->first('edad') }}</b>						
							@endif
						</div>
						<br><br>

						<div class="form-group" id="sexo">
							{!! Form::label('sexo', 'SEXO') !!}
							{!! Form::select('sexo', ['masculino' => 'M', 'femenino' => 'F'], null, ['class' => 'form-control']) !!}	
							
							{!! Form::label('anio', 'CURSO') !!}
							{!! Form::select('anio', ['uno' => '1', 'dos' => '2', 'tres' => '3', 'cuatro' => '4', 'cinco' => '5', 'seis' => '6', 'siete' => '7', 'ocho' => '8', 'nueve' => '9', 'diez' => '10', 'once' => '11'], null, ['class' => 'form-control']) !!}
							
							{!! Form::label('estado', 'ESTADO') !!}
							{!! Form::select('estado', ['activo' => 'ACTIVO', 'inactivo' => 'INACTIVO'], null, ['class' => 'form-control']) !!}	
						</div>

						<!--<button type="submit" class="btn btn-success"  id="bot">
							INGRESAR
						</button>-->
						
						{!! Form::submit('INGRESAR', ['class' => 'btn btn-success', 'id' => 'bot']) !!}
					{!! Form::close() !!}
					</center>
				</div>

	<script src="{{ asset ('js/jquery.js') }}"></script>
	<script src="{{ asset ('js/bootstrap.js') }}"></script>


	<!--@if($errors->any())
		<ul class="alert alert-danger">
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach

		</ul>
	@endif-->

</body>
</html>