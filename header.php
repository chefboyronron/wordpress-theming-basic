<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(bloginfo('name').'|', true, 'left'); ?></title>
		<meta name="description" content="<?php bloginfo('description') ?>">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class();?>>
		<div class="container">
			<?php get_template_part('parts/navbar','top'); ?>