<?php
/**
<<<<<<< HEAD
 * The template for displaying the footer.
=======
 * The template for displaying the footer
>>>>>>> release/rc-1.0.0
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
<<<<<<< HEAD
 * @package first10
=======
 * @package net-feud
>>>>>>> release/rc-1.0.0
 */

?>

	</div><!-- #content -->

<<<<<<< HEAD
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'first10' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'first10' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'first10' ), 'first10', '<a href="http://first10.co.uk/" rel="designer">First 10</a>' ); ?>
=======
	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'net-feud' ) ); ?>"><?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'net-feud' ), 'WordPress' );
			?></a>
			<span class="sep"> | </span>
			<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'net-feud' ), 'net-feud', '<a href="http://underscores.me/">Underscores.me</a>' );
			?>
>>>>>>> release/rc-1.0.0
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
