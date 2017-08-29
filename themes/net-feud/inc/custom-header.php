<?php
/**
<<<<<<< HEAD
 * Sample implementation of the Custom Header feature.
 *
 * @package first10
=======
 * Sample implementation of the Custom Header feature
 *
 * You can add an optional custom header image to header.php like so ...
 *
	<?php the_header_image_tag(); ?>
 *
 * @link https://developer.wordpress.org/themes/functionality/custom-headers/
 *
 * @package net-feud
>>>>>>> release/rc-1.0.0
 */

/**
 * Set up the WordPress core custom header feature.
 *
<<<<<<< HEAD
 * @uses f10_header_style()
 */
function f10_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'f10_custom_header_args', array(
=======
 * @uses net_feud_header_style()
 */
function net_feud_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'net_feud_custom_header_args', array(
>>>>>>> release/rc-1.0.0
		'default-image'          => '',
		'default-text-color'     => '000000',
		'width'                  => 1000,
		'height'                 => 250,
		'flex-height'            => true,
<<<<<<< HEAD
		'wp-head-callback'       => 'f10_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'f10_custom_header_setup' );

if ( ! function_exists( 'f10_header_style' ) ) :
	/**
	 * Styles the header image and text displayed on the blog.
	 *
	 * @see f10_custom_header_setup().
	 */
	function f10_header_style() {
=======
		'wp-head-callback'       => 'net_feud_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'net_feud_custom_header_setup' );

if ( ! function_exists( 'net_feud_header_style' ) ) :
	/**
	 * Styles the header image and text displayed on the blog.
	 *
	 * @see net_feud_custom_header_setup().
	 */
	function net_feud_header_style() {
>>>>>>> release/rc-1.0.0
		$header_text_color = get_header_textcolor();

		/*
		 * If no custom options for text are set, let's bail.
<<<<<<< HEAD
		 * get_header_textcolor() options: Any hex value, 'blank' to hide text. Default: HEADER_TEXTCOLOR.
		 */
		if ( HEADER_TEXTCOLOR === $header_text_color ) {
=======
		 * get_header_textcolor() options: Any hex value, 'blank' to hide text. Default: add_theme_support( 'custom-header' ).
		 */
		if ( get_theme_support( 'custom-header', 'default-text-color' ) === $header_text_color ) {
>>>>>>> release/rc-1.0.0
			return;
		}

		// If we get this far, we have custom styles. Let's do this.
		?>
		<style type="text/css">
		<?php
		// Has the text been hidden?
		if ( ! display_header_text() ) :
<<<<<<< HEAD
	?>
		.site-title,
		.site-description {
			position: absolute;
			clip: rect(1px, 1px, 1px, 1px);
		}
	<?php
		// If the user has set a custom color for the text use that.
		else :
	?>
		.site-title a,
		.site-description {
			color: #<?php echo esc_attr( $header_text_color ); ?>;
		}
	<?php endif; ?>
	</style>
	<?php
=======
		?>
			.site-title,
			.site-description {
				position: absolute;
				clip: rect(1px, 1px, 1px, 1px);
			}
		<?php
			// If the user has set a custom color for the text use that.
			else :
		?>
			.site-title a,
			.site-description {
				color: #<?php echo esc_attr( $header_text_color ); ?>;
			}
		<?php endif; ?>
		</style>
		<?php
>>>>>>> release/rc-1.0.0
	}
endif;
