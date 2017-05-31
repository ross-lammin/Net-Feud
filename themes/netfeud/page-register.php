<?php
/**
 * Template Name: register page
 *
 * The template for displaying the Catagories home page.
 *
 */


 get_header(); 


		while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/content', 'page' );
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			endwhile; // End of the loop.



 get_footer(); ?>