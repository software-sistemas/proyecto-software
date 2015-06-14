<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>formulario</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">		
	<link rel="stylesheet" href="{{ asset ('css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset ('css/vernotal.css') }}">
</head>
<body>
	
		<div class="jumbotron boxlogin">
				<h2>VER ASIGNATURAS ALUMNO</h2>
				<br><br>
				<div class="container">
					<center>
					<form method="POST" name="login" ig="login" class="form-inline">
						
						<div class="form-group">
							<label >IDENTIFICACION ALUMNO</label>
							<input type="text" name="nombre" class="form-control">
							<input type="submit" class="btn btn-success" value="BUSCAR" id="b">
						</div>
						<br><br>								
						<div class="form-group">
							<label>NOMBRE</label>
							<input type="text" name="apellido" class="form-control">
						</div>
						<br><br>
													
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

							<label>PERIODO</label>
							<select class="form-control">
							  <option>MATEMATICAS</option>
							  <option>ESPAÑOL</option>
							   <option>C. NATURALES</option>
							   <option>C. SOCIALES</option>
							   <option>INGLES</option>
							</select>
							<br><br>

							<label>NOTA 1</label>
							<input type="text" name="telefono" class="form-control">
                            <br><br>
							<label>NOTA 2</label>
							<input type="text" name="telefono" class="form-control">
                            <br><br>
							<label>NOTA 3</label>
							<input type="text" name="telefono" class="form-control">


						</div>

							<br><br>

						<input type="submit" class="btn btn-success" value="MODIFICAR" id="bot">

					    <input type="submit" class="btn btn-success" value="GUARDAR" id="bot">


						<!--<div class="container" align="center">
						<table class="table table-bordered table-hover table-condensed" >
						<tr>
							<th>ASIGNATURAS</th>
							
						</tr>
						<tr>
							<td>MATEMATICAS</td>
						</tr>
						<tr>
							<td>ESPAÑOL</td>
						</tr>
					
						</div>-->

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