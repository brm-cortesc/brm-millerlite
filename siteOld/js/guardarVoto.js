
		var yaVoto = false;
		/*
		FUCION QUE GUARDA EL VOTO
		*/
		var guardoVoto = function(){
		var idVidei = $('#votar').attr('data-id');
			$.ajax({
				url:'guardarVoto.php',
				method:'POST',
				datatype:'json',
				data:{idVideo:idVidei}			
			}).success(function(resp){
				if(resp.respuesta=="resgistroOk"){
					$('.votoOK').fadeIn();
					$('.votos').text(resp.votos);
					jQuery('.validaBoletaD').show('fade');
					jQuery('#votar').hide('fade');
					yaVoto=true;
				}
			});
		}
		var verifyCallback = function(response) {
			guardoVoto();
		};
		var onloadCallback = function() {
				grecaptcha.render('captchap', {
					'sitekey' : '6LfdAQwTAAAAABzITaBxvX9gqw462RtPfcYHsvXE',
					'callback' : verifyCallback,
					'theme' : 'dark'
				});
		};
	$(document).ready(function(){
		$('.votoOK').css('display','none');
		/*
		SI YA PASO EL CAPTCHAP LO DEJA VOTAR SOLO CON HACER CLICK EN EL BOTON
		*/
		$('#votar').click(function(){
			var nombre = $('#votar').attr('data-banda');
			//console.log(nombre);
			dataLayer.push({'voto-por': 'banda-'+nombre, 'event': 'votar'});
			if(yaVoto){
				guardoVoto();

			}
		});

			/*
	FUNCION PARA GENERAR UNA ALERTA
	*/
   var alerta = function (mensaje) {
     jQuery.blockUI({ message:'<p id="mensajeAlert" >'+mensaje+' </p> <br><button type="button" id="cerrar" style="background-color: #0088CE !important;">Aceptar</button>',
        css: { 
        cursor:  'pointer',
        border: 'none', 
        padding: '15px', 
        backgroundColor: '#fff', 
        '-webkit-border-radius': '10px', 
        '-moz-border-radius': '10px', 
        opacity: .8, 
        color: '#fff'  
    } }); 
    $("#cerrar").click(function(){
			window.location="Home.php";
      $.unblockUI();
    }); 
}

jQuery("#validaBoletas").validate({
	errorPlacement: function(error, element) {
    	error.insertAfter(element);
    	element.focus();
	},
			rules: {
				cedula: {
					required: true,
					number: true,
					minlength: 5 ,
					maxlength: 15
				}


			},
			messages: {
				cedula:{
					required:'Campo necesario',
					number: 'Únicamente admite digitos (0-9)',
					minlength:'Número de cédula invalido',
					maxlength: 'Número de cédula invalido',
				}

			}
		});

		/*inicia validacion cedula*/
		jQuery('#validaBoleta').on('click', function(e){
			if(jQuery("#validaBoletas").valid()){
			//console.log('hola, cambio');
			var cc=jQuery("#cedula").val();

			var url='validaBoleta.php';
			jQuery.ajax({
				//dataType:'json',
				type:'POST',
				url:url,
				data:{
					cc:cc,
					ac:'verificarcc',
					varCtrl:'1'
				},
				beforeSend:function(){
					jQuery(".cargando:first").show();
				},
				success:function(data){
					console.log(data);
					if(data=='Registro'){
						window.location= 'Registro.php';
					}else{
						if(data=='siga'){
							alerta("Tu c&eacute;dula ya estaba participando");
							
						}else{
							alerta("Ya estás participando por tus pases dobles");
							
						}
					}
					
					
				}
			});
		}else{
			return false;
		}
		
		return false;
		});
	});