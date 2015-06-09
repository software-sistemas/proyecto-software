$(function(){

 	$(document).on('ready', function(){
    	$("#nav a").each(function(){   
    		$(this).click(function(){
    			var elegir = $(this).attr('id');
    			
    			if(elegir == 1){
    				
    				$('#registrar').attr('style','display: visible');

    			}else if(elegir == 2){
    				
    				$('#registrar').attr('style','display: none');

    				$('#actualizar').attr('style','display: visible');
    			}
    		});
    	});
    });
 });

/*$("#bot").on('click',cargar(){
		$('#pag').load('formulario.html', function(data){
				$(this).load("formulario.html");
		});
		});

		$(document).on('ready',function(){
	$("#bot").on('click',cargar(){
		$('#pag').load('formulario.html')
		});
		});
})