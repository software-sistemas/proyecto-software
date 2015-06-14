<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>formulario</title>
	<meta name="viewport" content="{{ asset ('width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0') }}">		
	<link rel="stylesheet" href="{{ asset ('css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset ('css/acest.css') }}">
</head>
<body>
	
		<div class="jumbotron boxlogin">
				<h2>ACTUALIZAR DATOS ASIGNATURA</h2>
				<br><br>
				<br><br>
				<div class="container">
					<center>
					<form method="POST" name="login" ig="login" class="form-inline">
						
						<div class="form-group">
							<label >CODIGO ASIGNATURA</label>
							<input type="text" name="nombre" class="form-control">
							<input type="submit" class="btn btn-success" value="BUSCAR" id="b">
						</div>
						<br><br>								
						<div class="form-group">
							<label>CODIGO ASIGNATURA</label>
							<input type="text" name="apellido" class="form-control">
						</div>
						<br><br>
						<div class="form-group">
							<label >NOMBRE ASISGNATURA</label>
							<input type="text" name="id"  class="form-control">
						</div>
						<br><br>
						<input type="submit" class="btn btn-success" value="GUARDAR" id="bot">																		
					</form>
					</center>
				</div>
	
	<script src="{{ asset ('js/jquery.js') }}"></script>
	<script src="{{ asset ('js/bootstrap.js') }}"></script>
</body>
</html>