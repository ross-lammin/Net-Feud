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
function register_my_menus() {
  register_nav_menus(
    array(
      'primary' => __( 'Logged-out' ),
      'secondary' => __( 'Logged-in' ),
      'footer' => __( 'Footer' )
    )
  );
}
 add_action( 'init', 'register_my_menus' );

