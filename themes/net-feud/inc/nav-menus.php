<?php
/**
 * Navigation Menus
 *
 * This theme using nav_menus in the following locations;
 * 'Primary' - used in header.php
 *
 * @package first10
 */

/**
 * Register the navigation locations.
 */
register_nav_menus( array(
	'primary' => esc_html__( 'Primary' ),
) );
