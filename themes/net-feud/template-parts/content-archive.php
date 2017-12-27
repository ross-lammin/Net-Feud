<?php 
/**
 * Template part for displaying single categories.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package first10
 */
// This array is for special characters that will be removed from the myarcade_title
// function to create a custom link.

?>


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


