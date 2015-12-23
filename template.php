<?php

/**
 * @file
 * Process theme data.
 *
 * Use this file to run your theme specific implimentations of theme functions,
 * such preprocess, process, alters, and theme function overrides.
 *
 * Preprocess and process functions are used to modify or create variables for
 * templates and theme functions. They are a common theming tool in Drupal, often
 * used as an alternative to directly editing or adding code to templates. Its
 * worth spending some time to learn more about these functions - they are a
 * powerful way to easily modify the output of any template variable.
 *
 * Preprocess and Process Functions SEE: http://drupal.org/node/254940#variables-processor
 * 1. Rename each function and instance of "adaptivetheme_subtheme" to match
 *    your subthemes name, e.g. if your theme name is "footheme" then the function
 *    name will be "footheme_preprocess_hook". Tip - you can search/replace
 *    on "adaptivetheme_subtheme".
 * 2. Uncomment the required function to use.
 */


/**
 * Preprocess variables for the html template.
 */
/* -- Delete this line to enable.
function adaptivetheme_subtheme_preprocess_html(&$vars) {
  global $theme_key;

  // Two examples of adding custom classes to the body.

  // Add a body class for the active theme name.
  // $vars['classes_array'][] = drupal_html_class($theme_key);

  // Browser/platform sniff - adds body classes such as ipad, webkit, chrome etc.
  // $vars['classes_array'][] = css_browser_selector();

}
// */


/**
 * Process variables for the html template.
 */
/* -- Delete this line if you want to use this function
function adaptivetheme_subtheme_process_html(&$vars) {
}
// */


/**
 * Override or insert variables for the page templates.
 */

function millerLiteColTheme_preprocess_page(&$vars) {

	if(arg(0)=="node" && arg(1)=="99"){
		$vars['theme_hook_suggestions'][] = 'page__lived';

	}

	
	
	$header = drupal_get_http_header('status'); 
  	if ($header == '404 Not Found') {     
    	$vars['theme_hook_suggestions'][] = 'page__404';
  	}

	//drupal_add_css(path_to_theme() . '/css/styles.css' , array('group' => CSS_DEFAULT, 'every_page' => TRUE));
	//drupal_add_js('https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js', array( 'scope' => 'header', 'weight' => -20 , 'group' => JS_LIBRARY, 'preprocess' => FALSE));
  	drupal_add_js('https://maps.googleapis.com/maps/api/js?key=AIzaSyBDUCrY-Ih_wLT96QyP2yu7ARawGCbjPjM', array( 'scope' => 'header', 'weight' => -20 , 'group' => JS_LIBRARY, 'preprocess' => FALSE));
	drupal_add_js(path_to_theme() . '/js/jquery-11.js', array( 'scope' => 'header', 'weight' => -20 , 'group' => JS_LIBRARY, 'preprocess' => FALSE));
	drupal_add_js(path_to_theme() . '/js/libs/bootstrap.min.js',  array( 'scope' => 'header', 'weight' => -20 , 'group' => JS_LIBRARY, 'preprocess' => FALSE));

	drupal_add_js(path_to_theme() . '/js/tabs/jquery.tabslet.min.js',  array( 'scope' => 'header', 'weight' => -20 , 'group' => JS_LIBRARY, 'preprocess' => FALSE));
	drupal_add_js(path_to_theme() . '/js/tabs/jquery.tabslet.js',  array( 'scope' => 'header', 'weight' => -20 , 'group' => JS_LIBRARY, 'preprocess' => FALSE));
	drupal_add_js(path_to_theme() . '/js/vendor/jquery.tabslet.min.js',  array( 'scope' => 'header', 'weight' => -20 , 'group' => JS_LIBRARY, 'preprocess' => FALSE));
	drupal_add_js(path_to_theme() . '/js/vendor/rainbow-custom.min.js',  array( 'scope' => 'header', 'weight' => -20 , 'group' => JS_LIBRARY, 'preprocess' => FALSE));
	drupal_add_js(path_to_theme() . '/js/vendor/jquery.anchor.js',  array( 'scope' => 'header', 'weight' => -20 , 'group' => JS_LIBRARY, 'preprocess' => FALSE));
	drupal_add_js(path_to_theme() . '/js/tabs/initializers.js',  array( 'scope' => 'header', 'weight' => -20 , 'group' => JS_LIBRARY, 'preprocess' => FALSE));
	drupal_add_js(path_to_theme() . '/js/popup.js',  array( 'scope' => 'header', 'weight' => -20 , 'group' => JS_LIBRARY, 'preprocess' => FALSE));
	

	drupal_add_css(path_to_theme() . '/css/brmfiles/bootstrap.min.css' , array('group' => CSS_DEFAULT, 'every_page' => TRUE));
	drupal_add_css(path_to_theme() . '/css/brmfiles/millerLite-drupal.min.css' , array('group' => CSS_DEFAULT, 'every_page' => TRUE));
	drupal_add_css(path_to_theme() . '/css/brmfiles/jasny-bootstrap.min.css' , array('group' => CSS_DEFAULT, 'every_page' => TRUE));
	drupal_add_css(path_to_theme() . '/css/brmfiles/style.css' , array('group' => CSS_DEFAULT, 'every_page' => TRUE));
	drupal_add_js(path_to_theme() . '/js/jasny-bootstrap.min.js',  array( 'scope' => 'header', 'weight' => -20 , 'group' => JS_LIBRARY, 'preprocess' => FALSE));
	drupal_add_css(path_to_theme() . '/css/style-beertime.css' , array('group' => CSS_DEFAULT, 'every_page' => TRUE));
	
	
	//setcookie('validarEdad', '', time() - 60);
	// Se valida si existe una cookie de la edad
	//var_dump($_COOKIE['validarEdad']);
	if (isset($_COOKIE['validarEdad']) && ($_COOKIE['validarEdad'])==1){
		//drupal_add_js(path_to_theme() . '/js/jquery.js',  array( 'scope' => 'header', 'weight' => -20 , 'group' => JS_LIBRARY, 'preprocess' => FALSE));
		drupal_add_js(path_to_theme() . '/js/libs/bootstrap.min.js',  array( 'scope' => 'header', 'weight' => -20 , 'group' => JS_LIBRARY, 'preprocess' => FALSE));
		drupal_add_css(path_to_theme() . '/css/styleHaspe.css' , array('group' => CSS_DEFAULT, 'every_page' => TRUE));
		drupal_add_js(path_to_theme() . '/js/validacionInicio.js',  array( 'scope' => 'header', 'weight' => -20 , 'group' => JS_LIBRARY, 'preprocess' => FALSE));
		drupal_add_js(drupal_get_path('module', 'BRM_millerlite') . '/js/brmMiller.js');
		
	}elseif(isset($_COOKIE['validarEdad']) && ($_COOKIE['validarEdad'])==2){
		drupal_add_css(path_to_theme() . '/css/vendor/foundation.css' , array('group' => CSS_DEFAULT, 'every_page' => TRUE));
		drupal_add_css(path_to_theme() . '/css/estilos.css' , array('group' => CSS_DEFAULT, 'every_page' => TRUE));
		drupal_add_css(path_to_theme() . '/css/estilos2.css' , array('group' => CSS_DEFAULT, 'every_page' => TRUE));
		drupal_add_css(path_to_theme() . '/css/webfonkit.css' , array('group' => CSS_DEFAULT, 'every_page' => TRUE));
		drupal_add_css(path_to_theme() . '/css/mainqueries.css' , array('group' => CSS_DEFAULT, 'every_page' => TRUE));
		drupal_add_css(path_to_theme() . '/css/animate.css' , array('group' => CSS_DEFAULT, 'every_page' => TRUE));
		drupal_add_css(path_to_theme() . '/js/chosen/chosen.css' , array('group' => CSS_DEFAULT, 'every_page' => TRUE));
		$vars['theme_hook_suggestions'][] = 'page__menoredad';
	}else{
		drupal_add_js(path_to_theme() . '/js/tabs/jquery.tabslet.js',  array( 'scope' => 'header', 'weight' => -20 , 'group' => JS_LIBRARY, 'preprocess' => FALSE));
	drupal_add_js(path_to_theme() . '/js/vendor/jquery.tabslet.min.js',  array( 'scope' => 'header', 'weight' => -20 , 'group' => JS_LIBRARY, 'preprocess' => FALSE));
	drupal_add_js(path_to_theme() . '/js/vendor/rainbow-custom.min.js',  array( 'scope' => 'header', 'weight' => -20 , 'group' => JS_LIBRARY, 'preprocess' => FALSE));
	drupal_add_js(path_to_theme() . '/js/vendor/jquery.anchor.js',  array( 'scope' => 'header', 'weight' => -20 , 'group' => JS_LIBRARY, 'preprocess' => FALSE));
	drupal_add_js(path_to_theme() . '/js/tabs/initializers.js',  array( 'scope' => 'header', 'weight' => -20 , 'group' => JS_LIBRARY, 'preprocess' => FALSE));
	drupal_add_js(path_to_theme() . '/js/popup.js',  array( 'scope' => 'header', 'weight' => -20 , 'group' => JS_LIBRARY, 'preprocess' => FALSE));
	
		drupal_add_js(path_to_theme() . '/js/vendor/modernizr.js',  array( 'scope' => 'header', 'weight' => -20 , 'group' => JS_LIBRARY, 'preprocess' => FALSE));
		drupal_add_js(path_to_theme() . '/js/jquery.js',  array( 'scope' => 'header', 'weight' => -20 , 'group' => JS_LIBRARY, 'preprocess' => FALSE));
		drupal_add_js(path_to_theme() . '/js/validacionInicio.js',  array( 'scope' => 'header', 'weight' => -20 , 'group' => JS_LIBRARY, 'preprocess' => FALSE));
		drupal_add_js(path_to_theme() . '/js/ga.js',  array( 'scope' => 'header', 'weight' => -20 , 'group' => JS_LIBRARY, 'preprocess' => FALSE));
		drupal_add_js(path_to_theme() . '/js/tabs/jquery.tabslet.min.js',  array( 'scope' => 'header', 'weight' => -20 , 'group' => JS_LIBRARY, 'preprocess' => FALSE));
	
		drupal_add_css(path_to_theme() . '/css/vendor/foundation.css' , array('group' => CSS_DEFAULT, 'every_page' => TRUE));
		drupal_add_css(path_to_theme() . '/css/estilos.css' , array('group' => CSS_DEFAULT, 'every_page' => TRUE));
		drupal_add_css(path_to_theme() . '/css/estilos2.css' , array('group' => CSS_DEFAULT, 'every_page' => TRUE));
		drupal_add_css(path_to_theme() . '/css/webfonkit.css' , array('group' => CSS_DEFAULT, 'every_page' => TRUE));
		drupal_add_css(path_to_theme() . '/css/mainqueries.css' , array('group' => CSS_DEFAULT, 'every_page' => TRUE));
		drupal_add_css(path_to_theme() . '/css/animate.css' , array('group' => CSS_DEFAULT, 'every_page' => TRUE));
		drupal_add_css(path_to_theme() . '/js/chosen/chosen.css' , array('group' => CSS_DEFAULT, 'every_page' => TRUE));
		$vars['theme_hook_suggestions'][] = 'page__validarEdad';
	}
}

function adaptivetheme_subtheme_process_page(&$vars) {
}




/**
 * Override or insert variables into the node templates.
 */
/* -- Delete this line if you want to use these functions
function adaptivetheme_subtheme_preprocess_node(&$vars) {
}
function adaptivetheme_subtheme_process_node(&$vars) {
}
// */


/**
 * Override or insert variables into the comment templates.
 */
/* -- Delete this line if you want to use these functions
function adaptivetheme_subtheme_preprocess_comment(&$vars) {
}
function adaptivetheme_subtheme_process_comment(&$vars) {
}
// */


/**
 * Override or insert variables into the block templates.
 */
/* -- Delete this line if you want to use these functions
function adaptivetheme_subtheme_preprocess_block(&$vars) {
}
function adaptivetheme_subtheme_process_block(&$vars) {
}
// */
