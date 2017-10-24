<?php get_header(); ?>
	<div class="row">
		<div class="col-8">
			<h1>single-portfolio.php</h1>
			<?php 
				if( have_posts() ):
					while( have_posts() ): 
						the_post();
			?>
						<h3><?php the_title(); ?></h3>
						<div class="thumbnail"><?php the_post_thumbnail('thumbnail'); ?></div>
						<small><?php 
							// Retrieve custom heirarchical taxonomy == categorie in the Posts post_type
							echo awesome_get_term( $post->ID, 'field' );

						?> | <?php
							// Retrieve NON heirarchical taxonomy == tags in the Posts post_type
							// location function.php same function same as retrieving heirarchical taxonomy
							echo awesome_get_term( $post->ID, 'software' );
						?> <?php 
							//check if current user has capability to add/edit/delete posts.
							if( current_user_can('manage_options') ){
								echo ' | ';
								edit_post_link(); 
							}	
						?></small>
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