<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="{{ asset ('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset ('css/datosalum.css') }}">
	<link rel="stylesheet" href="{{ asset ('js/jquery.js') }}">
    <script type="text/javascript" src="{{ asset ('js/jquery.js') }}"></script>
   
</head>
<body>
	<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
					<li class="dropdown " >
							
						</li>
					@else
						<li class="dropdown cerr">
							<a href="#" style="color:grey;" class="btn btn-success dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" id="sesion">{{ Auth::user()->usuario }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu" >
								<li><a  href="{{ url('/auth/logout') }}">Cerrar Sesión</a></li>
							</ul>
						</li>
					@endif
				</ul>

	<header>
		<div class="container-fluid">
			<div class="col-md-1">
				<img src="imagen/logo-new.png" id="logo-sup">
			</div>
			<div class="col-md-10" id="text-cab">
				<h1 id="titulo">INSTITUCIÓN EDUCATIVA ING DE SOFTWARE</h1>
			</div>
			
		</div>
	</header>

@yield('content')



</body>
</html>







<!--<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel</title>

	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">

	<!-- Fonts -->
	<!--<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>-->

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
<!--</head>-->
<!--<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Laravel</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="{{ url('/') }}">Home</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
						<li><a href="{{ url('/auth/login') }}">Login</a></li>
						<li><a href="{{ url('/auth/register') }}">Register</a></li>
					@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ url('/auth/logout') }}">Logout</a></li>
							</ul>
						</li>
					@endif
				</ul>
			</div>
		</div>
	</nav>

	@yield('content')-->

	<!-- Scripts -->
	<!--<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>-->
