<?php 
/**
 * Template part for displaying single categories.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package first10
 */
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

			$args=array(
			'cat' => 1,
			'orderby' => 'rand',
			'post_type' => 'post',
			'post_status' => 'publish',
			'posts_per_page' => 3
			);

			$my_query = null;
			$my_query = new WP_Query($args);

			if( $my_query->have_posts() ) {
			while ($my_query->have_posts()) : $my_query->the_post(); ?>

		<div class="category__container--game">
			<?php echo '<a href="' . get_permalink() . '">';?>
				<article id="games-cards post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<?php
					echo '<h1 class="category__container--title">' ;
					echo myarcade_title();
					echo '</h1>';
					echo myarcade_thumbnail();
					echo '<div>';
					echo '<p>';
					echo myarcade_excerpt( 100 );
					echo '</p>';
					echo '</div';
					?>

				</article><!-- #post-## -->
			</a>
		</div>


			<?php
			endwhile;
			}
			wp_reset_query();  // Restore global post data stomped by the_post().
		?>

	</div>
</div>