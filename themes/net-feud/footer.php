<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package first10
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">

			<div class="footer__right-image"></div>
			<div class="footer__information">
				<div class="footer__image--full"></div>

				<nav id="site-navigation" class="main-navigation" role="navigation">		
						<?php wp_nav_menu( array( 'theme_location' => 'footer', 'menu_id' => 'footer-menu' ) ); ?>
				</nav>

				<div class="footer__social-icons">
						<p class="footer__social-icons--facebook">Find us on Facebook</p>
						<p class="footer__social-icons--twitter">Find us on Twitter</p>
				</div>

				<small class="footer__copyright-info">
				<?php 
				if ( date("Y") > 2017 ) {
					echo 
						get_bloginfo()
					. "<sup>&copy</sup> 2017 - " 
					. date("Y") 
					. " | Sitemap | Terms and Conditions";
				} else {

					echo 
						get_bloginfo()
					. "<sup>&copy</sup> 2017 "  
					. " | Sitemap | Terms and Conditions";
				}	
				?>
				</small>

			</div>	
			<div class="footer__left-image"></div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
