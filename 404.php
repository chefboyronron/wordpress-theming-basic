<?php get_header(); ?>
	<div class="row">
		<div class="col-12">
			<h1 class="error-404 not-found">Page Not Found!</h1>
			<?php get_search_form(); ?>
			<?php the_widget('WP_Widget_Recent_Posts'); ?>
			<?php wp_list_categories(array(
				'orderby' => 'count',
				'order' => 'DESC',
				'show_count' => 1,
				'title_li' => '',
				'number' => 5,
			)); ?>
			<?php the_widget('WP_Widget_Archives', 'dropdown=0', 'after_title=</h2>'.$archive_content); ?>
		</div>
	</div>
<?php get_footer(); ?>