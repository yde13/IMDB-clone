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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         'hj+r1hN0ADh8YsrA6p9rDtlItoAaA0xtOfJXsHQkpxKjOZHRzGcsIYxH+uG8ZURxGxHl46prvLgMDHeO4KhtCw==');
define('SECURE_AUTH_KEY',  'UUV8BEO5dmyzG6JhsaJSZcWTLZ23rWLCeiux9yhsUoagJerJRbw0EoK1d5zie6mHCT3driRSuQXOQakkx+c9eA==');
define('LOGGED_IN_KEY',    'bx31EMV7hvWmkoCXd0z/+Xk7W++feGtKD4WnNrhsiUu8Y1yfvZ0woPtEi5f6DLHhM271MDZsU326QEB6bxDBiw==');
define('NONCE_KEY',        'sH156ZSZTLflSL+NsQOR0K+ST8RV7900kcGV1elgFs6aukOME0+0dXSGWJw09e1YIzQfDfV4FnhM0mfFmI48xA==');
define('AUTH_SALT',        'uTyMUnTLssWrk2Lss0WZOqc6uyIgF/He7HxUdoWhrcf4WttNuTN6MgovIPAgQeyV9hF6cIeQtpOJPmfh1Hzfwg==');
define('SECURE_AUTH_SALT', '9ZWqxKBGNGgr4IK/onycI2aZO4OyfVAeLR1dEcOfUIjlFQ0BGYFcw1Q0hBB6YLaRoSxorMYhfaw/jam23p1kGw==');
define('LOGGED_IN_SALT',   'eHhrw8ASiXl7kedyY606zJFTY/fQMwFkUNo2Z8aWHaHjJYO2T+QiEyuO6/FGdgVqbJ6j9JEt9czSzs6cjfLsSg==');
define('NONCE_SALT',       '2CH26bJVUDYuz+wQEgO4bx3KFxLyWBcEtRxmwUvvM7sgNsY9MSd66eDschY25QrfYjhy1QnQiHdvX3WEn9PgOQ==');

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
