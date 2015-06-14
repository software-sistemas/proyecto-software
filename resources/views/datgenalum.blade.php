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
				<h2>DATOS GENRALES ALUMNO</h2>
				<br><br>
				<br><br>
				<div class="container">
					<center>
					<form method="POST" name="login" ig="login" class="form-inline">
						
						<div class="form-group" id="sexo">
							<label>AÑO CURSADO</label>
							<select class="form-control">
							  <option>1</option>
							  <option>2</option>
							  <option>3</option>
							  <option>4</option>
							  <option>5</option>
							</select>

							<label>GRUPO</label>
							<select class="form-control">
							  <option>A</option>
							  <option>B</option>
							  <option>C</option>
							</select>

							<input type="submit" class="btn btn-success" value="BUSCAR" id="bot">
							<br><br><br>
						</div>


						</div>



					


						<div class="container" align="center">
						<table class="table table-bordered table-hover table-condensed" >
						<tr>
							<th>IDENTIFICACION</th>
							<th>NOMBRE</th>
							<th>APELLIDO</th>
							<th>EDAD</th>
							<th>TELEFONO</th>
							<th>AÑO</th>
							<th>GRUPO</th>
							<th>ESTADO</th>
						</tr>
						<tr>
							<td>''</td>
							<td>''</td>
							<td>''</td>
							<td>''</td>
							<td>''</td>
							<td>''</td>
							<td>''</td>
							<td>''</td>
						</tr>
						
					
						</div>

					

						
					</form>
					</center>
				</div>
	
	<script src="{{ asset ('js/jquery.js') }}"></script>
	<script src="{{ asset ('js/bootstrap.js') }}"></script>
</body>
</html>