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

<?php
if(isset($page['content']['metatags'])){
render($page['content']['metatags']);  
}

?>
<?php global $base_url; ?>
<div class="cont-ini-sesion">
  <a onclick="cerrar_login();" style="cursor:pointer;">X Cerrar</a>
  <?php $block = module_invoke('user', 'block_view','login');
    print render($block['content']); 
  ?>
</div>
<div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>
    </div>
  </div>
  <section class="container-fluid">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-men">
        <!--s-Menu-->
        <section class="container-fluid bg-men-2">
          <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
              <div class="navbar navbar-default navbar-default-but"> 
                <button type="button" data-toggle="offcanvas" data-target=".navmenu" data-canvas="body" class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
              </div>
            </div>
            <div class="col-lg-8 col-md-7 col-sm-10 col-xs-10">
              
                <h1 class="p-cent-log">
                  <?php 
                    if ($site_logo):
                      print $site_logo; 
                    endif; ?>
                </h1>
              
            </div>
            <?php $block = module_invoke('BRM_millerlite', 'block_view','user_login');
                  print render($block['content']); 
                  ?>
          </div>
        </section>
        <!--/s-Menu-->
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-men">
        <!--Menu-->
        <div class="navmenu navmenu-default navmenu-fixed-left offcanvas">
          <ul class="nav navmenu-nav visible-xs visible-sm visible-md">
            <?php 
            $varMenu = menu_tree_all_data('main-menu');
              foreach ($varMenu as $key => $value) {
                $conSubMenu = count($value['below']);
                $tit = strtolower($value['link']['link_title']);
                $alias = drupal_get_path_alias($value['link']['link_path']);
                $alias2 = drupal_get_path_alias(arg(0)."/".arg(1));
                if($tit == 'home' && $alias2 == 'node/'  ){ ?>
                  <li class="active">
                <?php }else{ ?>
                  <li class="">
                <?php }?>
                      <a href="<?php print_r($alias)?>">
                        <span class="icon-miller-<?php print_r($tit); ?> s-i"></span><?php print_r($value['link']['link_title'])?>
                      </a>                      
                    </li>
                    <?php 
                  } 
                ?>
              <?php $block = module_invoke('search', 'block_view','form');
                print render($block['content']); 
              ?>
          </ul>
          <!--dashboard-->
          <?php $block = module_invoke('BRM_millerlite', 'block_view','user_module');
            print render($block['content']); 
            ?>
            <?php $block = module_invoke('BRM_millerlite', 'block_view','slider_the_new');
            print render($block['content']); 
          ?>
          
          <?php $block = module_invoke('BRM_millerlite', 'block_view','recientes_home');
            print render($block['content']); 
            ?>
          <?php $block = module_invoke('BRM_millerlite', 'block_view','social_icons');
            print render($block['content']); 
            ?>
          <!--/-dashboard-->
        </div>
        <!--/Menu-->
      </div>
    </div>
    <div class="row bg-men-3 visible-lg visible-sm">
      <div class="col-lg-offset-3 col-lg-6 col-md-10 col-sm-10 col-xs-12">
        <!--Sub-Menu-->
        <ul class="nav nav-pills visible-lg">
          <?php 
            $varMenu = menu_tree_all_data('main-menu');
              foreach ($varMenu as $key => $value) {
                $conSubMenu = count($value['below']);
                $tit = strtolower($value['link']['link_title']);
                $alias = drupal_get_path_alias($value['link']['link_path']);
                $alias2 = drupal_get_path_alias(arg(0)."/".arg(1));
                if($tit == 'home' && $alias2 == 'node/'  ){ ?>
                  <li class="active">
                <?php }else{ ?>
                  <li class="">
                <?php }?>
                      <a href="<?php print_r($alias)?>">
                        <span class="icon-miller-<?php print_r($tit); ?> s-i"></span><?php print_r($value['link']['link_title'])?>
                      </a>                      
                    </li>
                    <?php 
                  } 
                ?>
        </ul>
        <!--/Sub-Menu-->
      </div>
      <div class="col-lg-3 col-md-1 col-sm-1 col-xs-12"></div>
    </div>
  </section>
  <div class="container-fluid">
    <div class="row">
      <div class="">
<?php print $messages; ?>
          <?php print render($page['help']); ?>
          <?php $block = module_invoke('BRM_millerlite', 'block_view','slider_prin_home');
            print render($block['content']); 
          ?>
      </div>
    </div>
  </div>
  <!--Footer-->
  <?php $block = module_invoke('BRM_millerlite', 'block_view','footer_miller');
            print render($block['content']); 
  ?>