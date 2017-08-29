<?php
/**
<<<<<<< HEAD
 * First10 Theme Customizer.
 *
 * @package first10
=======
 * net-feud Theme Customizer
 *
 * @package net-feud
>>>>>>> release/rc-1.0.0
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
<<<<<<< HEAD
function f10_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
}
add_action( 'customize_register', 'f10_customize_register' );
=======
function net_feud_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'net_feud_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'net_feud_customize_partial_blogdescription',
		) );
	}
}
add_action( 'customize_register', 'net_feud_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function net_feud_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function net_feud_customize_partial_blogdescription() {
	bloginfo( 'description' );
}
>>>>>>> release/rc-1.0.0

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
<<<<<<< HEAD
function f10_customize_preview_js() {
	wp_enqueue_script( 'f10_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'f10_customize_preview_js' );
=======
function net_feud_customize_preview_js() {
	wp_enqueue_script( 'net-feud-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'net_feud_customize_preview_js' );
>>>>>>> release/rc-1.0.0
