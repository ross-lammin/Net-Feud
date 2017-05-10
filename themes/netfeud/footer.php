<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', '_s' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', '_s' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', '_s' ), '_s', '<a href="https://automattic.com/" rel="designer">Automattic</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>



<footer>

			<div class="footer-col-1">
				<img class="logo" src="/library/img/logo.png">
				<div class="footer-social-media"><p>social media</p></div>
			</div>

			<div >
				<ul class="footer-nav">
					<li class="footer-nav-items"><h1>Catagories</h1></li>
					<li class="footer-nav-items"><h1>Leaderboards</h1></li>
					<li class="footer-nav-items"><h1>Events</h1></li>
					<li class="footer-nav-items"><h1>Contact</h1></li>
				</ul>
				<div class="footer-description"><p>description about site</p></div>
				<div class="legal-bits"><p><?php echo 'Net-Feud &copy;  All Rights Reserved ' . date('Y') ?></p></div>
			</div>
		
		</footer>

		<script src="https://code.jquery.com/jquery-3.2.1.js"
  				integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  				crossorigin="anonymous">
  		</script>
		<script type="text/javascript" src=" <?php echo get_template_directory_uri(); ?>/library/js/carousel.js"></script>
		<script type="text/javascript" src=" <?php echo get_template_directory_uri(); ?>/library/js/menu.js"></script>
	




</body>
</html>
