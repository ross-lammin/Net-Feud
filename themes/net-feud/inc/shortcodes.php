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
  // Pagination
function my_paginate_links() {
    global $wp_rewrite, $wp_query;
    $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
    $pagination = array(
        'base' => @add_query_arg('page','%#%'),
        'format' => '',
        'total' => $wp_query->max_num_pages,
        'current' => $current,
        'prev_text' => __('&laquo;'),
        'next_text' => __('&raquo;'),
        'end_size' => 1,
        'mid_size' => 2,
        'show_all' => true,
        'type' => 'array'
    );
    if ( $wp_rewrite->using_permalinks() )
            $pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg( 's', get_pagenum_link( 1 ) ) ) . 'page/%#%/', 'paged' );
    if ( !empty( $wp_query->query_vars['s'] ) )
            $pagination['add_args'] = array( 's' => get_query_var( 's' ) );
    $pages = paginate_links( $pagination );
    echo '<ul>';
    if ( $paged == 1) echo '<li><a href="#" class="disabled">&laquo;</a></li>';
    foreach ($pages as $page) :
        echo '<li>'.$page.'</li>';
    endforeach;
    if ( $paged == $wp_query->max_num_pages ) echo '<li><a href="#" class="disabled">&raquo;</a></li>';
    echo '</ul>';
}