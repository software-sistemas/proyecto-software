<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Principal</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="{{ asset ('css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset ('principal.css') }}">
	<link rel="stylesheet" type="text/javascript" href="{{ asset ('eventos.js') }}">
	<script type="text/javascript" src="{{ asset ('js/jquery.js') }}"></script>
</head>
<body>
	<header>
		<div class="container-fluid">
			<div class="col-md-1">
				<img src="imagen/logo-new.png" id="logo-sup">
			</div>
			<div class="col-md-11" id="text-cab">
				<h1 id="titulo">INSTITUCIÓN EDUCATIVA ING DE SOFTWARE</h1>
			</div>
		</div>
	</header>

	<div class"row">
		<div class="col-md-3" id="menu">
			<br>
			<div class="dropdown">
				<button class="btn btn-primary btn-lg dropdown-toggle" type="button" id="estudiante" data-toggle="dropdown" aria-extended="true">
					ESTUDIANTE   
					<span class="caret"></span>
				</button>
					<ul class="dropdown-menu dropdown-menu-right" role="menu" aria-labelledby="estudiante">
						<li id="regli"><a href="#" id="regla"><p>REGISTRAR</p></a></li>
						<li><a href="#"><p>ACTUALIZAR</p></a></li>
						<li><a href="#"><p>REGISTRAR ASIGNATURA</p></a></li>
						<li><a href="#"><p>REGISTRAR NOTAS</p></a></li>
						<li><a href="#"><p>VER NOTAS</p></a></li>
						<li><a href="#"><p>DATOS GENERALES</p></a></li>
					</ul>
			</div>
     		<br>
			<br>
				<div class="dropdown">
				<button class="btn btn-primary btn-lg dropdown-toggle" type="button" id="estudiante" data-toggle="dropdown" aria-extended="true">
					PROFESOR   
					<span class="caret"></span>
				</button>
					<ul class="dropdown-menu dropdown-menu-right" role="menu" aria-labelledby="estudiante">
						<li><a href="#"><p>REGISTRAR</p></a></li>
						<li><a href="#"><p>ACTUALIZAR</p></a></li>
						<li><a href="#"><p>REGISTRAR ASIGNATURA</p></a></li>
						<li><a href="#"><p>DATOS GENERALES</p></a></li>
					</ul>
			</div>
			<br>
			<br>
				<div class="dropdown">
				<button class="btn btn-primary btn-lg dropdown-toggle" type="button" id="estudiante" data-toggle="dropdown" aria-extended="true">
					ASIGNATURA  
					<span class="caret"></span> 
				</button>
					<ul class="dropdown-menu dropdown-menu-right" role="menu" aria-labelledby="estudiante">
						<li><a href="#"><p>REGISTRAR</p></a></li>
						<li><a href="#"><p>ACTUALIZAR</p></a></li>
					</ul>
			</div>
			<br>

		</div>

		<div class="col-md-9" id="pag" >
			<div id="monda"></div>
			  <iframe id="dentro" src="formulario.html" scrolling="no"></iframe> 
			</div>
	</div>
	<script src="{{ asset ('js/jquery.js') }}"></script>
	<script src="{{ asset ('js/bootstrap.js') }}"></script>
</body>
</html>