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



<footer>

			<div class="footer-col-1">
				<a href="http://netfeud.dev/"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.png"></a>
				<div class="footer-social-media"><p>social media</p></div>
			</div>

			<div >
				<ul class="footer-nav">
					<a href="http://netfeud.dev/"><li class="footer-nav-items"><h1>Home</h1></li></a>
					<a href="http://netfeud.dev/?page_id=18"><li class="footer-nav-items"><h1>Catagories</h1></li></a>
					<a href="http://netfeud.dev/?page_id=30"><li class="footer-nav-items"><h1>Events</h1></li></a>
					<a href="http://netfeud.dev/?page_id=20"><li class="footer-nav-items"><h1>Contact</h1></li></a>
				</ul>
				<div class="footer-description"><p>description about site</p></div>
				<div class="legal-bits"><p><?php echo 'Net-Feud &copy;  All Rights Reserved ' . date('Y') ?></p></div>
			</div>
		
		</footer>
	

<?php wp_footer() ?>


</body>
</html>
