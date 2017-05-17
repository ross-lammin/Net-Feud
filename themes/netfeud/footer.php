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
	<ul class="footer-nav">
		<a href="http://netfeud.dev/"><li class="footer-nav-items"><h1>Home</h1></li></a>
		<a href="http://netfeud.dev/?page_id=18"><li class="footer-nav-items"><h1>Catagories</h1></li></a>
		<a href="http://netfeud.dev/?page_id=30"><li class="footer-nav-items"><h1>Events</h1></li></a>
		<a href="http://netfeud.dev/?page_id=20"><li class="footer-nav-items"><h1>Contact</h1></li></a>
	</ul>
	<p class="footer-description">description about site</p>
	<img class="facebook-icon" src="<?php echo get_template_directory_uri(); ?>/library/img/facebook-icon.png">
	<p class="legal-bits"><?php echo 'Net-Feud &copy;  All Rights Reserved ' . date('Y') ?></p>
</footer>
	

<?php wp_footer() ?>


</body>
</html>
