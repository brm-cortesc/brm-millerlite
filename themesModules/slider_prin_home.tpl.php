<div class="pic-container color">
          <div id="myCarousel" class="carousel slide">
            <ol class="carousel-indicators">
              <?php
              	$aux = 0;
              	foreach ($variables['nodes_slider'] as $value) { ?>
              	<?php if(isset($value->field_imagen_slider['und'][0]['uri'])){ ?>
              		<?php if($aux == 0){ ?>
              			<li data-target="#myCarousel" class="active" data-slide-to="<?php print_r($aux); ?>"></li>
              		<?php }else{ ?>
              			<li data-target="#myCarousel" data-slide-to="<?php print_r($aux); ?>"></li>
              		<?php }?>
              		
              	<?php $aux++; } } ?>
            </ol>
            <div class="carousel-inner">
			<?php $auxCo = 0;
				foreach ($variables['nodes_slider'] as $value) {
				  if(isset($value->field_imagen_slider['und'][0]['uri'])){ 
					$urlImage = file_create_url($value->field_imagen_slider['und'][0]['uri']); 
					
					if($auxCo == 0){ ?>
						<div class="item active">
					<?php }else{ ?>
						<div class="item">
					<?php }
					?>
	                	<img width="100%" height="100%" src="<?php print $urlImage; ?>" alt="<?php print $value->field_imagen_slider['und'][0]['alt']; ?>" title="<?php print $value->field_imagen_slider['und'][0]['title']; ?>"/>
						 <div class="carousel-caption">
						 	<h3 class="slid-tit"><?php print $value->title; ?></h3>
						 	<?php if(isset($value->field_resumen['und'][0]['value'])){ ?>
						 		<p class="slid-txt"><?php print $value->field_resumen['und'][0]['value'] ?></p>
						 	<?php } ?>
						 	<?php if(isset($value->field_url_redireccion['und'][0]['value'])){ ?>
						 		<a href="<?php print_r($value->field_url_redireccion['und'][0]['value']);?>"><button type="button" class="btn btn-default btn-lg btn-block">Ver más</button></a>
						 	<?php } ?>
		             </div>	
		             </div>	
			<?php $auxCo++; } }  ?>
              <a href="#myCarousel" data-slide="prev" rel="nofollow" class="left carousel-control"><span class="icon-prev"></span></a><a href="#myCarousel" data-slide="next" rel="nofollow" class="right carousel-control"><span class="icon-next"></span></a>
          </div>
</div>
</div>