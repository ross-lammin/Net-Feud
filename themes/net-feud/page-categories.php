<?php
/**
 * Template Name: Categories
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package first10
 */

get_header(); ?>

	<div id="primary" class="content-area page__background">
		<main id="main" class="site-main page__wrapper" role="main">
			<h1><?php The_title(); ?></h1>
			<?php
			while ( have_posts() ) : the_post();

				my_list_categories_shortcode();

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
