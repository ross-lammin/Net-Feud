<?php /* Template Name: Contact */ 

get_header(); ?>

	<div id="primary" class="content-area page__background">
		<main id="main" class="site-main page__wrapper" role="main">

			<?php
			while ( have_posts() ) : the_post();

				?>
				<h1> <?php the_title(); ?> </h1>
				<?php
				include( 'inc/contact-details.php' );
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