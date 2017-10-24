<?php
/* 
	=============================================
	Custom Post Type
	=============================================
*/
function awesome_custom_post_type(){

	//Dashboard administration labels
	$labels = array(
		'name' => 'Portfolio',
		'singular_name' => 'Portfilio',
		'add_new' => 'Add Item',
		'all_items' => 'All Items',
		'add_new_item' => 'Add Item',
		'edit_item' => 'Edit Item',
		'new_item' => 'New Item',
		'view_item' => 'View Item',
		'search_item' => 'Search Portfolio',
		'not_found' => 'No items found',
		'not_found_in_trash' => 'No items found in trash',
		'parent_item_colon' => 'Parent Item'
	);
	//Dashboard Custom Post Type Features
	$args = array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => true,
		'publicly_queryable' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'supports' => array(
			'title',
			'editor',
			'excerpt',
			'thumbnail',
			'revisions'
		),
		//'taxonomies' => array('category', 'post_tag'),
		'menu_position' => 5,
		'exclude_from_search' => false
	);
	register_post_type('portfolio', $args);
}
add_action('init', 'awesome_custom_post_type');
//In case the template single-{postypename}.php cant view 
// use flush_rewrite_rules(); one time only because it is a
// bad practice to run the function on regular basis.

//Create a custom taxonomies
function awesome_custom_taxonomies() {
	//add new taxonomy hierarchical
	$labels = array(
		'name' => 'Fields',
		'singular_name' => 'Field',
		'search_items' => 'Search Fields',
		'all_items' => 'All Fields',
		'parent_item' => 'Parent Field',
		'parent_item_colon' => 'Parent Field',
		'edit_item' => 'Edit Field',
		'update_item' => 'Update Field',
		'add_new_item' => 'Add New Field',
		'new_item_name' => 'New Field Name',
		'menu_name' => 'Fields'
	);
	$args = array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'field')
	);
	register_taxonomy('field', array('portfolio'), $args);

	//add new taxonomy NOT hierarchical

	register_taxonomy('software', 'portfolio', array(
		'label' => 'Software',
		'rewrite' => array('slug' => 'software'),
		'hierarchical' => false,
	));
}
add_action('init', 'awesome_custom_taxonomies');
?>