<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>formulario</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">		
	<link rel="stylesheet" href="{{ asset ('css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset ('css/regnotal.css') }}">
</head>
<body>
	
		<div class="jumbotron boxlogin">
				<h2>REGISTRAR ASIGNATURA</h2>
				<br><br><br><br>
				<div class="container">
					<center>
					<form method="POST" name="login" ig="login" class="form-inline">
						
						<div class="form-group">
							<label >NOMBRE ASIGNATURA</label>
							<input type="text" name="nombre" class="form-control">
						</div>
						<br><br>								
						<div class="form-group">
							<label>CODIGO ASIGNATURA</label>
							<input type="text" name="apellido" class="form-control">
						</div>
						<br><br>

						<!--<div class="form-group" id="sexo">
							<label>SEXO</label>
							<select class="form-control">
							  <option>M</option>
							  <option>F</option>
							</select>
						</div>-->
						

						<input type="submit" class="btn btn-success" value="INGRESAR" id="bot">
					</form>
					</center>
				</div>
	
	<script src="{{ asset ('js/jquery.js') }}"></script>
	<script src="{{ asset ('js/bootstrap.js') }}"></script>
</body>
</html>