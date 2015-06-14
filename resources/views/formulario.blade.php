<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>formulario</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">		
	<link rel="stylesheet" href="{{ asset ('css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset ('css/formu.css') }}">
	<link rel="stylesheet" href="{{ asset ('eventos.js') }}">
</head>
<body>
	
		<div class="boxlogin" >
			<br>
				<h2>REGISTRAR ESTUDIANTE</h2>
				<br>
				<div class="container">
					<center>
					<form method="POST" name="login" ig="login" class="form-inline">
						
						<div class="form-group">
							<label >NOMBRE</label>
							<input type="text" name="nombre" class="form-control">
						</div>
						<br><br>								
						<div class="form-group">
							<label>APELLIDOS</label>
							<input type="text" name="apellido" class="form-control">
						</div>
						<br><br>
						<div class="form-group">
							<label >IDENTIFICACION</label>
							<input type="text" name="id"  class="form-control">
						</div>
						<br><br>								
						<div class="form-group">
							<label>TELEFONO</label>
							<input type="text" name="telefono" class="form-control">
						</div>
						<br><br>
						<div class="form-group">
							<label>EDAD</label>
							<input type="text" name="telefono" class="form-control">
						</div>
						<br><br>

						<div class="form-group" id="sexo">
							<label>SEXO</label>
							<select class="form-control">
							  <option>M</option>
							  <option>F</option>
							</select>
							<label>AÑO A CURSAR</label>
							<select class="form-control">
							  <option>1</option>
							  <option>2</option>
							  <option>3</option>
							  <option>4</option>
							  <option>5</option>
							  <option>6</option>
							  <option>7</option>
							  <option>8</option>
							  <option>9</option>
							  <option>10</option>
							  <option>11</option>

							</select>
							<label>ESTADO</label>
							<select class="form-control">
							  <option>ACTIVO</option>
							  <option>INACTIVO</option>
							</select>
						</div>
						
						
					</form>
					</center>
				</div>
				
					<input type="submit" class="btn btn-success" value="INGRESAR" id="bot">
	<script src="{{ asset ('js/jquery.js') }}"></script>
	<script src="{{ asset ('js/bootstrap.js') }}"></script>
</body>
</html>