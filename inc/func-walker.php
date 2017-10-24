<?php

/*
	wp_nav_menu();

	<div class="menu-container">
		<ul> //start_lvl()
			<li><a><span> //start_el()
				description
			</span></a></li> //end_el()
			<li></li>
			<li></li>
			<li></li>
		</ul> //end_lvl()
	</div>
*/

class Walker_Nav_Primary extends Walker_Nav_menu {

	function start_lvl( &$output, $depth = 0, $args = array() ){ // handle <ul>
		$indent = str_repeat("\t", $depth); // add tab depends on the dept of html
		$submenu = ( $depth > 0 ) ? ' sub-menu' : '';
		$output .= "\n$indent<ul class=\"dropdown-menu$submenu depth_$depth\">\n";
	}

	function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ){ // handle <li>, <a>, <span>

		$indent = ( $depth ) ? str_repeat("\t", $depth) : '';

		$li_attributes = '';				
		$class_names = $value = '';

		$classes = ( empty( $item->classes ) ) ? array() : (array)$item->classes;

		// Construct <li> classes
		$classes[] = ( $args->walker->has_children ) ? 'dropdown' : '';
		$classes[] = ( $item->current || $item->current_item_anchestor ) ? 'active' : '';
		$classes[] = 'nav-item';
		$classes[] = 'nav-item-' . $item->ID;

		if( $depth && $args->walker->has_children ){
			$classes[] = 'dropdown-menu';
		}

		$class_names = join( ' ', apply_filters('nav_menu_css_class', array_filter( $classes ), $item, $args) );
		$class_names = ' class="' . esc_attr($class_names) . '"';

		$id = apply_filters('nav_menu_item_id', 'menu-item-'.$item->ID, $item, $args);
		$id = (strlen( $id ) > 0) ? ' id="' . esc_attr( $id ) . '"' : '';

		$output .= $indent . '<li' . $id . $value . $class_names . $li_attributes . '>';

		$attributes = (! empty( $item->attr_title )) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
		$attributes .= (! empty( $item->target )) ? ' target="' . esc_attr($item->target) . '"' : '';
		$attributes .= (! empty( $item->xfn )) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
		$attributes .= (! empty( $item->url )) ? ' href="' . esc_attr($item->url) . '"' : '';

		$attributes .= ( $args->walker->has_children ) ? ' class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"' : ' class="nav-link"';

		$item_output = $args->before;
		$item_output .= ( $depth > 0 ) ? '<a class="dropdown-item"' . $attributes . '>' : '<a' . $attributes . '>';
		$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
		$item_output .= '</a>';
		$item_output .= $args->after;

		$output .= apply_filters( 'Walker_nav_menu_start_el', $item_output, $item, $depth, $args );

	}

/*		function end_el(){ // handle </li>, </a>, </span>

	}

	function end_lvl(){ // handle </ul>

	}*/

}


?>