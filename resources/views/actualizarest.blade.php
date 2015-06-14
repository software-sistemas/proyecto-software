<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>formulario</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">		
	<link rel="stylesheet" href="{{ asset ('css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset ('css/act-est.css') }}">
</head>
<body>
	
		<div class="jumbotron boxlogin">
				<h2>ACTUALIZAR DATOS ESTUDIANTE</h2>
				
				<div class="container">
					<br><br>
					<br>
					<center>
					<form method="POST" name="login" ig="login" class="form-inline">
						
						<div class="form-group">
							<label >IDENTIFICACION</label>
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
							<label >APELLIDOS</label>
							<input type="text" name="id"  class="form-control">
						</div>
						<br><br>								
						<div class="form-group">
							<label>EDAD</label>
							<input type="text" name="telefono" class="form-control">
						</div>
						<br><br>								
						<div class="form-group">
							<label>TELEFONO</label>
							<input type="text" name="telefono" class="form-control">
						</div>
						<br><br>								
						<div class="form-group">
							<label>GRADO</label>
							<input type="text" name="telefono" class="form-control">
						</div>
						<br><br>

						<div class="form-group" id="sexo">
							<label>GRUPO</label>
							<select class="form-control">
							  <option>A</option>
							  <option>B</option>
							   <option>C</option>
							</select>
						<!--</div>-->
					
						<!--<div class="form-group" id="sexo">-->
							<label>ESTADO</label>
							<select class="form-control">
							  <option>ACTIVO</option>
							  <option>INACTIVO</option>
							</select>
							
						</div>
						

						
					</form>
					</center>
					<input type="submit" class="btn btn-success" value="GUARDAR" id="bot">
				</div>
	
	<script src="{{ asset ('js/jquery.js') }}"></script>
	<script src="{{ asset ('js/bootstrap.js') }}"></script>
</body>
</html>