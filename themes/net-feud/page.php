<?php
/**
<<<<<<< HEAD
 * The template for displaying all pages.
=======
 * The template for displaying all pages
>>>>>>> release/rc-1.0.0
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
<<<<<<< HEAD
 * @package first10
=======
 * @package net-feud
>>>>>>> release/rc-1.0.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
<<<<<<< HEAD
		<main id="main" class="site-main" role="main">
=======
		<main id="main" class="site-main">
>>>>>>> release/rc-1.0.0

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

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
