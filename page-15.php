<?php get_header(); ?>
	<div class="row">
		<div class="col-8">
			<?php 

				if( have_posts() ):
					while( have_posts() ): 
						the_post();
			?>
						<h1>My static title - custom page (page-15.php)</h1>
						<h3>My featured image</h3>
						<div class="thumbnail"><?php the_post_thumbnail('thumbnail'); ?></div>
						<small>Posted on : <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?> in <?php the_category(); ?></small>
						<p><?php the_content(); ?></p>
						<hr>
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