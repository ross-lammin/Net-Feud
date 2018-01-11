<?php 
/*
*	This is the custom setting for buddypress netfeud
*/


// Blocks pages from users who aren't logged in.
	function bp_redirect_pages() {
	 // Determines whether a user is logged in. If not, user is re-directed to log-in page when trying to access defined BP pages.
	 if ( !is_user_logged_in() && ( bp_is_group_forum() || bp_is_forums_component() || bp_is_members_component() || bp_is_groups_component() || bp_is_profile_component() || bp_is_activity_component() || bp_is_user() || bp_is_user_profile() ) ) {
	 wp_redirect( home_url() . '/signup/' );
	 exit;
	 }
	}
	add_action( 'template_redirect', 'bp_redirect_pages' );


/**
 * Reorder BuddyPress profile tabs/navigation.
 */
function buddydev_reorder_buddypress_profile_tabs() {
    $nav = buddypress()->members->nav;
 
    // it's a map of nav items for user profile.
    // mapping component slug to their position.
    $nav_items = array(
    		'activity' => 10,
    		'profile'  => 20,
        'settings' => 30,
        'messages' => 40,
        'friends'  => 50
      );
 
    foreach ( $nav_items as $nav_item => $position ) {
        $nav->edit_nav( array( 'position' => $position ), $nav_item );
    }
}
add_action( 'bp_setup_nav', 'buddydev_reorder_buddypress_profile_tabs', 999 );