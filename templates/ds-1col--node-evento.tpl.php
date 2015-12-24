<div id="slider2" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
    <ol class="carousel-indicators">
      <?php 
        $auxx1 = 0;
        foreach ($content["field_imagen_galeria_evento"]["#object"]->field_imagen_galeria_evento['und'] as $key => $value) { ?>
          <?php if($auxx1 == 0){ ?>
            <li data-target="#slider2" data-slide-to="<?php print_r($auxx1);?>" class="active"></li>
          <?php }else{ ?>
            <li data-target="#slider2" data-slide-to="<?php print_r($auxx1);?>"></li>
          <?php }?>
       <?php $auxx1++;}
      ?>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <?php
        $auxx = 0; 
        foreach ($content["field_imagen_galeria_evento"]["#object"]->field_imagen_galeria_evento['und'] as $key => $value) {?>
          <?php if($auxx == 0){ ?>
            <div class="item active">
          <?php }else{ ?>
            <div class="item">
          <?php }?>
              <img src="<?php print_r(file_create_url($value["uri"]))?>" alt="<?php print_r($value["alt"])?>">
              <div class="carousel-caption">
              <h2><?php print_r($content["field_imagen_galeria_evento"]["#object"]->title); ?></h2>
              <p><?php print_r($content["field_imagen_galeria_evento"]["#object"]->body['und'][0]['value']); ?></p>
            </div>
            </div>
         <?php
          $auxx++;}
        ?>
            </div>
    <a class="left carousel-control" href="#slider2" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#slider2" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div> 