<?php if ( !function_exists( 'cg_register_menus' ) ) {
	function cg_register_menus () {
		register_nav_menus( array(
			'primary' => 'Main Menu'
		) );
	}

	add_action( 'init', 'cg_register_menus' );
}

if ( !function_exists( 'cg_register_widgets' ) ) {
	function cg_register_widgets () {
		register_sidebar( array(
				'name'          => __( 'Footer Widget Area', 'business-biscuit' ),
				'id'            => 'footer-widgets',
				'class'         => 'footer-widgets',
				'description'   => __( 'Widgets in this area will be shown in the footer.', 'business-biscuit' ),
				'before_title'	=> '<p class="h3">',
				'after_title'		=> '</p>',
		) );
	}

	add_action( 'widgets_init', 'cg_register_widgets' );
}

class CG_Mobile_Nav_Walker extends Walker_Nav_Menu {
  function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
		if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
				$t = '';
				$n = '';
		} else {
				$t = "\t";
				$n = "\n";
		}
		$indent = ( $depth ) ? str_repeat( $t, $depth ) : '';

		$classes   = empty( $item->classes ) ? array() : (array) $item->classes;
		$classes[] = 'menu-item-' . $item->ID;

		$args = apply_filters( 'nav_menu_item_args', $args, $item, $depth );

		$class_names = implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args, $depth ) );
		$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

		$id = apply_filters( 'nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args, $depth );
		$id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

		$output .= $indent . '<li' . $id . $class_names . '>';

		$atts           = array();
		$atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
		$atts['target'] = ! empty( $item->target ) ? $item->target : '';
		if ( '_blank' === $item->target && empty( $item->xfn ) ) {
				$atts['rel'] = 'noopener';
		} else {
				$atts['rel'] = $item->xfn;
		}
		$atts['href']         = ! empty( $item->url ) ? $item->url : '';
		$atts['aria-current'] = $item->current ? 'page' : '';

		$atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args, $depth );

		$attributes = '';
		foreach ( $atts as $attr => $value ) {
				if ( is_scalar( $value ) && '' !== $value && false !== $value ) {
						$value       = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
						$attributes .= ' ' . $attr . '="' . $value . '"';
				}
		}

		$title = apply_filters( 'the_title', $item->title, $item->ID );

		$title = apply_filters( 'nav_menu_item_title', $title, $item, $args, $depth );

		$item_output  = $args->before;
		$item_output .= '<a' . $attributes . '>';
		$item_output .= $args->link_before . $title . $args->link_after;
		$item_output .= '</a>';
		if( in_array('menu-item-has-children', $classes) ) {
			$item_output .= '<button class="sub-menu-toggle"><span class="v-hidden">Toggle Sub Menu</span><span class="material-icons">expand_more</span></button>';
		}
		$item_output .= $args->after;

		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
  }
}
