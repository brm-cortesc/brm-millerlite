<div class="col-lg-2 col-md-12 col-sm-12 col-xs-12 p-center">
    <div class="row">
      <div class="col-xs-12 col-sm-3 col-md-6 forma-1">
        	<?php 
	if(isset($variables['userLoging']) && $variables['userLoging']==0){
	?>
	<p><a onclick="abrir_login()" class="ing-men" style="cursor:pointer;">Ingresar</a></p>
	<?php }elseif($variables['userLoging']!=0){ ?>
		<p><a class="ing-men" href="user/logout" style="cursor:pointer;">Cerrar Sesion</a></p>
	<?php }else{
		$block = module_invoke('user', 'block_view','login');
	    print render($block['content']); 
	} ?>
      </div>
      <div class="col-xs-12 col-sm-9 col-md-6 forma-1 visible-lg visible-md">
        <?php $block = module_invoke('search', 'block_view','form');
                  print render($block['content']); 
                  ?>
      </div>
    </div>
 </div>
