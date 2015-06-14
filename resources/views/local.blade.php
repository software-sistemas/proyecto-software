<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="{{ asset ('../css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset ('estilos.css') }}">
</head>
<body>
	<header>
		<div class="container-fluid">
			<div class="col-md-1">
			<img src="/..imagen/3.png" >
			</div>
			<div class="col-md-11">
			<h1 id="titulo1">Header</h1>
			</div>
		</div>
	</header>

<div id="op" class="container">
	<section class="main row">
		<article class=" col-xs-6 col-sm-7 col-md-9 col-lg-9">
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam, temporibus cum. Libero sapiente, dolores enim dolorem ea quasi in! Nam maxime id, aspernatur quam cupiditate vitae vel, assumenda consequuntur accusamus.
			</p>
		</article>
		<aside class="col-xs-6 col-sm-5 col-md-3 col-lg-3">
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus incidunt dolorum esse quidem beatae modi reprehenderit, explicabo fugit dolorem quis impedit, labore unde minus temporibus qui totam quas alias reiciendis.
			</p>
		</aside>
	</section>

	<div class="row" >
		<div id="uno" class="col-xs-12 col-sm-6 col-md-3">
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque error, alias dignissimos ducimus voluptatem, aspernatur totam quidem nobis, voluptate id cupiditate dolorum quaerat enim delectus esse incidunt nesciunt quia sint?
			</p>
			
		</div>
		<div id ="tres" class="col-xs-12 col-sm-6 col-md-3">
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti, incidunt adipisci facere, mollitia cumque illo quibusdam tenetur fugiat! Quidem totam hic nulla laudantium consequuntur placeat tempore sequi expedita, unde deserunt.
			</p>
		</div>
		
		<div id="dos" class="col-xs-12 col-sm-6 col-md-3">
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea optio recusandae magnam aperiam aliquam sed, reprehenderit nulla minima non necessitatibus obcaecati error perspiciatis consequatur dolorum, consequuntur inventore, quos unde facilis?
			</p>
		</div>
		<div id="cuatro" class="col-xs-12 col-sm-6 col-md-3">
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, vel, dolorum! Dolorum quibusdam ad fugit exercitationem, voluptates quos, quam quo laborum voluptate reprehenderit, nulla illo beatae aliquid. At, placeat, ipsum.
			</p>
		</div>
	</div>
</div>

<footer>
	<div class="container">
		<h3>Pie de pagina</h3>
	</div>
</footer>
	
</div>
<script src="{{ asset ('../js/jquery.js') }}"></script>
<script src="{{ asset ('../js/bootstrap.min.js') }}"></script>
</body>
</html>