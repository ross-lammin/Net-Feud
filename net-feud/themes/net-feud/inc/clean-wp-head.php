<?php
/**
 * Clean up the WordPress core custom header feature.
 *
 *	#1 removes the “generator” meta tag from the document header (we definitely don’t need to let the world know that we are using WordPress).
 *
 *  #2 removes the “wlwmanifest” link. wlwmanifest.xml is the resource file needed to enable support for Windows Live Writer. Nobody on Earth needs that. Note that this command simply removes the link, if you want to completely disable the functionality you need to deny access to the file /wp-includes/wlwmanifest.xml probably from your .htaccess (but that’s not strictly needed).
 *
 * #3 The RSD is an API to edit your blog from external services and clients. If you edit your blog exclusively from the WP admin console, you don’t need this.
 *
 * #4 “wp_shortlink_wp_head” adds a “shortlink” into your document head that will look like http://example.com/?p=ID. No need, thanks.
 *
 * #5 Removes a link to the next and previous post from the document header. This could be theoretically beneficial, but to my experience it introduces more problems than it solves. Please note that this has nothing to deal with the “next/previous” post that you may want to add at the end of each post.
 *
 * #6 Removes the generator name from the RSS feeds.
 *
 * #7 Removes the administrator’s bar and also the associated CSS styles.
 *
 * #8 Removes WP 4.2 emoji styles and JS.
 *
 * @package first10
 */

/**
 * Clean up the wp_head() by removing unecessary bloat.
 */
function f10_clean_up_wp_head() {
	remove_action( 'wp_head', 'wp_generator' );                			// #1
	remove_action( 'wp_head', 'wlwmanifest_link' );            			// #2
	remove_action( 'wp_head', 'rsd_link' );                    			// #3
	remove_action( 'wp_head', 'wp_shortlink_wp_head' );        			// #4

	remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10 );	// #5

	add_filter( 'the_generator', '__return_false' );            		// #6
	// add_filter( 'show_admin_bar','__return_false' );            		// #7
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );  	// #8
	remove_action( 'wp_print_styles', 'print_emoji_styles' );			// #8
}
add_action( 'after_setup_theme', 'f10_clean_up_wp_head' );
