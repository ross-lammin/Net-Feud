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
		
		<?php random_game_display(); ?>

	</div>
</div>