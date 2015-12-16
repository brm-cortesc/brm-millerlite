<div id="popup-ferias">
   <div id="cerrar">X</div>
	<div class="header-popup-ferias">
		<div class="img-header-ferias">[field_imagen_prin_ferias]</div>
		<div class="cont-title-ciudad">
			<div class="title-popup-ferias">[title]</div>
			<div class="ciudad-popup-ferias">[field_lugar_ferias]</div>
		</div>
	</div>
	<div class="conte-popup-ferias">[body]</div>
	<div class="footer-popup-ferias">
		<div class="fecha-popup-ferias">[field_fecha_ferias]</div>
		<div class="social-popup-ferias">
			<a href="https://www.facebook.com/" class="face-icon" target="_blank"></a>
			<a href="https://twitter.com/?lang=es" class="twitter-icon" target="_blank"></a>
		</div>
	</div>
</div>
<div class="mapa-ferias" id="mapas-ferias">

</div>
<div class="buscador-ferias">
    <?php 
        $view = views_get_view('ferias_y_fiestas','default'); 
        $view->override_path = $_GET['q']; 
        $viewsoutput = $view->preview(); 
        print $viewsoutput;
    ?>
</div>

