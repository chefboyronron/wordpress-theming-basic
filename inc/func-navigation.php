<?php
function awesome_theme_setup()
{
	/*=============================================
		Enables the custom menu of the theme
		Dashboard->Appearance->Menus
	===============================================*/
	add_theme_support('menus');

	/*=============================================
		Register a menu to the admin section
	===============================================*/
	register_nav_menu('primary','Primary Header Navigation');
	register_nav_menu('secondary','Footer Navigation');
}

/*=============================================
	Add action to wp initialization
	OR after setup of theme
===============================================*/
// add_action('after_setup_theme', 'awesome_theme_setup'); //or
add_action('init', 'awesome_theme_setup');


/*=============================================
	add classname to wp_nav_menu() <li> elements
===============================================*/
/*function add_ul_navmenu_class( $classes, $item, $args, $depth ){
  $classes[] = 'nav-awesome';
  return $classes;
}
add_filter ( 'nav_menu_css_class', 'add_ul_navmenu_class', 10, 4 );*/
	
/*=============================================
	add classname to wp_nav_menu() <a> elements
===============================================*/
/*function add_link_navmenu_class($ulclass) {
   return preg_replace('/<a /', '<a class="nav-link"', $ulclass);
}
add_filter('wp_nav_menu','add_link_navmenu_class');
?>*/