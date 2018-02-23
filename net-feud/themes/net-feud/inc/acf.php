<?php
/**
 * ACF Actions, Filters and Options pages
 *
 * For the full list of available actions visit: https://www.advancedcustomfields.com/resources/#actions
 * and for the full list of available filters visit: https://www.advancedcustomfields.com/resources/#filters
 *
 * Project specific actions/filters should be added here eg. to pre populate an ACF field with dynamic content
 *
 * @package first10
 */

/**
 * Registering Options Pages
 */
if ( function_exists( 'acf_add_options_page' ) ) {

	/**
	 * Title: 		Example Options Page
	 * Description: For demo purposes. Remove on individual projects.
	 */
	// $optionpage_social = acf_add_options_page(array(
	// 'page_title'      => 'Social Settings',
	// 'menu_title'      => 'Social Settings',
	// 'menu_slug'       => 'social-settings',
	// 'capability'      => 'edit_posts',
	// 'redirect'        => false
	// ));
}
