<?php global $base_url; ?>


<div class="foot">
<p class="log-imt"><img src="<?php print_r($base_url.'/sites/all/themes/millerLiteColTheme/images/its-miller-time.png'); ?>" alt="Miller Lite" class="pd-log"></p>  
</div>

<footer class="foot">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <p class="cent-lst"> 
          <?php $menu = menu_navigation_links('menu-footer-menu');
           foreach ($menu as $key => $value) {
            $aux = $key;
            $onlyconsonants = str_replace(" ", "_", $value["title"]);
            if(isset($value["item_attributes"]['class'])){
              $key = $key.$value["item_attributes"]['class'];
              $menu[$aux." ".strtolower($onlyconsonants)]=$value;
              unset($menu[$aux]);
            }
           }
            print theme('links', array('links' => $menu,'attributes' => array('class' => array('nav navbar-nav list-bl'))));
        ?>
      </p>
    </div>
  </div>
</footer>


<div class="foot">
  <div class="row">
    
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <p class="leg-txt">Prohíbese el expendio de bebidas embriagantes a menores de edad. El exceso de alcohol es perjudicial para la salud. </p>
    </div>
    
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <p class="c-lg"><img src="<?php print_r($base_url.'/sites/all/themes/millerLiteColTheme/images/talking-alcohol-ml.png'); ?>" alt="hablemos de alcohol" class="pd-log"></p>
    </div>

    
  </div>
</div>