<?php
/**
<<<<<<< HEAD
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package first10
=======
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package net-feud
>>>>>>> release/rc-1.0.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
<<<<<<< HEAD
		<main id="main" class="site-main" role="main">

		<?php

		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_format() );
=======
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_type() );
>>>>>>> release/rc-1.0.0

			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
