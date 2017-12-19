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
	<div class="game-page__screen"><?php echo get_game(); ?></div>

	<?php
	if (function_exists('myarcade_get_leaderboard_code')) {
		echo myarcade_get_leaderboard_code();
	}
$related = get_posts( array( 'category__in' => wp_get_post_categories($post->$categories), 'numberposts' => 3, 'post__not_in' => array($post->$categories) ) );
if( $related ) foreach( $related as $post ) {
setup_postdata($post); ?>
 <ul> 
        <li>
	        <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); 
	          myarcade_thumbnail();
	          myarcade_description();
	          ?>
	   			</a>
        </li>
    </ul>   
<?php }
wp_reset_postdata(); ?>


<div>