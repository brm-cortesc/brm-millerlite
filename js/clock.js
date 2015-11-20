
function traerMasHistorias(){
	var nova='';
	jQuery( "div.statusXPUser" ).each(function() {
       var busqueda=jQuery( this ).data( "busqueda" );
      nova=busqueda+','+nova;
    });
    //console.log(nova);
	jQuery.ajax({
					type:"POST",
					url:'Home.php',
					data:{
						varCtrl:'1',
						nova: nova
					},
					beforeSend:function (argument) {
						jQuery(".loading").show();
					},
					success:function(data){
						jQuery(".loading").hide();
						jQuery("#HistoriasGaleria").append(data);
					}
				});
}

jQuery(document).ready(function($) {
	// Stuff to do as soon as the DOM is ready;
	//jQuery('.blueGradBTN').click(function(){
		jQuery(document).on('click',".blueGradBTN",function() {

		var idHistoria=jQuery(this).attr("data-historia");

		var url = "votar.php";
			//var data = jQuery("#novedad").serialize();
			jQuery.ajax({
				url : url,
				type : 'POST',
				async: true,
				data : {
					'idHistoria': idHistoria,

				},
				//datatype : "json",
				async : true,
				success : function(data, textStatus) {

					 if(data!=0){
            			 async:true,
						//jQuery('#ini'+idHistoria).hide();
						jQuery('#ini'+idHistoria).html(data).show();
						jQuery('#votar'+idHistoria).hide();
						jQuery('.star'+idHistoria).css('color','yellow');
           			 }else if(data=='0'){
           			 	//console.log(data);
           			   //console.log('adios');
           			   //window.location='Registro.php';
           			   jQuery('.textStatus').html('<div id="debeRegeistrar" class="divfont"><div class="row"><div class="small-12 medium-12 large-12 small-centered medium-centered large-centered"><h5>Inscr&iacute;bete para poder votar.</h5><br><button class="triggerMenuBtn redGrad dis3" ><h5>REG&Iacute;STRATE<h5></button></div>');
           			   jQuery('.dis3').click(function(){
           			   	jQuery('.participarBTN').click();
           			   });
           			 }


				}
			});

			//console.log('no es');
			return false;

	});
	/*var finish = new Date('2015/06/20 00:00:00');
	var dateCurrent = new Date();
	var difDate=new Date((finish.getTime() - dateCurrent.getTime())/1000);

	 	var clock = $('.clock').FlipClock(difDate.getTime(), {
		countdown: true,
		clockFace: 'DailyCounter',
		language:'es-es',

	});*/


	 	var currentURL = window.location.href;
	 	var hs = currentURL.slice(-10);
	 	var lg = currentURL.slice(-9);
	 	console.log(hs);
	 	if(hs=="HistoriaSV"){
			jQuery('#HistoriaSubida').show('float');
			jQuery('html, body').animate({
                        scrollTop: jQuery(".barratit").offset()}, 2000);
		}
		if(lg!='Login.php'){
			jQuery('.desp1').hide();
		}
		/*if(lg=='Login.php' || lg=='istro.php'){
			jQuery('.vertodoBTN').hide();

		}*/
		if(lg=='istro.php'){
		jQuery('.tog1').hide();
		jQuery('html, body').animate({
                        scrollTop: jQuery(".barratit").offset()}, 2000);

		}
		if(lg=='toria.php'){
			jQuery('html, body').animate({
              scrollTop: jQuery("#gradBG2").offset()}, 2000);
		}


});