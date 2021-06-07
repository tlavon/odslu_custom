<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
if (strstr($_SERVER['SERVER_NAME'], 'odslu.local')) {
	define( 'DB_NAME', 'local' );

	define( 'DB_USER', 'root' );
	
	define( 'DB_PASSWORD', 'root' );
	
	define( 'DB_HOST', 'localhost' );
} else {
	define( 'DB_NAME', 'iamkirst_WPRS5' );

	define( 'DB_USER', 'iamkirst_WPRS5' );
	
	define( 'DB_PASSWORD', 'Godsfavor12$' );
	
	define( 'DB_HOST', 'localhost' );
}



/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'nGthuUFU9CPx8/9DhPRag3ytZ6fbkFL0Evj1y/QOqqn6jtMgg0rS7rT3CEH0MIYM6FD6op5sac8nrzbdFm8ECA==');
define('SECURE_AUTH_KEY',  'xeoqmY+5rTOk53kGKRgWhwiAoDvwzpxJ9nNf3RiNtbT7OyM7Mws9gd3rUOFCJiF3PJwtWtbldPQmy5Gsn+MK1A==');
define('LOGGED_IN_KEY',    'Y+UXjfxv+K5jqIcD1mCn7bZVveIdTSPb3fS9cb0I5CJBJ7NLWQlNqQGWuyfzwErJRxM8G4OvESeHtw14hA21rA==');
define('NONCE_KEY',        'dLZkgAkvAgNjxi49oJ1J6QEj60O4S54Koy9fZByj7h3JpfT+i/S69HcpYQIaOjsMLh0b4A1TPD4PVVnIIrR6tw==');
define('AUTH_SALT',        'VFbK0IKuHqLntMxS8pmnFvSYwSjTJ/YsjTHltcnm3Z+29WoT9q5yyY4/ZO7tIJBfeNmUnF/2SoCjhkpN/PCiOg==');
define('SECURE_AUTH_SALT', 'qX93xfZQWDqhGV8cuh5MheH63JoBPFIeLpt75to7DnTZqpU6uZb2tz0wyGh30HjLFLesyeednt0/ouEQcu3eEQ==');
define('LOGGED_IN_SALT',   'jghv13fpzFH7RO0wQ55BdkkLN22ICRwHwfkOnlxfsdRPPar9PJ/rTJR/ju8ekQ3CyBWiU79PcnCeJZB0kDFpjQ==');
define('NONCE_SALT',       'yWvdYDtrhntj9C4Cc1UxQHV0NoELitJi/fJtEe6a8GZkj166azFMpkzc0jXGVObO8KOsdeNrdJHeBSs74gDP9Q==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
