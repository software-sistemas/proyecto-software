<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>regnota</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="{{ asset ('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset ('css/regnotal.css') }}">
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

		</div class>

			<div class="col-md-9 bordeinset scroll" id="pag">
				
				
			<div class="jumbotron boxlogin">
				<h2>REGISTRAR ASIGNATURA</h2>
				<br><br><br><br>
				<div class="container-fluid">
				
				{!! Form::open(['route' => 'regasignatura.store', 'method' => 'POST','class' => 'form-inline']) !!}
						<div class="form-group col-sm-offset-3">
							{!! Form::label('id', 'CODIGO') !!}
							{!! Form::text('id', null,['class' => 'form-control']) !!}
							@if($errors->has())						
								<b class="text-danger">{{ $errors->first('id') }}</b>						
							@endif
						</div>
						<br><br>								
						<div class="form-group col-sm-offset-3">
							{!! Form::label('nombre', 'NOMBRE') !!}
							{!! Form::text('nombre', null,['class' => 'form-control']) !!}
							@if($errors->has())						
								<b class="text-danger">{{ $errors->first('nombre') }}</b>						
							@endif
						</div>
						<br><br>								
						<div class="form-group col-sm-offset-3">
							{!! Form::label('año', 'AÑO') !!}
							{!! Form::text('año', null,['class' => 'form-control']) !!}
							@if($errors->has())						
								<b class="text-danger">{{ $errors->first('año') }}</b>						
							@endif
						</div>
						<br><br>
						<div class="form-group col-sm-offset-3" id="estad">
							{!! Form::label('estado', 'ESTADO') !!}
							{!! Form::select('estado', ['activo' => 'ACTIVO', 'inactivo' => 'INACTIVO'], null, ['class' => 'form-control']) !!}	
						</div>
						<br><br>
						<div class="form-group col-sm-offset-3" id="estad">
							{!! Form::label('grado', 'GRADO') !!}
							{!! Form::select('grado', ['1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7', '8' => '8', '9' => '9', '10' => '10', '11' => '11'], null, ['class' => 'form-control']) !!}	
						</div>
								<br><br><br>
							<center>
						{!! Form::submit('INGRESAR', ['class' => 'btn btn-success bbt', 'id' => 'bot']) !!}
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