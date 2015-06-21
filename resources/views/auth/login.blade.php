<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>LOGIN</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="{{ asset ('css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset ('css/login.css') }}">
</head>
<body>
					
						<div id="fondo1">
			<h1>INSTITUCIÓN EDUCATIVA ING DE SOFTWARE</h1>
	<div class="jumbotron boxlogin">
				<div class="container">
				<h2>Iniciar sesión</h2>
					<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
					

@if (count($errors) > 0)
						<div class="alert alert-danger">
							
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif


	<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="form-group">
							<label >USUARIO</label>
							<input type="text" name="usuario" id="user" class="form-control">
						</div>
						<div class="form-group">
							<label>CONTRASEÑA</label>
							<input type="password" name="password" id="password" class="form-control">
						</div>
						<input type="submit" class="btn btn-success" value="INGRESAR" id="bot">
						
					
					</form>
				</div>
		
		</div>
	</div>
	<script src="{{ asset ('js/jquery.js') }}"></script>
	<script src="{{ asset ('js/bootstrap.js') }}"></script>
</body>
</html>
