jQuery(document).ready(function($) {
	// Stuff to do as soon as the DOM is ready;
	jQuery('.blueGradBTN').click(function(){

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

					console.log(data);
				}
			});

			//console.log('no es');
			return false;

	});
});