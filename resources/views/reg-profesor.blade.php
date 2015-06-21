<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>regnota</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="{{ asset ('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset ('css/reg-prof.css') }}">
	<link rel="stylesheet" href="{{ asset ('js/jquery.js') }}">
    <script type="text/javascript" src="{{ asset ('js/jquery.js') }}"></script>
   
   	
</head>
<body>
	<header>
		<div class="container-fluid">
			<div class="col-md-1">
				<img src="imagen/logo-new.png" id="logo-sup">
			</div>
			<div class="col-md-10" id="text-cab">
				<h1 id="titulo">INSTITUCIÓN EDUCATIVA ING DE SOFTWARE</h1>
			</div>
			<div class="col-md-1">
				<button class="btn btn-success" id="boton" >SALIR</button>
			</div>
		</div>
	</header>

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
						<li><a id="2" href="actualizarest"><p>ACTUALIZAR</p></a></li>
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

		</div >

		<div class="col-md-9 bordeinset scroll" id="pag">
		

			<div class="jumbotron boxlogin">
				<h2>REGISTRAR PROFESOR</h2>
				<br><br><br><br>
				<div class="container-fluid">
				
					{!! Form::open(['route' => 'regprofesor.store', 'method' => 'POST','class' => 'form-inline']) !!}
						<div class="form-group col-sm-offset-3">
							{!! Form::label('idprofesor', 'IDENTIFICACION') !!}
							{!! Form::text('idprofesor', null,['class' => 'form-control']) !!}
							@if($errors->has())						
								<b class="text-danger">{{ $errors->first('idprofesor') }}</b>						
							@endif
						</div>
						<br><br>								
						<div class="form-group col-sm-offset-3">
							{!! Form::label('nombre', 'NOMBRES') !!}
							{!! Form::text('nombre', null,['class' => 'form-control']) !!}
							@if($errors->has())						
								<b class="text-danger">{{ $errors->first('nombre') }}</b>						
							@endif
						</div>
						<br><br>
						<div class="form-group col-sm-offset-3">
							{!! Form::label('apellido', 'APELLIDOS') !!}
							{!! Form::text('apellido', null,['class' => 'form-control']) !!}	
							@if($errors->has())						
								<b class="text-danger">{{ $errors->first('apellido') }}</b>						
							@endif						
						</div>
						<br><br>								
						<div class="form-group col-sm-offset-3">
							{!! Form::label('telefono', 'TELEFONO') !!}
							{!! Form::text('telefono', null,['class' => 'form-control']) !!}	
							@if($errors->has())						
								<b class="text-danger">{{ $errors->first('telefono') }}</b>						
							@endif
						</div>
						<br><br>
						<div class="form-group col-sm-offset-3">
							{!! Form::label('direccion', 'DIRECCION') !!}
							{!! Form::text('direccion', null,['class' => 'form-control']) !!}	
							@if($errors->has())						
								<b class="text-danger">{{ $errors->first('direccion') }}</b>						
							@endif
						</div>
						<br><br>

						<div class="form-group col-sm-offset-2" id="sexo">
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
					
					<!--@if($errors->any())

					@foreach($errors->all() as $error)
							<li> {{ $error }}</li>
					@endforeach
					
					@endif-->


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