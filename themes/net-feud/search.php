<?php
/**
<<<<<<< HEAD
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package first10
=======
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package net-feud
>>>>>>> release/rc-1.0.0
 */

get_header(); ?>

	<section id="primary" class="content-area">
<<<<<<< HEAD
		<main id="main" class="site-main" role="main">
=======
		<main id="main" class="site-main">
>>>>>>> release/rc-1.0.0

		<?php
		if ( have_posts() ) : ?>

			<header class="page-header">
<<<<<<< HEAD
				<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'first10' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
=======
				<h1 class="page-title"><?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'net-feud' ), '<span>' . get_search_query() . '</span>' );
				?></h1>
>>>>>>> release/rc-1.0.0
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_sidebar();
get_footer();
