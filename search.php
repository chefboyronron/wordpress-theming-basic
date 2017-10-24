<?php get_header(); ?>
	<div class="row">
		<div class="col-8">
			<?php 

				if( have_posts() ):
					while( have_posts() ): 
						the_post();
			?>
						<h1><?php the_title(); ?></h1>
						<small><?php the_category(' '); ?></small>
						<p><?php the_excerpt(); ?></p>
						<hr>
			<?php
					endwhile;
				else:
					echo '<p><h3>Sorry, no results "'.get_search_query().'"</h3></p>';
				endif;
			?>
		</div>
		<div class="col-4">
			<?php get_sidebar(); ?>
		</div>
	</div>
<?php get_footer(); ?>