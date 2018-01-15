<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package first10
 */
get_header(); ?>

	<div id="primary" class="content-area page__background">
		<main id="main" class="site-main page__wrapper" role="main">
			
		<?php
		while ( have_posts() ) : the_post();
			?>
			<div class="game-page__wrapper">

	<h1><?php the_title(); ?></h1>
	<div class="game-page__screen">
		<?php echo get_game(); ?>
		<div class="single-game__details--container">
			<h3 class="single-game__title">Instructions</h3>
			<p class="single-game__description"><?php myarcade_description() ?></p>
		</div>
	</div>

	<h2 class="related-posts-title">You may also like</h2>
		
	<div class="category__wrapper--game">
		<?php

			$args = array(
			'cat' => 1,
			'orderby' => 'rand',
			'post_type' => 'post',
			'post_status' => 'publish',
			'posts_per_page' => 3
			);

			$my_query = null;
			$my_query = new WP_Query($args);

			while ($my_query->have_posts()) : $my_query->the_post(); 
				?>

		<div class="category__container--game">
			<a href="<?php get_permalink(); ?>">
				<article id="games-cards post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<h1 class="category__container--title">
					<?php myarcade_title() ?>
					</h1>
					<?php myarcade_thumbnail(); ?>
					<div>
					<p>
					<?php myarcade_excerpt( 100 ); ?>
					</p>
					</div>

				</article><!-- #post-## -->
			</a>
		</div>


			<?php
			endwhile;
			wp_reset_query();
		?>

	</div>
</div>
<?php 
		endwhile; // End of the loop.
		?>
	
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();