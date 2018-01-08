<?php
/**
 * Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package first10
 */

 /*
 * Disallow admin far for all users while viewing the site.
 */
show_admin_bar(false);

if ( ! function_exists( 'f10_theme_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function f10_theme_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on first10, use a find and replace
		 * to change 'first10' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'first10', get_template_directory() . '/languages' );
		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );
		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );
		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );
			/*
			 * Enable support for Post Formats.
			 * See https://developer.wordpress.org/themes/functionality/post-formats/
			 */
			add_theme_support( 'post-formats', array(
				'aside',
				'image',
				'video',
				'quote',
				'link',
			) );
			// Set up the WordPress core custom background feature.
			add_theme_support( 'custom-background', apply_filters( 'f10_custom_background_args', array(
				'default-color' => 'ffffff',
				'default-image' => '',
			) ) );
	}
endif;
add_action( 'after_setup_theme', 'f10_theme_setup' );
/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function f10_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'f10_content_width', 640 );
}
add_action( 'after_setup_theme', 'f10_content_width', 0 );
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function f10_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'first10' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'first10' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'f10_widgets_init' );
/**
 * Add ACF actions and filters;
 */
require get_template_directory() . '/inc/acf.php';
/**
 * Register our nav_menus.
 */
require get_template_directory() . '/inc/nav-menus.php';
/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';
/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';
/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';
/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';
/**
 * Clean up wp_head();
 */
require get_template_directory() . '/inc/clean-wp-head.php';
/**
 * Add Gravity Forms actions and filters;
 */
require get_template_directory() . '/inc/gravityforms.php';
/**
 * Enqueue scripts & styles;
 */
require get_template_directory() . '/inc/enqueue.php';
/**
 * Shortcodes
 */
require get_template_directory() . '/inc/shortcodes.php';
/**
 * My arcade api
 */
require get_template_directory() . '/inc/myarcade_api.php';
