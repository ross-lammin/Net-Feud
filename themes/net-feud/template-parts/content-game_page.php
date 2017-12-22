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

	<div class="related-posts">
		<h2 class="related-posts-title">You may also like</h2>

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

			 	<ul class="related-list"> 
				  <li>
				    <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
				    	<h3 class="related-title"><?php the_title() ?></h3>
				      <div class="related-list-img"><?php myarcade_thumbnail();?></div>
				      <p><?php myarcade_excerpt( 100 ) ?></p>
							</a>
				  </li>
			  </ul> 

			<?php
			endwhile;
			}
			wp_reset_query();  // Restore global post data stomped by the_post().
		?>

	</div>
</div>