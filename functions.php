<?php
include 'inc/func-navigation.php';
include 'inc/func-theme-support.php';
include 'inc/func-enqueue.php';
include 'inc/func-pagination.php';
// include 'inc/func-walker.php';
require get_template_directory() . '/inc/func-walker.php';
require get_template_directory() . '/inc/func-custom-posts-type.php';
/* 
	=============================================
	Sidebar Widget Function
	=============================================
*/
function awesome_widget_setup()
{
	register_sidebar(
		array(
			'name' => 'sidebar',
			'id' => 'sidebar-1',
			'class' => 'custom',
			'description' => 'Standard Sidebar',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h1 class="widget-title">',
			'after_title'   => '</h1>'
		)
	);
}
add_action('widgets_init','awesome_widget_setup');

/* 
	=============================================
	Head function
	=============================================
*/

function awesome_remove_version(){
	return '';
}
add_filter('the_generator', 'awesome_remove_version');

/* 
	=============================================
	Custom term function - Taxonomy
	=============================================
*/
function awesome_get_term( $postId, $term ){
	$terms_list = wp_get_post_terms($postId, $term);
	$terms = array();
	foreach( $terms_list as $term ){
		$terms[] = '<a href="'.get_term_link($term).'">'.$term->name.'</a>';
	}
	return implode(', ', $terms);
}