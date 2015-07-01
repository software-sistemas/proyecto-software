<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>formulario</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">		
	<link rel="stylesheet" href="{{ asset ('css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset ('css/regnotas.css') }}">
</head>
<body>
	
		<div class="jumbotron boxlogin">
				<h2>REGISTRO NOTAS ALUMNO</h2>
				<br><br>
				<div class="container">
					<center>
					{!! Form::open(['route' => 'regasignatura.store', 'method' => 'POST','class' => 'form-inline']) !!}
						<div class="form-group col-sm-offset-3">
							{!! Form::label('idestudianten', 'identificacion') !!}
							{!! Form::text('idestudianten', null,['class' => 'form-control']) !!}
						</div>
						<br><br>
						<div class="form-group col-sm-offset-3">
							{!! Form::label('nombre', 'NOMBRE') !!}
							{!! Form::text('nombre', null,['class' => 'form-control']) !!}
						</div>								
						<br><br>
						<div class="form-group col-sm-offset-3">
							{!! Form::label('apellido', 'APELLIDO') !!}
							{!! Form::text('apellido', null,['class' => 'form-control']) !!}
						</div>
													
						<div class="form-group">
							<label>APELLIDO</label>
							<input type="text" name="telefono" class="form-control">
						</div>
						<br><br>
						<div class="form-group" id="asignatura">
							<label>ASIGNATURA</label>
							<select class="form-control">
							  <option>MATEMATICAS</option>
							  <option>ESPAÑOL</option>
							   <option>C. NATURALES</option>
							   <option>C. SOCIALES</option>
							   <option>INGLES</option>
							</select>
						</div>

					    <div class="form-group" id="periodo">
							<label>PERIODO</label>
							<select class="form-control">
							  <option>1</option>
							  <option>2</option>
							  <option>3</option>
							  <option>4</option>
							</select>
						</div>	
						<br><br>
						<div class="form-group">
							<label>NOTA 1</label>
							<input type="text" name="telefono" class="form-control">
						</div>
						<br><br>
						<div class="form-group">
							<label>NOTA 2</label>
							<input type="text" name="telefono" class="form-control">
						</div>
						<br><br>
						<div class="form-group">
							<label>NOTA 3</label>
							<input type="text" name="telefono" class="form-control">
						</div>
						<br><br>




						<input type="submit" class="btn btn-success" value="GUARDAR" id="bot">

						<!--<div class="form-group" id="sexo">
							<label>GRUPO</label>
							<select class="form-control">
							  <option>A</option>
							  <option>B</option>
							   <option>C</option>
							</select>
						<!--</div>-->
					
						<!--<div class="form-group" id="sexo">
							<label>ESTADO</label>
							<select class="form-control">
							  <option>ACTIVO</option>
							  <option>INACTIVO</option>
							</select>
							<input type="submit" class="btn btn-success" value="GUARDAR" id="bot">
						</div>
						<br><br>-->

						
					</form>
					</center>
				</div>
	
	<script src="{{ asset ('js/jquery.js') }}"></script>
	<script src="{{ asset ('js/bootstrap.js') }}"></script>
</body>
</html>