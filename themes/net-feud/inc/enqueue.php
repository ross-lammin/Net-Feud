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
	wp_enqueue_style( 'first10-style', get_template_directory_uri() . '/assets/css/master.css', array(), '0.0.0', 'all' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'f10_scripts' );
