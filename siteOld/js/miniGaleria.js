jQuery(document).ready(function(){
	
	jQuery('.ver-cap').click(function(){
		var video=jQuery(this).attr('data-video');
		var nombre =jQuery('#nombre'+video).text();
		var artista=jQuery('#artista'+video).text();
		var url=jQuery('#video'+video).attr('src');
		jQuery('#frameR').attr('src', url);
		/**/
	});
});