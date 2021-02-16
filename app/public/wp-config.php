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
define('AUTH_KEY',         '6WGCbeBxug2V/uKCC5NL22tpioa5Y5f9jLPBcXDoDNbfqgwPSMTHp7qfGmt6KziYlEJg1SGmTng2Zls1RWnLNw==');
define('SECURE_AUTH_KEY',  'phQmeP9qCwKwlxtT6RLs2OvdXR2gFFadUZ1cK8EPs+cuiEEw+6Zj0xQd+yrGlfCsCVOf8W1roqy+nDvTAIE9yg==');
define('LOGGED_IN_KEY',    'QvINCPtWq4p06OCYYvIW1LP8z1aNQ3zRA6jgk2MPKkyAw9xVX+uzkB3APyn86N3Bw4MOF7Z1Xz1oBhW98wSJCQ==');
define('NONCE_KEY',        'F01pkX0OrT9tZ01rVrCQkjdRXGLpl/cNIyNHKEjUApasFoZ1/BSX0CiNhoHLNKrPIcHbUuQxpxtXEe6oXWRA3A==');
define('AUTH_SALT',        'Od4YNizibyqn4+KuymXrGQSTN2IXSt7seWdqwzMj6389PEPAj0usVy8IODCpTj3vZeBjyOJFXmVxX05wz04PMw==');
define('SECURE_AUTH_SALT', 'QA163i4jxvK9N9y5g+X6sLxt5m/ut5NwL9s4oaZ4dWpYcgvndPQyMSJQhc+NElaFXNj9kuJBjwWsZgGK+ilNRw==');
define('LOGGED_IN_SALT',   'TcrjQ9eQJwbZ4do9FdKGWd3mC8XEELjw4Qv2y/Ka/PZft4bNxWEuUGmqdgG2HqQV0Gl9u1gmaqj5w9ABt+F20w==');
define('NONCE_SALT',       'ehG6cLpe/ApI/4CHlpBdGtnt1VEFvlH0EsziNfQvb8ZVxTiToV0RaFle8tGNMKsLCMfioQ7OM91e+6xWtpkUyA==');

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
