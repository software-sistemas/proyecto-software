<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ACTUALIZAR ESTUDIANTE</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="{{ asset ('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset ('css/act-est.css') }}">
	<link rel="stylesheet" href="{{ asset ('js/jquery.js') }}">
    <script type="text/javascript" src="{{ asset ('js/jquery.js') }}"></script>
   
   	
</head>
<body>
	<header>
		<div class="container-fluid">
			<!--<div class="col-md-1">
				<img src="imagen/logo-new.png" id="logo-sup">
			</div>-->
			<div class="col-md-11" id="text-cab">
				<h1 id="titulo">INSTITUCIÓN EDUCATIVA ING DE SOFTWARE</h1>
			</div>
			<div class="col-md-1">
				
				<a  href = "{{ URL::previous() }}" class="btn btn-success" id="boton"> Regresar </a>
			</div>
		</div>
	</header>

	<div class"row">
				

		<div class="col-md-12 bordeinset" id="pag">
				
			
			<div class="boxlogin" >
				<br>
				<h2>ACTUALIZAR ESTUDIANTE</h2>
				<br>
				<div class="container-fluid">		
					 					

					{!! Form::model($estudiante, ['route' => ['actualizarest.update', $estudiante], 'method' => 'PATCH', 'class' => 'form-inline' ]) !!}
						<div class="form-group col-sm-offset-4">
							{!! Form::label('id', 'IDENTIFICACION') !!}
							{!! Form::text('id', null,['class' => 'form-control']) !!}
							@if($errors->has())						
								<b class="text-danger" >{{ $errors->first('id') }}</b>					
							@endif
						</div>
						<br><br>								
						<div class="form-group col-sm-offset-4">
							{!! Form::label('nombre', 'NOMBRES') !!}
							{!! Form::text('nombre', null,['class' => 'form-control']) !!}
							@if($errors->has())						
								<b class="text-danger">{{ $errors->first('nombre') }}</b>						
							@endif
						</div>
						<br><br>
						<div class="form-group col-sm-offset-4">
							{!! Form::label('apellido', 'APELLIDOS') !!}
							{!! Form::text('apellido', null,['class' => 'form-control']) !!}	
							@if($errors->has())						
								<b class="text-danger">{{ $errors->first('apellido') }}</b>						
							@endif						
						</div>
						<br><br>								
						<div class="form-group col-sm-offset-4">
							{!! Form::label('telefono', 'TELEFONO') !!}
							{!! Form::text('telefono', null,['class' => 'form-control']) !!}	
							@if($errors->has())						
								<b class="text-danger">{{ $errors->first('telefono') }}</b>						
							@endif
						</div>
						<br><br>
						<div class="form-group col-sm-offset-4">
							{!! Form::label('direccion', 'DIRECCION') !!}
							{!! Form::text('direccion', null,['class' => 'form-control']) !!}	
							@if($errors->has())						
								<b class="text-danger">{{ $errors->first('edad') }}</b>						
							@endif
						</div>
						<br><br>
						<center>
						<div class="form-group" id="sexo">
							{!! Form::label('sexo', 'SEXO') !!}
							{!! Form::select('sexo', ['masculino' => 'M', 'femenino' => 'F'], null, ['class' => 'form-control']) !!}	
							
							{!! Form::label('anio', 'CURSO') !!}
							{!! Form::select('anio', ['uno' => '1', 'dos' => '2', 'tres' => '3', 'cuatro' => '4', 'cinco' => '5', 'seis' => '6', 'siete' => '7', 'ocho' => '8', 'nueve' => '9', 'diez' => '10', 'once' => '11'], null, ['class' => 'form-control']) !!}
							
							{!! Form::label('estado', 'ESTADO') !!}
							{!! Form::select('estado', ['activo' => 'ACTIVO', 'inactivo' => 'INACTIVO'], null, ['class' => 'form-control']) !!}	
						</div>
						
						{!! Form::submit('ACTUALIZAR', ['class' => 'btn btn-success', 'id' => 'bot']) !!}
						</center>
					{!! Form::close() !!}
					
						
				</div>
				
			</div>

		</div>

	</div>
		

	<script src="{{ asset ('js/jquery.js') }}"></script>
	<script src="{{ asset ('js/bootstrap.js') }}"></script>
</body>
</html>

		<!--<script type="text/javascript">
		    $(document).ready(function(){
		    	$("#nav a").each(function(){    		
		    		$(this).click(function(){
		    			$('#dentro').attr('style','display: visible');
		    
		    		});
		    	});
		    });
		    </script>