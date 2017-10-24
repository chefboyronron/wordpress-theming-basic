<?php get_header(); ?>
	<div class="row">
		<?php
			$args_cat = array(
				'include' => '4,5,6',
				'orderby' => 'date',
				'order' => 'DESC'
			);

			$categories = get_categories($args_cat);

			foreach($categories as $category) :
		?>
		<?php
				$args = array(
					'posts_per_page' => 1,
					'category__in' => array($category->term_id),
					'category__not_in' => array(7),
				);
				$postBlog = new WP_Query($args);
				if( $postBlog->have_posts() ):
					while( $postBlog->have_posts() ): 
						$postBlog->the_post();
		?>
						<div class="col-xs-12 col-sm-4 col-lg-4">
							<div class="border border-dark">
								<h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
								<?php if( has_post_thumbnail() ): ?>
									<?php the_post_thumbnail('thumbnail', array('class'=>'img-thumbnail')); ?>
								<?php endif; ?>
								<br>
								<small>Posted on : <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?> in <?php the_category(); ?></small> 
							</div>
						</div>
		<?php
					endwhile;
				endif;
				wp_reset_postdata();
		?>
		<?php 
			endforeach; 
		?>
	</div>
	<div class="row">
		<div class="col-8">
			<div class="border border-danger">
			<h1>Offet 3 post</h1>
			<?php 
				$args = array(
					'posts_per_page' => 2,
					'offset' => 3,
					'orderby' => 'date',
					'order' => 'DESC'
				);
				$postBlog = new WP_Query($args);
				if( $postBlog->have_posts() ):
					while( $postBlog->have_posts() ): 
						$postBlog->the_post();
			?>
						<h2><?php the_title(); ?></h2>
						<?php if( has_post_thumbnail() ): ?>
							<?php the_post_thumbnail('thumbnail', array('class'=>'img-thumbnail')); ?>
						<?php endif; ?>
						<br>
						<small>Posted on : <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?> in <?php the_category(); ?></small>
						<p><?php the_content(); ?></p>
			<?php
					endwhile;
				endif;
				wp_reset_postdata();
			?>
			</div>

			<div class="border border-primary">
			<h1>Category name</h1>
			<?php 
				$paged = ( get_query_var( 'page' ) ) ? absint( get_query_var( 'page' ) ) : 1;
				$args = array(
					'posts_per_page' => 1,
					'paged' => $paged
					//'category_name' => 'tutorials'
				);
				// $postBlog = new WP_Query($args);
				query_posts($args);
				if( have_posts() ):
					while( have_posts() ): 
						the_post();
			?>
						<h2><?php the_title(); ?></h2>
						<?php if( has_post_thumbnail() ): ?>
							<?php the_post_thumbnail('thumbnail', array('class'=>'img-thumbnail')); ?>
						<?php endif; ?>
						<br>
						<small>Posted on : <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?> in <?php the_category(); ?></small>
						<p><?php the_content(); ?></p>
			<?php
					endwhile;
					create_pagination();
				endif;
				wp_reset_postdata();
			?>
			</div>

			<?php 

				if( have_posts() ):
					while( have_posts() ): 
						the_post();
			?>
						<h1><?php the_title(); ?></h1>
						<?php if( has_post_thumbnail() ): ?>
							<?php the_post_thumbnail('thumbnail', array('class'=>'img-thumbnail')); ?>
						<?php endif; ?>
						<br>
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