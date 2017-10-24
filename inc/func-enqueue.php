<?php
/* 
	=============================================
	Properly include js and css files
	=============================================
*/
function awesome_script_enqueue()
{

	wp_enqueue_style(
		'bootstrapstyle', 
		get_template_directory_uri() . '/lib/bootstrap/css/bootstrap.min.css', 
		array(), 
		'4.0.0', 
		'all'
	);

	wp_enqueue_style(
		'customstyle', 
		get_template_directory_uri() . '/css/awesome.css', 
		array(), 
		'1.0.0', 
		'all'
	);

	wp_enqueue_script(
		'jqueryjs', 
		get_template_directory_uri() . '/lib/jquery/jquery-3.2.1.min.js', 
		array(), 
		'3.2.1', 
		false
	);

	wp_enqueue_script(
		'jquerymigratejs', 
		get_template_directory_uri() . '/lib/jquery/jquery-migrate-1.4.1.min.js', 
		array(), 
		'1.4.1', 
		false
	);

	wp_enqueue_script(
		'popperjs', 
		get_template_directory_uri() . '/lib/popper/popper.js', 
		array(), 
		'1.12.5', 
		false
	);

	wp_enqueue_script(
		'bootstrapjs', 
		get_template_directory_uri() . '/lib/bootstrap/js/bootstrap.min.js', 
		array(), 
		'4.0.0', 
		false
	);

	wp_enqueue_script(
		'customjs', 
		get_template_directory_uri() . '/js/awesome.js', 
		array(), 
		'1.0.0', 
		false
	);
}
add_action('wp_enqueue_scripts', 'awesome_script_enqueue');
?>