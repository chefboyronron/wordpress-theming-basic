<?php get_header(); ?>
	<div class="row">
		<div class="col-8">
			<?php 

				if( have_posts() ):
					while( have_posts() ): 
						the_post();
			?>
						<h1>Single.php</h1>
						<h3><?php the_title(); ?></h3>
						<div class="thumbnail"><?php the_post_thumbnail('thumbnail'); ?></div>
						<small><?php the_category(' '); ?> | <?php the_tags(); ?> | <?php edit_post_link(); ?></small>
						<p><?php the_content(); ?></p>
						<hr>		
			<?php
						if( comments_open() ):
							comments_template();
						else:
							echo '<h1 class="text-center">Sorry, Comments are closed!</h1>';
						endif;
					endwhile;
				endif;
			?>
		</div>
		<div class="col-4">
			<?php get_sidebar(); ?>
		</div>
	</div>
<?php get_footer(); ?>