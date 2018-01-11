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
