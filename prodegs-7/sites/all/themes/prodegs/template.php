<?php

/*
 * Process Block
 * pre-process hook_preprocess_html(()
 */
function prodegs_preprocess_html(&$variables) {
/*	drupal_add_js(path_to_theme().'/js/application.js');
	drupal_add_js(path_to_theme().'/js/bootstrap.js');
	drupal_add_js(path_to_theme().'/js/bootstrap.min.js');
	drupal_add_js(path_to_theme().'/js/bootstrap-affix.js');
	drupal_add_js(path_to_theme().'/js/bootstrap-alert.js');
	
	drupal_add_js(path_to_theme().'/js/bootstrap-button.js');
	drupal_add_js(path_to_theme().'/js/bootstrap-carousel.js');
	drupal_add_js(path_to_theme().'/js/bootstrap-collapse.js');
	drupal_add_js(path_to_theme().'/js/bootstrap-dropdown.js');
	drupal_add_js(path_to_theme().'/js/bootstrap-modal.js');
	drupal_add_js(path_to_theme().'/js/bootstrap-popover.js');
	
	drupal_add_js(path_to_theme().'/js/bootstrap-scrollspy.js');
	drupal_add_js(path_to_theme().'/js/bootstrap-tab.js');
	drupal_add_js(path_to_theme().'/js/bootstrap-tooltip.js');
	drupal_add_js(path_to_theme().'/js/bootstrap-transition.js');
	drupal_add_js(path_to_theme().'/js/bootstrap-typeahead.js');
	drupal_add_js(path_to_theme().'/js/google-code-prettify/prettify.js');
	drupal_add_js(path_to_theme().'/js/compressed.js');*/
	
	/*drupal_add_js(path_to_theme().'/js/ga.js');
	drupal_add_js(path_to_theme().'/js/jquery.js');
	drupal_add_js(path_to_theme().'/js/jquery-textslider.js');*/
	
	
	drupal_add_css(drupal_get_path('theme', 'prodegs') . "/css/menu_style.css");
	drupal_add_css(drupal_get_path('theme', 'prodegs') . "/css/style.css");
	
	
	/*drupal_add_css(drupal_get_path('theme', 'citrus2013') . "/css/font-awesome-ie7.css");
	drupal_add_css(drupal_get_path('theme', 'citrus2013') . "/js/google-code-prettify/prettify.css");*/
	
}



  function prodegs_preprocess_page(&$vars) {
// custom content type page template
  // Renders a new page template to the list of templates used if it exists
  if (isset($vars['node']->type)) {
// This code looks for any page--custom_content_type.tpl.php page
    $vars['theme_hook_suggestions'][] = 'page__' . $vars['node']->type;
  }
}

?>