<div class="pic-container color">
          <div id="myCarousel" class="carousel slide">
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
			<?php $auxCo = 0;
				foreach ($variables['nodes_slider'] as $value) { 
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
						 	<p class="slid-txt"><?php print $value->field_resumen['und'][0]['value'] ?></p>
		             </div>	
		             </div>	
			<?php $auxCo++; } ?>
			Z
              <a href="#myCarousel" data-slide="prev" rel="nofollow" class="left carousel-control"><span class="icon-prev"></span></a><a href="#myCarousel" data-slide="next" rel="nofollow" class="right carousel-control"><span class="icon-next"></span></a>
          </div>
</div>
</div>