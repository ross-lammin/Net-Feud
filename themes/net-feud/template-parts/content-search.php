<?php
/**
<<<<<<< HEAD
 * Template part for displaying results in search pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package first10
=======
 * Template part for displaying results in search pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package net-feud
>>>>>>> release/rc-1.0.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
<<<<<<< HEAD
			<?php f10_posted_on(); ?>
=======
			<?php net_feud_posted_on(); ?>
>>>>>>> release/rc-1.0.0
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

	<footer class="entry-footer">
<<<<<<< HEAD
		<?php f10_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
=======
		<?php net_feud_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
>>>>>>> release/rc-1.0.0
