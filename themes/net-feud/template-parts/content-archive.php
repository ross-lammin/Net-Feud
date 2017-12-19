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
$search = array(
  '&#8220;',
  '&#8221;',
  '&#8216;',
  '&#8217;',
  '&#039;',
  '&amp;',
  '&quot;',
  '&lt;',
  '&gt;'
);
// This variable returns the myarcade_title but in the style of non-special characers 
// and replaces blank spaces with underscores.
$small_game_url = strtolower( myarcade_title( 0, false ) );
$small_game_url = str_replace( $search, "", $small_game_url );
$small_game_url = preg_replace( '/[\W]+/', '-', $small_game_url );
?>

<div class="category__container--game">
	<?php echo '<a href="http://netfeud.dev/' . $small_game_url . '">'?>
		<article id="games-cards post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<?php
					echo '<h1>' ;
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