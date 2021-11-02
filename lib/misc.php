<?php function cg_get_the_archive_title() {
    if ( is_category() ) {
        /* translators: Category archive title. %s: Category name */
        $title = sprintf( __( ' %s' ), single_cat_title( '', false ) );
    } elseif ( is_tag() ) {
        /* translators: Tag archive title. %s: Tag name */
        $title = sprintf( __( '%s' ), single_tag_title( '', false ) );
    } elseif ( is_author() ) {
        /* translators: Author archive title. %s: Author name */
        $title = sprintf( __( 'Posts written by %s' ), '<span class="vcard">' . get_the_author() . '</span>' );
    } elseif ( is_year() ) {
        /* translators: Yearly archive title. %s: Year */
        $title = sprintf( __( 'Posts from %s' ), get_the_date( _x( 'Y', 'yearly archives date format' ) ) );
    } elseif ( is_month() ) {
        /* translators: Monthly archive title. %s: Month name and year */
        $title = sprintf( __( 'Posts from %s' ), get_the_date( _x( 'F Y', 'monthly archives date format' ) ) );
    } elseif ( is_day() ) {
        /* translators: Daily archive title. %s: Date */
        $title = sprintf( __( 'Posts from %s' ), get_the_date( _x( 'F j, Y', 'daily archives date format' ) ) );
    } elseif ( is_post_type_archive() ) {
        /* translators: Post type archive title. %s: Post type name */
        $title = sprintf( __( '%s' ), post_type_archive_title( '', false ) );
    } elseif ( is_tax() ) {
        $tax = get_taxonomy( get_queried_object()->taxonomy );
        /* translators: Taxonomy term archive title. 1: Taxonomy singular name, 2: Current taxonomy term */
        $title = sprintf( __( '%1$s: %2$s' ), $tax->labels->singular_name, single_term_title( '', false ) );
    } elseif ( is_search() ) {
        $title = sprintf( __( 'Search Results for: %s' ), get_search_query() );
    } else {
        $title = __( 'All Posts' );
    }

    /**
     * Filters the archive title.
     *
     * @since 4.1.0
     *
     * @param string $title Archive title to be displayed.
     */
    return apply_filters( 'get_the_archive_title', $title );
}

// Custom block category for custom blocks
function cg_block_category( $categories, $post ) {
	return array_merge(
		$categories,
		array(
			array(
				'slug'     => 'cg',
				'title'    => __( 'My Blocks', 'cg' )
			),
		)
	);
}
add_filter( 'block_categories_all', 'cg_block_category', 10, 2);
