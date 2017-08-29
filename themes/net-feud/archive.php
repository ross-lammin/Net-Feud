<?php
/**
<<<<<<< HEAD
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package first10
=======
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
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
		if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
<<<<<<< HEAD
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
=======
					the_archive_description( '<div class="archive-description">', '</div>' );
>>>>>>> release/rc-1.0.0
				?>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
