<?php global $base_url; ?>
<footer class="navbar navbar-default navbar-fixed-bottom del-ft">
    <div class="container-fluid">
      <article class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
        <p class="log-imt"><img src="<?php print_r($base_url.'/sites/all/themes/millerLiteColTheme\css\svg\its-miller-time.svg');?>" alt="Miller Lite" class="pd-log"></p>
      </article>
      <article class="col-lg-10 col-md-10 col-sm-12 col-xs-12 ft-mob">
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
      </article>
      <article class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
        <p class="log-imt"><a title="hablemos de alcohol" target="_blank" href="http://www.hablemosdealcohol.com"><img src="<?php print_r($base_url.'/sites/all/themes/millerLiteColTheme\css\svg\talking-alcohol-ml.svg');?>" alt="Miller Lite" class="pd-log"></a></p>
      </article>
    </div>
  </footer>