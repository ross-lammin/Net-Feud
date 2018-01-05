<?php
/**
 * This creates the [my_cat_list] shortcode and calls the
 * my_list_categories_shortcode() function.
 */
add_shortcode( 'my_cat_list', 'my_list_categories_shortcode' );
/**
 *
 */
function my_list_categories_shortcode() {
	// Initialise empty markup array to be printed out later.
	$markup = '';
	$markup .= '<div class="category__content--wrapper">';
	$markup .= '<h3 class="categories__sub-header">List of categories in alphabetical order</h3>';
	$markup .= '<div class="category__list--wrapper">';
	// Args array for categories to get.	
	$args = array(
		'orderby' => 'name',
		'order' => 'asc',
	);
	// Get the categories we need to loop over.
	$categories = get_categories($args);
	// Set the old category varaible as empty string.
	$old_category_letter = '';
	// Loop over all the categories and decied whether or not to print the first letter.
	foreach ( $categories as $category => $value) {
		// Get the first letter of the current category.
		$category_letter = substr($value->name, 0, 1);
		// If the current category first letter doesn't match the old category letter
		// then add it to the markup variable.
		if( $category_letter !== $old_category_letter ){
			// Add first letter into the markup variable.
			$markup .= '<h1 class="category__list--titles">' . $category_letter . '</h1>';
		}
		// Add the category to the markup variable.
		$markup .= '<a class="category__list--links" href="' . get_category_link($value->term_id) . '"><li class="category__list--items">' . $value->name . '</li></a></br>';
		// Set the old category letter to the current category letter.
		$old_category_letter = $category_letter;
	}
	$markup .= '</div>';
	$markup .= '</div>';
	echo $markup;
}


/**
 * This creates the [my_pag_link] shortcode and calls the
 * my_paginate_links() function.
 */
add_shortcode( 'my_pag_link', 'my_paginate_links' );
/**
 * Used for paginating the category archive pages.
 */
function my_paginate_links() {
	 if( is_singular() )
        return;
 
    global $wp_query;
 
    /** Stop execution if there's only 1 page */
    if( $wp_query->max_num_pages <= 1 )
        return;
 
    $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
    $max   = intval( $wp_query->max_num_pages );
 
    /** Add current page to the array */
    if ( $paged >= 1 )
        $links[] = $paged;
 
    /** Add the pages around the current page to the array */
    if ( $paged >= 3 ) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }
 
    if ( ( $paged + 2 ) <= $max ) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }
 
    echo '<div class="pagination__container"><ul>';
 
    /** Previous Post Link */
    echo '<span class="pagination__prev">';
    previous_posts_link('&#9664;');
    echo '</span>';
 
    /** Link to first page, plus ellipses if necessary */
    if ( ! in_array( 1, $links ) ) {
        $class = 1 == $paged ? ' class="active"' : '';
 
        printf( '<li%s><a href="%s">%s</a></li>', $class, esc_url( get_pagenum_link( 1 ) ), '1' );
 
        if ( ! in_array( 2, $links ) )
            echo '<li>…</li>';
    }
 
    /** Link to current page, plus 2 pages in either direction if necessary */
    sort( $links );
    foreach ( (array) $links as $link ) {
        $class = $paged == $link ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>', $class, esc_url( get_pagenum_link( $link ) ), $link );
    }
 
    /** Link to last page, plus ellipses if necessary */
    if ( ! in_array( $max, $links ) ) {
        if ( ! in_array( $max - 1, $links ) )
            echo '<li>…</li>';
 
        $class = $paged == $max ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>', $class, esc_url( get_pagenum_link( $max ) ), $max );
    }
 
    /** Next Post Link */
    echo '<span class="pagination__next">';
    next_posts_link('&#9654;');
    echo '</span>';
 
    echo '</ul></div>';
}

/*
* This makes the user redirect to home page upon logging out.
* Not sure if user want this but im going to trial it out.
*/
add_action('wp_logout',create_function('','wp_redirect(home_url());exit();'));
