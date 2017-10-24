<?php /* Template Name: Page No Title */ ?>
<?php get_header(); ?>

	<?php 
		echo "<h1>page-notitle.php</h1>";
		if( have_posts() ):
			while( have_posts() ): 
				the_post();
				get_template_part('parts/temp', 'archive');
	?>
				
	<?php
			endwhile;
		endif;
	?>


<?php get_footer(); ?>