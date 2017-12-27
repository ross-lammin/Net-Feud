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
			<h1><?php single_cat_title(); ?> </h1>
			<div class="category__wrapper--game">

				<?php 
				while ( have_posts() ) : the_post();

					get_template_part('template-parts/content', 'archive');

				endwhile; // End of the loop.
				?>
			</div>
			<?php echo my_paginate_links(); ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();