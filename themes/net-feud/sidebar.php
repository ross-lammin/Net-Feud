<?php
/**
<<<<<<< HEAD
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package first10
=======
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package net-feud
>>>>>>> release/rc-1.0.0
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<<<<<<< HEAD
<aside id="secondary" class="widget-area" role="complementary">
=======
<aside id="secondary" class="widget-area">
>>>>>>> release/rc-1.0.0
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->
