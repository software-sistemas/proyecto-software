@extends('app')

@section('content')

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
@endsection