<?php 
global $user;
if($user->uid){ ?>
	<div class="log-w">
		<div class="pic-ct">
			<?php if(isset($variables['user']->picture->uri)){
				print theme_image_style(
					array('style_name' => 'thumbnail',
		                  'path' => $variables['user']->picture->uri,
		                  'attributes' => array('class' => 'avatar'),
		                  'width' => NULL, 
           				  'height' => NULL,  
           				  'alt' =>  "img-".$variables['user']->name,         
		                 )
	                );
	            }else{ ?>
	            	<img class="avatar" typeof="foaf:Image" src="<?php print variable_get('user_picture_default'); ?>" alt="default-img">
	            <?php } ?>
		</div>
		<div class="txt-ct">
			<div class="tit-log">Bienvenido
			</div>
			<div class="name-t">
				<?php print $variables['user']->name; ?>
			</div>
		</div>
	</div>
<?php }else{ ?>
  <div class="adv-men">Por favor registrate para acceder al mejor contenido</div>
<?php } ?>