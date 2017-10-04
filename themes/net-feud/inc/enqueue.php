<?php
/**
 * Enqueue scripts and styles.
 *
 * @package first10
 */

/**
 * Enqueue css and js.
 */
function f10_scripts() {
	wp_enqueue_style( 'google-font', "https://fonts.googleapis.com/css?family=New+Rocker|Roboto:400,400i,700", array(), '0.0.0', 'all' );

	wp_enqueue_style( 'main-css', get_template_directory_uri() . '/assets/css/master.min.css', array(), '0.0.0', 'all' );

	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/js/master.min.js', array(), '', 'true' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'f10_scripts' );
