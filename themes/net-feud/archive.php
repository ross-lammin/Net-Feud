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

		<?php 
		$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
		$args = array(
			'posts_per_page' => 5,
			'category_name' => 'gallery',
			'paged' => $paged,
		);
		global $wp_query;
		
		?>

			<header class="page-header">
				<?php 
				echo '<h1>';
				echo single_cat_title();
				echo '</h1>';
				?>
			</header><!-- .page-header -->
		

			<div class="category__wrapper--game">
			<?php
		if ( have_posts() ) : 
			
			/* Start the Loop */
			while ( have_posts() ) : the_post();
				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'archive' );
			endwhile;
		else :
		endif;
		?> 

		</div>

		<?php
		$big = 999999999; // need an unlikely integer
		$args = array(
			'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
			'format' => '?paged=%#%',
			'current' => max( 1, get_query_var('paged') ),
			'total' => $wp_query->max_num_pages,
			'prev_text' => '&#8610;',
			'next_text' => '&#8611;'
		);
		echo '<div class="pagination-wrapper">' . paginate_links( $args ) . '</div>';
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();