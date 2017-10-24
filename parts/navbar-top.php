<?php
	$args = array(
		'theme_location' => 'primary',
		'menu_class' => 'navbar-nav mt-2 mt-lg-0',
		'walker' => new Walker_Nav_Primary()
	);
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<a class="navbar-brand" href="#">Navbar</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#primaryNavBarMenu" aria-controls="primaryNavBarMenu" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="primaryNavBarMenu">
		<ul class="mr-auto"></ul>
	    <?php wp_nav_menu($args); ?>
	    <?php get_search_form(); ?>
    </div>
</nav>