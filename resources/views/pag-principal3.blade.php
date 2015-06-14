<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Principal</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="{{ asset ('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset ('css/principal.css') }}">
	<link rel="stylesheet" href="{{ asset ('js/jquery.js') }}">
    <script type="text/javascript" src="{{ asset ('js/jquery.js') }}"></script>
   
   	<script type="text/javascript">
	$(document).ready(function(){
	    $("button").each(function(){
	    	$(this).click(function(){
	    		var tocar =	$(this).attr('id');
	    	
	    	switch(tocar){
	    	case 'estudiante':
		    	$("#estud a").each(function(){   
		    		$(this).click(function(){
		    			var elegir = $(this).attr('id');
		    			
		    			if(elegir == 1){
		    				
		    				$('#registrar').attr('style','display: visible');

		    			}else if(elegir == 2){
		    				
		    				$('#registrar').attr('style','display: none');
		    				$('#actualizar').attr('style','display: visible');
		    			}else if(elegir == 3){
		    					
		    					$('#registrar').attr('style','display: none');
		    					$('#actualizar').attr('style','display: none');
		    					$('#regasigest').attr('style','display: visible');
		    			}else if(elegir == 4){
		    				
		    				$('#registrar').attr('style','display: none');
		    				$('#actualizar').attr('style','display: none');
		    				$('#regasigest').attr('style','display: none');
		    				$('#regnotas').attr('style','display: visible');
		    			}else if(elegir == 5){
		    					
		    					$('#registrar').attr('style','display: none');
		    					$('#actualizar').attr('style','display: none');
		    					$('#regnotas').attr('style','display: none');
		    					$('#regasigest').attr('style','display: none');
		    					$('#vernotalu').attr('style','display: visible');


		    			}else if(elegir == 6){
		    				
		    				$('#registrar').attr('style','display: none');
		    				$('#actualizar').attr('style','display: none');
		    				$('#regnotas').attr('style','display: none');
		    				$('#regasigest').attr('style','display: none');
		    				$('#vernotalu').attr('style','display: none');
		    				$('#datgenalum').attr('style','display: visible');
		    			}
		    		});
		    	});
			break;

			case 'profesor':

			$("#profe a").each(function(){   
							$('#registrar').attr('style','display: none');
		    				$('#actualizar').attr('style','display: none');
		    				$('#regnotas').attr('style','display: none');
		    				$('#regasigest').attr('style','display: none');
		    				$('#vernotalu').attr('style','display: none');
		    				$('#datgenalum').attr('style','display: none');
		    		$(this).click(function(){
		    			var seleccionar = $(this).attr('id');
		    			
		    			if(seleccionar == 1){
		    				
		    				$('#regprof').attr('style','display: visible');

		    			}else if(seleccionar == 2){
		    				$('#regprof').attr('style','display: none');
		    				$('#actpro').attr('style','display: visible');
		    			}else if(seleccionar == 3){
		    				$('#regprof').attr('style','display: none');
		    				$('#actpro').attr('style','display: none');
		    				$('#regasigprof').attr('style','display: visible');
		    					
		    			}else if(seleccionar == 4){
		    				$('#regprof').attr('style','display: none');
		    				$('#actpro').attr('style','display: none');
		    				$('#regasigprof').attr('style','display: none');
		    				$('#datosgenprof').attr('style','display: visible');


		    			}
		    		});
		    	});

			break;

			case 'asignatura':
			$("#asigna a").each(function(){   
							$('#registrar').attr('style','display: none');
		    				$('#actualizar').attr('style','display: none');
		    				$('#regnotas').attr('style','display: none');
		    				$('#regasigest').attr('style','display: none');
		    				$('#vernotalu').attr('style','display: none');
		    				$('#datgenalum').attr('style','display: none');

		    				$('#regprof').attr('style','display: none');
		    				$('#actpro').attr('style','display: none');
		    				$('#regasigprof').attr('style','display: none');
		    				$('#datosgenprof').attr('style','display: none');
		    		$(this).click(function(){
		    			var apunt = $(this).attr('id');
		    			
		    			if(apunt == 1){
		    				
		    				$('#regasignatura').attr('style','display: visible');

		    			}else if(apunt == 2){
		    				$('#regasignatura').attr('style','display: none');
		    				$('#actdatasig').attr('style','display: visible');
		    			}
		    		});
		    	});
			break;

			default:
			break;
			}
			});
	    });
	});
		

    </script>

 

</head>
<body>
	<header>
		<div class="container-fluid">
			<div class="col-md-1">
				<img src="imagen/logo-new.png" id="logo-sup">
			</div>
			<div class="col-md-11" id="text-cab">
				<h1 id="titulo">INSTITUCIÓN EDUCATIVA ING DE SOFTWARE</h1>
			</div>
		</div>
	</header>

	<div class"row">
		<div class="col-md-3" id="menu">
			<br>
			<div class="dropdown" id="me">
				<button class="btn btn-success btn-lg dropdown-toggle btn-ttc" type="button" id="estudiante" data-toggle="dropdown" aria-extended="true">
					ESTUDIANTE   
					<span class="caret"></span>
				</button>
					<ul class="dropdown-menu dropdown-menu-right" role="menu" aria-labelledby="estudiante" id="estud">
					
						<li><a id="1" href="#"><p>REGISTRAR</p></a></li>
						<li><a id="2" href="#"><p>ACTUALIZAR</p></a></li>
						<li><a id="3" href="#"><p>REGISTRAR ASIGNATURA</p></a></li>
						<li><a id="4" href="#"><p>REGISTRAR NOTAS</p></a></li>
						<li><a id="5" href="#"><p>VER NOTAS</p></a></li>
						<li><a id="6" href="#"><p>DATOS GENERALES</p></a></li>
					</ul>
			</div>
     		<br>
			<br>
				<div class="dropdown">
				<button class="btn btn-success btn-lg dropdown-toggle btn-ttc" type="button" id="profesor" data-toggle="dropdown" aria-extended="true">
					PROFESOR   
					<span class="caret"></span>
				</button>
					<ul class="dropdown-menu dropdown-menu-right" role="menu" aria-labelledby="profesor" id="profe">
						<li><a id="1" href="#"><p>REGISTRAR</p></a></li>
						<li><a id="2" href="#"><p>ACTUALIZAR</p></a></li>
						<li><a id="3" href="#"><p>REGISTRAR ASIGNATURA</p></a></li>
						<li><a id="4" href="#"><p>DATOS GENERALES</p></a></li>
					</ul>
			</div>
			<br>
			<br>
				<div class="dropdown">
				<button class="btn btn-success btn-lg dropdown-toggle btn-ttc" type="button" id="asignatura" data-toggle="dropdown" aria-extended="true" >
					ASIGNATURA  
					<span class="caret"></span> 
				</button>
					<ul class="dropdown-menu dropdown-menu-right" role="menu" aria-labelledby="asignatura" id="asigna">
						<li><a id="1" href="#"><p>REGISTRAR</p></a></li>
						<li><a id="2" href="#"><p>ACTUALIZAR</p></a></li>
					</ul>
			</div>
			<br>

		</div class>

			<div class="col-md-9 bordeinset" id="pag">
				
				 <iframe id="registrar" src="regalum" scrolling="no" style="display: none";></iframe>
				 <iframe id="actualizar" src="actualizarest" scrolling="no" style="display: none";></iframe>
				 <iframe id="regasigest" src="regasigest" scrolling="no" style="display: none";></iframe>
				 <iframe id="regnotas" src="regnotas" scrolling="no" style="display: none";></iframe>
				 <iframe id="vernotalu" src="vernotalum" scrolling="no" style="display: none";></iframe>
				 <iframe id="datgenalum" src="datgenalum" scrolling="no" style="display: none";></iframe>


				 <iframe id="regprof" src="regprofesor" scrolling="no" style="display: none";></iframe>
				 <iframe id="actpro" src="actprof" scrolling="no" style="display: none";></iframe>
				 <iframe id="regasigprof" src="regasigprof" scrolling="no" style="display: none";></iframe>
				 <iframe id="datosgenprof" src="datgenprof" scrolling="no" style="display: none";></iframe>

				 <iframe id="regasignatura" src="regasignatura" scrolling="no" style="display: none";></iframe>
				  <iframe id="actdatasig" src="actasignatura" scrolling="no" style="display: none";></iframe>



			</div>
		</div>
		

	<script src="{{ asset ('js/jquery.js') }}"></script>
	<script src="{{ asset ('js/bootstrap.js') }}"></script>
</body>
</html>

		<!--<script type="text/javascript">
		    $(document).ready(function(){
		    	$("#nav a").each(function(){    		
		    		$(this).click(function(){
		    			$('#dentro').attr('style','display: visible');
		    
		    		});
		    	});
		    });
		    </script>