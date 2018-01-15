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
		<div class="game-page__game-wrapper--full">
		<?php echo get_game(); ?>
		<?php 
			echo 'Times played:' . MyArcade_Stats::get_plays( 'total');
			rw_the_post_rating($postID = false, $class = 'blog-post', $schema = false);
		?>
		</div>
		<div class="single-game__details--container">
			<h3 class="single-game__title">Instructions</h3>
			<p class="single-game__description"><?php myarcade_description() ?></p>
		</div>
		
	</div>

	<h2 class="related-posts-title">You may also like</h2>
		
	<div class="category__wrapper--game">
		<?php


			$current_game_category = get_the_category();
			 
			if ( ! empty( $current_game_category ) ) {
			    $current_category = esc_html( $current_game_category[0]->name );
			}

			$args = array(
			'category_name' => $current_category,
			'orderby' => 'rand',
			'post_type' => 'post',
			'post_status' => 'publish',
			'posts_per_page' => 3
			);

			$my_query;
			$my_query = new WP_Query($args);

			if( $my_query->have_posts() ) {
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
			}
			wp_reset_query();
		?>

	</div>
</div>