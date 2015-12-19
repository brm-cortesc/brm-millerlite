jQuery(document).ready(function() {
	// Stuff to do as soon as the DOM is ready;
	//Inicio funciones login desde Twitter

	jQuery('.loginTw').click(function(){

		var url='processTwitter.php';
		jQuery('#loginTw').submit();

	});
  jQuery('.loginTw2').click(function(){

    var url='processTwitter.php';
    jQuery('#loginTw').submit();

  });

	 jQuery("#pictureP").change(function() {
  		// Check input( $( this ).val() ) for validity here
		//console.log('cambia el valor');
        var url='processFB.php';
        var data=jQuery('#fblogin').serialize();
        jQuery.ajax({
          url : url,
          type : 'POST',
          data : data,
          datatype : "json",
          async : true,
          success : function(data) {
            console.log(data);
            //redirect...
            //window.location='Registro.php';

          }
        });
  });
});