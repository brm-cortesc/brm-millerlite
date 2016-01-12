<h4 class="pd-t">LO NUEVO</h4>
<div class="feed-w">
            <div class="ct-slide">
              <div id="myCarousel-log" data-interval="5000" data-ride="carousel" class="carousel slide">
                <!-- Carousel indicators-->
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel-log" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel-log" data-slide-to="1"></li>
                </ol>
                <!-- Wrapper for carousel items-->
                <div class="carousel-inner">
				<?php
				$auxCont = 0;
        global $base_url;
				foreach ($variables['nodes_slider'] as $value) { 
					if($auxCont == 0){ ?>
						<div class="active item b-f">
					<?php }else{ ?>
						<div class="item b-f">
					<?php } ?>
                    <?php
                      if($value->type=="concierto"){ ?>
                          <a href="<?php print_r($base_url.'/sounds/conciertos'); ?> ">
                      <?php }elseif($value->type=="ferias_y_fiestas"){ ?>
                          <a href="<?php print_r($base_url.'/litestyle/ferias-y-fiestas'); ?> ">
                      <?php }elseif($value->type=="playlist"){ ?>
                          <a href="<?php print_r($base_url.'/sounds/playlist'); ?> ">
                      <?php }
                    ?>
					         
                    <div class="log-w-2">
                      <div class="pic-ct-2">
                        <?php if(isset($value->field_imagen_lo_nuevo_peque_a['und'][0]['uri'])){?>
                      	<img src="<?php print file_create_url($value->field_imagen_lo_nuevo_peque_a['und'][0]['uri']);?>" alt="<?php print file_create_url($value->field_imagen_lo_nuevo_peque_a['und'][0]['alt']);?>" title="<?php print file_create_url($value->field_imagen_lo_nuevo_peque_a['und'][0]['title']);?>"/>
                        <?php } ?>
                      </div>
                      <div class="txt-ct-2"> 
                        <p class="name-t-2"><?php print $value->title; ?></p>
                        <?php if(isset($value->field_texto_promocional_lo_nuevo['und'][0]['value'])){ ?>
                        <p class="tit-log-2"><?php print $value->field_texto_promocional_lo_nuevo['und'][0]['value'];?></p>
                        <?php } ?>
                      </div>
                    </div>
                  </a>
                  </div> 
				<?php $auxCont++; } ?>
                </div>
              </div>
            </div>
          </div>
