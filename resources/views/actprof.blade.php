<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>formulario</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">		
	<link rel="stylesheet" href="{{ asset ('css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset ('css/acpro.css') }}">
</head>
<body>
	
		<div class="jumbotron boxlogin">
				<h2>ACTUALIZAR DATOS PROFESOR</h2>
				<br><br><br><br>
				<div class="container">
					<center>
					<form method="POST" name="login" ig="login" class="form-inline">
						
						<div class="form-group">
							<label >IDENTIFICACION</label>
							<input type="text" name="nombre" class="form-control">
							<input type="submit" class="btn btn-success" value="BUSCAR" id="b">
						</div>
						<br><br>								
						<div class="form-group">
							<label>PELLIDO</label>
							<input type="text" name="apellido" class="form-control">
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
							<label>DIRECCION</label>
							<input type="text" name="telefono" class="form-control">
						</div>
						<br><br>
						<div class="form-group" id="sexo">
							<label>ESTADO</label>
							<select class="form-control">
							  <option>ACTIVO</option>
							  <option>INACTIVO</option>
							</select>
						</div>


						

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
					<input type="submit" class="btn btn-success" value="GUARDAR" id="bot">
					</center>
				</div>
	
	<script src="{{ asset ('js/jquery.js') }}"></script>
	<script src="{{ asset ('js/bootstrap.js') }}"></script>
</body>
</html>