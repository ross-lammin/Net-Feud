<?php
if ( file_exists( dirname( __FILE__ ) . '/wp/wp-config-local.php' ) ) {
	include( dirname( __FILE__ ) . '/wp/wp-config-local.php' );
}
/** The name of the database for WordPress. */
if ( ! defined( 'DB_NAME' ) ) {
	define( 'DB_NAME', 'wordpress' );
}
/** MySQL database user name. */
if ( ! defined( 'DB_USER' ) ) {
	define( 'DB_USER', 'wordpress' );
}
/** MySQL database password. */
if ( ! defined( 'DB_PASSWORD' ) ) {
	define( 'DB_PASSWORD', 'wordpress' );
}
/** MySQL host name. */
if ( ! defined( 'DB_HOST' ) ) {
	define( 'DB_HOST', 'database' );
}
/** WordPress localized language. Defaults to 'en_EN'. */
if ( ! defined( 'WPLANG' ) ) {
	define( 'WPLANG', 'en' );
}
/** WordPress debugging mode. */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', true );
}
/** WordPress memory limit. Default: 40M. Multi site: 64M. Default max.: 256M. */
define( 'WP_MEMORY_LIMIT', '256M' );
/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );
/** The database collate type. */
define( 'DB_COLLATE', '' );
/** Authentication unique keys and salts. */
define( 'AUTH_KEY', '' );
define( 'SECURE_AUTH_KEY', '' );
define( 'LOGGED_IN_KEY', '' );
define( 'NONCE_KEY', '' );
define( 'AUTH_SALT', '' );
define( 'SECURE_AUTH_SALT', '' );
define( 'LOGGED_IN_SALT', '' );
define( 'NONCE_SALT', '' );
/** WordPress database table prefix. */
$table_prefix = 'wp_';

/** Disallow anything that creates, deletes, or updates core, plugin, or theme files. Files in uploads are excepted. */
if ( ! defined( 'DISALLOW_FILE_MODS' ) ) {
	define( 'DISALLOW_FILE_MODS', true );
}
/** Defines functionality related WordPress constants. */
if ( ! defined( 'WP_POST_REVISIONS' ) ) {
	define( 'WP_POST_REVISIONS', false );
}
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}
/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
