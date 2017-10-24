<?php get_header(); ?>
	<div class="row">
		<div class="col-8">
			<?php 
				$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;

				$args = array(
					'posts_per_page' => 2,
					'paged' => $paged,
				);
				// $postBlog = new WP_Query($args);
				query_posts($args);

				if( have_posts() ):
					while( have_posts() ): 
						the_post();
			?>
						<h1><?php the_title(); ?></h1>
						<hr>
			<?php
					endwhile;
			?>
			<?php
				create_pagination();
			?>
			<?php
				endif;
				wp_reset_postdata();
			?>

		</div>
		<div class="col-4">
			<?php get_sidebar(); ?>
		</div>
	</div>
<?php get_footer(); ?>