jQuery(document).ready(function (){


	jQuery('.hitboxgaleria').click(function (){

	 var id=jQuery(this).attr('id');
	 var votos=jQuery(this).attr('data-votos');
	 var nombre=jQuery(this).attr('data-nombre');
	 var idyoutube=jQuery(this).attr('data-idyoutube');

	 var porguion = nombre.split('-');
	 var nom = porguion[0];
	 nom = nom.trim();

	 if(nom.indexOf(' ') !=-1){
	 	var unir =nom.split(' ');
	 	var nueva='';
	 	for (var i = 0; i < unir.length; i++) {
	 		nueva+=unir[i]+'_';
	 	}
	 	nom=nueva;
	 }
	 /*Descomentariar aca*/
	 window.history.pushState('data', nombre, "#"+ nom +"/"+idyoutube);


	// console.log(id+' - '+votos);
	 jQuery('#votar').attr('data-id',id);
	 jQuery('#frame_Principal').attr('src','https://www.youtube.com/embed/'+idyoutube);// idyoutube
	 jQuery('.votos').text(votos);
	 jQuery('#frame-nombre').text(nombre);
	
	});

	jQuery('#ciudad').change(function (){
		var idCiudad=jQuery('#ciudad').val();
		if (idCiudad !='todas') {
		jQuery.ajax({
			url: 'Bandas.php',
			dataType:'json' ,
			type: 'POST',
			data:
			{
				ciudad:idCiudad
			},
			success: function (data){
				console.log(data+' pos --'+ data.length);
				//console.log(data[0]['nombreVideo']);
				if (data!='') {
					jQuery('.repetir').empty();
					var lista='';
					for (var i = 0; i <data.length; i++) {
						//console.log(data[i]['idyoutube']);
						lista+='<div class="row band-info-cont"><div class="hitboxgaleria"  id="'+data[i]['idVideo']+'" data-idyoutube="'+data[i]['idyoutube']+'" data-votos="'+data[i]['votos']+'" data-nombre="'+data[i]['nombre']+' - '+data[i]['nombreVideo']+'"></div><div class="col-xs-5"><div class="img-video-cont embed-responsive embed-responsive-16by9"><iframe class="embed-responsive-item" src="https://www.youtube.com/embed/'+data[i]['idyoutube']+'"></iframe></div></div><div class="col-xs-7"><div class="video-info"><h5>'+data[i]['nombre']+' - '+data[i]['nombreVideo']+'</h5><button class="btn grl-sml red-btn">VER VIDEO</button></div></div></div>';
						""
					}

					jQuery('.repetir').html(lista);
				}else{
					jQuery('.repetir').empty();
				}

				jQuery('.hitboxgaleria').click(function (){
				 var id=jQuery(this).attr('id');
				 var votos=jQuery(this).attr('data-votos');
				 var nombre=jQuery(this).attr('data-nombre');
				 var idyoutube=jQuery(this).attr('data-idyoutube');
				//console.log(id+' - '+votos);
				
	 

				 jQuery('#votar').attr('data-id',id);
				 jQuery('#frame_Principal').attr('src','https://www.youtube.com/embed/'+idyoutube);
				 jQuery('.votos').text(votos);
				 jQuery('#frame-nombre').text(nombre);

				 if(id=='64'){
				 	jQuery('.votoBa').removeAttr('id');
				 	jQuery('.votoBa').hide();
				 	jQuery('.nopar').show();
				 }else{
				 	jQuery('.nopar').hide();
				 	jQuery('.votoBa').show();
				 	jQuery('.votoBa').attr('id','votar');
				 }
				 /*Descomentariar aca*/
					dataLayer.push({'video':$(this).attr('id'),'event':'Tribute'});
				
	});
				
			}
		});
}else{
	location.reload();
}
	});

	
	var direccion = window.location.href;
	var click='';
	var resultado = almoadilla(direccion);
	console.log(resultado);
	if (resultado != null || resultado!='') {
		var div = jQuery('.hitboxgaleria');
		console.log(div);
		for (var i =0; i < div.length ; i++) {
			if (div[i]['attributes'][3]['nodeValue'] == resultado){
				click=div[i];
			}
		}

		if(resultado=='r-CIkjeiBS4'){
			jQuery('.votoBa').removeAttr('id');
				 	jQuery('.votoBa').hide();
				 	jQuery('.nopar').show();
				 }else{
				 	jQuery('.nopar').hide();
				 	jQuery('.votoBa').show();
				 	jQuery('.votoBa').attr('id','votar');
				 }
		jQuery(click).trigger( "click" );
	} 

	function almoadilla(dir){
		
		if (dir.indexOf('#') != -1 ) {
			var almo = dir.split('#');
			var segunda = almo[1];
			var segundaPartida =segunda.split('/');
			var youT = segundaPartida[1];
			//alert(youT);
			return youT;
		}else{
			return null;
	}
	}
	
	

});