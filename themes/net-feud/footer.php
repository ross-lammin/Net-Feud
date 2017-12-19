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

			<div class="footer__right--container">
				<div class="footer__right-image"></div>
			</div>
			<div class="footer__information">
				<div class="footer__image--full"></div>

				<nav id="site-navigation" class="main-navigation" role="navigation">		
						<?php wp_nav_menu( array( 'theme_location' => 'footer', 'menu_id' => 'footer-menu' ) ); ?>
				</nav>

				<div class="footer__social-icon--container">
					<div class="social-icon__container">
						<div title="Facebook" class="social-icon--facebook"></div>
						<div title="Twitter" class="social-icon--twitter"></div>
						<div title="Google+" class="social-icon--google"></div>
						<div title="Youtube" class="social-icon--youtube"></div>
						<div title="snapchat" class="social-icon--snapchat"></div>
					</div>
				</div>

				<small class="footer__copyright-info">
				<?php 

				if ( date("Y") > 2017 ) {

					echo get_bloginfo()
					. "<sup>&copy;</sup> 2017 - " 
					. date("Y") 
					. " | Sitemap | Terms and Conditions";

				} else {

					echo get_bloginfo()
					. "<sup>&copy;</sup> 2017 "  
					. " | Sitemap | Terms and Conditions";

				}	
				?>
				</small>

			</div>	

			<div class="footer__left--container">
				<div class="footer__left-image"></div>
			</div>

		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>