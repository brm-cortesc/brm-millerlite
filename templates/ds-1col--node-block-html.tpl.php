<?php 
global $base_path;
//var_dump($content["field_tipo_plantilla_html"]["#object"]->field_tipo_plantilla_html['und'][0]['value']);
/* Video + Resumen+ Titulo*/
if(isset($content['body']["#object"]->field_tipo_plantilla_html['und'][0]['value']) || isset($content["field_tipo_plantilla_html"]["#object"]->field_tipo_plantilla_html['und'][0]['value'])){

  if($content["field_tipo_plantilla_html"]["#object"]->field_tipo_plantilla_html['und'][0]['value'] == '1'){ ?>
  <div class="pic-container-2 color-2">
        <div class="row p-row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-8 pd-wr">
                <h3 class="slid-tit"><?php print_r($content['body']["#object"]->title)?></h3>
                <br/>
              <div class="videoWrapper">
                  <div class="embed-responsive-item">
                     <iframe width="1280" height="720" src="https://www.youtube.com/embed/<?php print_r($content['body']["#object"]->field_url_video_html['und'][0]['video_id']) ?>" frameborder="0" allowfullscreen=""></iframe>
                    <br/>
                  </div>
              </div>
              <p class="slid-txt">
                <?php print_r($content['body']["#object"]->field_resumen_html['und'][0]['value'])?>
              </p>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 pd-wt">
              <div class="demo-content bg-alt">
                  <p class="slid-txt">
                    <?php print_r($content['body']["#object"]->body['und'][0]['value'])?>
                  </p>
              </div>
            </div>
        </div>
    </div>
<?php
/* Boques Linkeables*/  
}elseif($content["field_tipo_plantilla_html"]["#object"]->field_tipo_plantilla_html['und'][0]['value'] == '2'){ ?>

<!-- Cambios de mar -->
        <div class="container-fluid l-btns">
          <div class="row">

          
<!-- Cambios de mar -->
<?php
  $nodes = array();
  //var_dump($content["field_tipo_plantilla_html"]["#object"]->field_botones_linkeados['und']);
  //var_dump($content["field_tipo_plantilla_html"]["#object"]->field_botones_linkeados);
  foreach ($content["field_tipo_plantilla_html"]["#object"]->field_botones_linkeados as $key => $values) {

      //var_dump($values);
      foreach ($values as $key => $value) {
        //var_dump($value);
        $nodes[] = field_collection_item_load($value['value'], $reset = FALSE);

      }
//var_dump($nodes);
      foreach ($nodes as $key => $value3) {
        $men = menu_link_load($value3->field_link_html['und'][0]['mlid']) ?>
        <div class="u-box col-lg-4 col-md-4 col-sm-6 col-xs-12">
              <div class="u-box-img">
                 <img src="<?php print_r(file_create_url($value3->field_imagen_linked['und'][0]['uri'])) ?>" alt="miller_lite_moments" />
              </div> 
              <?php if(isset($value3->field_label_html['und'][0]['value'])){ ?>            
              <div class="u-box-text">
                 <h3><?php print_r($value3->field_label_html['und'][0]['value'])?></h3>
              </div>
              <?php } ?>
              <a href="<?php print_r($base_path.drupal_get_path_alias($men["link_path"])); ?>"> </a> 
            </div>
        <?php 
      } 
    //} 
  } ?>
              </div>
        </div>
<?php
/* Video + Titulo*/ 
}elseif($content["field_tipo_plantilla_html"]["#object"]->field_tipo_plantilla_html['und'][0]['value'] == '3'){

/* Imagen + Resumen + Titulo + Body */
}elseif($content["field_tipo_plantilla_html"]["#object"]->field_tipo_plantilla_html['und'][0]['value'] == '4'){ ?>
  <div class="color-2">
    <div class="row p-row">
      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-8 pd-wr">
        <h3 class="slid-tit"><?php print_r($content['body']["#object"]->title)?><br></h3>
        <div class="img-ct-art"> 
          <img src="<?php print_r(file_create_url($content['body']["#object"]->field_imnagen_html['und'][0]['uri']))?>" title="bbq" alt="bbq" class="img-a-l-p"> 
        </div>
        <p class="slid-txt"><?php if(isset($content['body']["#object"]->field_resumen_html['und'][0]['value'])){ print_r($content['body']["#object"]->field_resumen_html['und'][0]['value']); }?></p>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 pd-wt">
        <div class="demo-content bg-alt">
          <p class="slid-txt">
            <?php print_r($content['body']["#object"]->body['und'][0]['value'])?>
          </p> 
        </div>
      </div>
    </div>
  </div>
<?php 
/* Galeria Fotografica */
}elseif($content["field_tipo_plantilla_html"]["#object"]->field_tipo_plantilla_html['und'][0]['value'] == '5') { ?>
  <?php //var_dump($content["field_tipo_plantilla_html"]["#object"])?>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
    <ol class="carousel-indicators">
      <?php 
        $auxx1 = 0;
        foreach ($content["field_tipo_plantilla_html"]["#object"]->field_imagen_galeria_html['und'] as $key => $value) { ?>
          <?php if($auxx1 == 0){ ?>
            <li data-target="#myCarousel" data-slide-to="<?php print_r($auxx1);?>" class="active"></li>
          <?php }else{ ?>
            <li data-target="#myCarousel" data-slide-to="<?php print_r($auxx1);?>"></li>
          <?php }?>
       <?php $auxx1++;}
      ?>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <?php
        $auxx = 0; 
        foreach ($content["field_tipo_plantilla_html"]["#object"]->field_imagen_galeria_html['und'] as $key => $value) {?>
          <?php if($auxx == 0){ ?>
            <div class="item active">
          <?php }else{ ?>
            <div class="item">
          <?php }?>
              <img src="<?php print_r(file_create_url($value["uri"]))?>" alt="<?php print_r($value["alt"])?>">
              <div class="carousel-caption">
              <h2>Chania</h2>
              <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
            </div>
            </div>
         <?php
          $auxx++;}
        ?>
            </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>  
<?php 
}
}
?>
