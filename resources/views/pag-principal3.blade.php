<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Principal</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="{{ asset ('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset ('css/principal.css') }}">
	<link rel="stylesheet" href="{{ asset ('js/jquery.js') }}">
    <script type="text/javascript" src="{{ asset ('js/jquery.js') }}"></script>
   
   
</head>
<body>

				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
					<li class="dropdown " >
							
						</li>
					@else
						<li class="dropdown cerr">
							<a href="#" style="color:grey;" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->usuario }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu" >
								<li><a  href="{{ url('/auth/logout') }}">Cerrar Sesión</a></li>
							</ul>
						</li>
					@endif
				</ul>

	<header>
		<div class="container-fluid">
			<div class="col-md-1">
				<img src="imagen/logo-new.png" id="logo-sup">
			</div>
			<div class="col-md-10" id="text-cab">
				<h1 id="titulo">INSTITUCIÓN EDUCATIVA ING DE SOFTWARE</h1>
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

		</div>

			<div class="col-md-9 bordeinset" id="pag">
				
			</div>
		</div>
		

	<script src="{{ asset ('js/jquery.js') }}"></script>
	<script src="{{ asset ('js/bootstrap.js') }}"></script>
</body>
</html>

		