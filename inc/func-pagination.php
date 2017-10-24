<?php
if( !function_exists('my_pagination') ){
	function create_pagination(){
		global $wp_query;
		$big = 999999999; // need an unlikely integer
		$pages = paginate_links( array(
			'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
			'format' => '/page/%#%',
			'current' => max( 1, get_query_var('paged') ),
			'total' => $wp_query->max_num_pages,
			'prev_next' => FALSE,
			'type'  => 'array',
			'prev_next' => TRUE,
			'prev_text'    => __('Prev'),
			'next_text'    => __('Next'),
			'class' => 'page'
		) );
		if( is_array( $pages ) ) {
			$paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
			echo '<ul class="pagination pagination-sm">';
				foreach ( $pages as $k => $page ) {
					$strSearch = strpos($page, 'current');
					$active = (!$strSearch == false) ? 'active' : '';
					$page = str_replace('page-numbers', 'page-link', $page);
					echo '<li class="page-item '.$active.'">'.$page.'</li>';
				}
			echo '</ul>';
		}
	}
}
?>