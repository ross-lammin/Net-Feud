<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package first10
 */
get_header(); ?>

	<div id="primary" class="content-area page__background">
		<main id="main" class="site-main page__wrapper" role="main">

		<?php my_list_categories_shortcode(); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();