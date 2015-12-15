<?php
/**
 * @file
 * Adaptivetheme implementation to display a single Drupal page.
 *
 * Available variables:
 *
 * Adaptivetheme supplied variables:
 * - $site_logo: Themed logo - linked to front with alt attribute.
 * - $site_name: Site name linked to the homepage.
 * - $site_name_unlinked: Site name without any link.
 * - $hide_site_name: Toggles the visibility of the site name.
 * - $visibility: Holds the class .element-invisible or is empty.
 * - $primary_navigation: Themed Main menu.
 * - $secondary_navigation: Themed Secondary/user menu.
 * - $primary_local_tasks: Split local tasks - primary.
 * - $secondary_local_tasks: Split local tasks - secondary.
 * - $tag: Prints the wrapper element for the main content.
 * - $is_mobile: Mixed, requires the Mobile Detect or Browscap module to return
 *   TRUE for mobile.  Note that tablets are also considered mobile devices.
 *   Returns NULL if the feature could not be detected.
 * - $is_tablet: Mixed, requires the Mobile Detect to return TRUE for tablets.
 *   Returns NULL if the feature could not be detected.
 * - *_attributes: attributes for various site elements, usually holds id, class
 *   or role attributes.
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Core Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * Adaptivetheme Regions:
 * - $page['leaderboard']: full width at the very top of the page
 * - $page['menu_bar']: menu blocks placed here will be styled horizontal
 * - $page['secondary_content']: full width just above the main columns
 * - $page['content_aside']: like a main content bottom region
 * - $page['tertiary_content']: full width just above the footer
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see adaptivetheme_preprocess_page()
 * @see adaptivetheme_process_page()
 */
?>
<div class="cont-ini-sesion">
  <a onclick="cerrar_login();" style="cursor:pointer;">X Cerrar</a>
  <?php $block = module_invoke('user', 'block_view','login');
    print render($block['content']); 
  ?>
</div>
<div class="cont-search">
  <a onclick="cerrar_search();" style="cursor:pointer;">X Cerrar</a>
  
</div>
<div id="page-wrapper">
  <div id="page" class="<?php print $classes; ?>">
    

<div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>
    </div>
  </div>
  <section class="container-fluid">
    <div class="row bg-1">
      <article class="col-lg-2 col-md-2 col-sm-12 col-xs-12 pd-mm visible-sm visible-lg">
        <div class="bar-bl">
          <div class="logo-web">
          <?php 
            if ($site_logo):
              print $site_logo; 
            endif; ?>
        </div>
          <ul class="nav navbar-nav navbar-right visible-sm busc2">
            <li class="visible-sm">
              <form role="search" class="navbar-form navbar-left">
                <div class="form-group">
                  <input type="text" placeholder="Buscar" class="form-control">
                  <button type="submit" class="btn btn-default"> </button><span class="icon-miller-search s-i"></span>
                </div>
              </form>
            </li>
          </ul>
        </div>
        <div class="db visible-lg">
          <!--dashboard-->
            <?php $block = module_invoke('BRM_millerlite', 'block_view','user_module');
            print render($block['content']); 
            ?>
            <?php $block = module_invoke('BRM_millerlite', 'block_view','slider_the_new');
            print render($block['content']); 
          ?>
          <h4 class="rec-m">RECIENTES </h4>
          <div class="recents-w">
            <div class="rec-box">
              <div class="pic-ct"></div>
              <div class="txt-ct">
                <h3 class="name-t-3">CAMILO RIVERA</h3>
              </div>
            </div>
          </div>
          <div class="recents-w">
            <div class="rec-box">
              <div class="pic-ct"></div>
              <div class="txt-ct">
                <h3 class="name-t-3">CAMILO RIVERA</h3>
              </div>
            </div>
          </div>
          <div class="recents-w">
            <div class="rec-box">
              <div class="pic-ct"></div>
              <div class="txt-ct">
                <h3 class="name-t-3">CAMILO RIVERA</h3>
              </div>
            </div>
          </div>
          <?php $block = module_invoke('BRM_millerlite', 'block_view','social_icons');
            print render($block['content']); 
            ?>
          <!--/-dashboard-->
        </div>
      </article>
      <article class="col-lg-10 col-md-12 col-sm-12 col-xs-12 fond-1">
        <div class="header">
          <!--header-->
          <nav class="navbar navbar-default">
            <div class="container-fluid">
              <!-- Brand and toggle get grouped for better mobile display-->
              
              <!-- Collect the nav links, forms, and other content for toggling-->
              <div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse">
                               
                <div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                  <?php 
                    $varMenu = menu_tree_all_data('main-menu');
                    foreach ($varMenu as $key => $value) {
                        $conSubMenu = count($value['below']);
                        $tit = strtolower($value['link']['link_title']);
                        $alias = drupal_get_path_alias($value['link']['link_path']);
                        $alias2 = drupal_get_path_alias(arg(0)."/".arg(1));
                        //var_dump($base_path.$alias2);
                       ?>
                      <?php if($tit == $alias2){ ?>
                        <li class="dropdown active">
                      <?php }else{ ?>
                        <li class="dropdown">
                      <?php }?>
                      
                        <a href="<?php print_r($base_path.$alias)?>" data-toggle="" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">
                      <p class="men-task"><span class="icon-miller-<?php print_r($tit); ?> s-i"></span></p>
                      <p class="men-task"><?php print_r($value['link']['link_title'])?>
                        <?php if($conSubMenu > 0){ ?><span class="caret"></span> <?php } ?>
                      </p></a>
                      <?php
                        
                        if($conSubMenu > 0){ ?>
                            <ul class="dropdown-menu">
                              <?php 
                                foreach ($value['below'] as $key => $value2) { ?>
                                    <li><a href="<?php print_r($base_path.drupal_get_path_alias($value2['link']['link_path']))?>"><?php print_r($value2['link']['link_title'])?></a></li>
                                    <li role="separator" class="divider"></li>
                                <?php }
                              ?>                        
                      </ul>
                        <?php } ?>

                      
                    </li>
                    <?php 

                  } 
                ?> 
                  
                  
                </ul>

              </div>

              </div>
              <!-- /.navbar-collapse-->
            </div>
            <!-- /.container-fluid-->
          </nav>
          <!--header-->
        </div>
        <div class="headerItem-menu">
              <h1><?php print $title; ?></h1>
              <div class="submenu-dinamic">
                <?php
                    $auxmenu = drupal_get_path_alias(arg(0)."/".arg(1));
                    $porciones = explode("/", $auxmenu);
                    if(count($porciones)!=0){
                      $menu = menu_navigation_links("menu-".$porciones[0]);
                      print theme('links__menu_casabienestar', array('links' => $menu,'attributes' => array('class' => array('nav navbar-nav'))));
                    }
                ?>
              </div>
              <div class="submenu-dinamic-3">
                <?php 
                  if(count($porciones)>1){
                    $menu = menu_navigation_links("menu-".$title);
                    print theme('links__menu_casabienestar', array('links' => $menu,'attributes' => array('class' => array('nav navbar-nav'))));
                  }
                ?>
              </div>
          </div>
        
           <?php if ($content = render($page['content'])): ?>
              <div id="content" class="region">
                <?php print $content; ?>
              </div>
            <?php endif; ?>
        <div class="db visible-xs visible-sm visible-md">
          <!--dashboard-->
          <div class="log-w">
            <div class="pic-ct"></div>
            <div class="txt-ct">
              <p class="tit-log">HOLA</p>
              <p class="name-t">CAMILO RIVERA</p>
            </div>
          </div>
          <h4 class="pd-t">LO NUEVO   </h4>
          <div class="feed-w">
            <div class="ct-slide">
              <div id="myCarousel-log" data-interval="5000" data-ride="carousel" class="carousel slide">
                <!-- Carousel indicators-->
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel-log" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel-log" data-slide-to="1"></li>
                  <li data-target="#myCarousel-log" data-slide-to="2"></li>
                </ol>
                <!-- Wrapper for carousel items-->
                <div class="carousel-inner">
                  <div class="active item b-f">
                    <div class="log-w-2">
                      <div class="pic-ct-2"></div>
                      <div class="txt-ct-2"> 
                        <p class="name-t-2">CAMILO RIVERA</p>
                        <p class="tit-log-2">Una mañana, tras un sueño intranquilo, Gregorio Samsa.</p>
                      </div>
                    </div>
                  </div>
                  <div class="item b-f">
                    <div class="log-w-2">
                      <div class="pic-ct-2"></div>
                      <div class="txt-ct-2">
                        <p class="name-t-2">CAMILO RIVERA</p>
                        <p class="tit-log-2">Una mañana, tras un sueño intranquilo, Gregorio Samsa.</p>
                      </div>
                    </div>
                  </div>
                  <div class="item b-f">
                    <div class="log-w-2">
                      <div class="pic-ct-2"></div>
                      <div class="txt-ct-2">
                        <p class="name-t-2">CAMILO RIVERA</p>
                        <p class="tit-log-2">Una mañana, tras un sueño intranquilo, Gregorio Samsa.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <h4 class="rec-m">RECIENTES </h4>
          <div class="recents-w">
            <div class="rec-box">
              <div class="pic-ct"></div>
              <div class="txt-ct">
                <h3 class="name-t-3">CAMILO RIVERA</h3>
              </div>
            </div>
          </div>
          <div class="recents-w">
            <div class="rec-box">
              <div class="pic-ct"></div>
              <div class="txt-ct">
                <h3 class="name-t-3">CAMILO RIVERA</h3>
              </div>
            </div>
          </div>
          <div class="recents-w">
            <div class="rec-box">
              <div class="pic-ct"></div>
              <div class="txt-ct">
                <h3 class="name-t-3">CAMILO RIVERA</h3>
              </div>
            </div>
          </div>
          <h4 class="rec-m">Síguenos en Nuestras Redes</h4>
          <ul class="soc-links">
            <li><a href="https://www.facebook.com/MillerLiteColombia/" alt="facebook Miller Lite" title="facebook Miller Lite"><span class="icon-miller-fb s-i-2"> </span></a></li>
            <li><a href="https://twitter.com/MillerLiteCol?lang=es" alt="twitter Miller Lite" title="twitter Miller Lite"><span class="icon-miller-tw s-i-2"> </span></a></li>
          </ul>
          <!--/-dashboard-->
        </div>
      </article>
    </div>
  </section>
  <!--Footer-->
  <?php $block = module_invoke('BRM_millerlite', 'block_view','footer_miller');
            print render($block['content']); 
  ?>
  </div>
  </div>