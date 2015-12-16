<ul class="nav navbar-nav navbar-right">
<?php
if(isset($variables['userLoging']) && $variables['userLoging']==0){ ?>
	<li class="dropdown"><a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">
        <p class="men-task"><span>&nbsp;</span></p>
        <p class="men-task" onclick="abrir_login()" style="cursor:pointer;">REGÍSTRATE</p></a>
    </li>
<?php }elseif($variables['userLoging']!=0){ ?>
	<li class="dropdown"><a href="user/logout" data-toggle="" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">
	        <p class="men-task"><span>&nbsp;</span></p>
	        <p class="men-task" href="user/logout" style="cursor:pointer;">CERRAR SESION</p></a>
	 </li>
<?php }else{
	$block = module_invoke('user', 'block_view','login');
    print render($block['content']); 
	} 
?>

	<li class="visible-xs visible-md visible-lg">
        <?php $block = module_invoke('search', 'block_view','form');
    		print render($block['content']); 
  		?>
    </li>
</ul>