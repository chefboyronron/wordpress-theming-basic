<?php get_header(); ?>
	<div class="row">
		<div class="col-8">
			<h1>archives-portfolio.php</h1>
			<?php 
				if( have_posts() ):
					while( have_posts() ): 
						the_post();
						get_template_part('parts/temp', 'archive');
			?>

			<?php
					endwhile;
				endif;
			?>
		</div>
		<div class="col-4">
			<?php get_sidebar(); ?>
		</div>
	</div>
<?php get_footer(); ?>