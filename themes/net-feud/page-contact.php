<?php /* Template Name: Contact */ 

get_header(); ?>

	<div id="primary" class="content-area page__background">
		<main id="main" class="site-main page__wrapper" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				echo do_shortcode('[gravityform id="1" title="false" description="false"]');

				echo '<em class="form__legal-info">Please note that all information shared with us will be kept strictly confidential and will never be shared with any third party outside this website</em>';

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();