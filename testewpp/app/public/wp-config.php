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
define('AUTH_KEY',         'ExTqagVR1z/hjMKDjpx5QaH3omwgVcUdTQjrvlC6mJefOUxjZXDtLXsifiTXsT7dSfUFPMZhaZxfIHnMrd3NDw==');
define('SECURE_AUTH_KEY',  'y9qrwYJgGPzPw1rYFlZ9Equ+uwbNpMItUMQWVdCIesqzmpJIvGqAEMfIO6zJE7/dVHAb7ri+aBYHW8HEo5yvxQ==');
define('LOGGED_IN_KEY',    'vf/ItUX+v0+cMJvd+j24qWu8nbSLua7Wx+HGLyvmKMLAFVUYpgHDhE2VPN3vudqqUlR45lE434CmP1WYInpsjg==');
define('NONCE_KEY',        'gkZRlq51Q3BCjf5V0aIMfcrv1bF0r48AaJw6CUp7GXOlmkNOpBpwHwA5rYUhJfSj57Qkr1zq9bFRc1RyxebS+w==');
define('AUTH_SALT',        '8EALM4p95VQteXA9AW/b6VXzmeS+De0OXktoHBbrkcFcAddp4gDaifK4bIXO7zZMRnjucr2pd/Wl4/nZ/TnxXw==');
define('SECURE_AUTH_SALT', 'pJ79CJyZto39qJDNhGlX+PPNsg7DJznzjdEY7FFuP42xihzEOicYt93nn34LOi9jHGbMhxcTgkg2oEmU89w9vg==');
define('LOGGED_IN_SALT',   'exEnsKYGDF6D59ZAzm7km2U35l8TW2KhHomwoWMu5n9Q6CQ6chjGDjBbMmoqGlDUC3MhRYk6TjaNpKJKKea4Mw==');
define('NONCE_SALT',       'iJYSypcMYpPfqIWRqEQ0juu1uin2E5GEQSUCri7QtL0iWEa7zTrOvSwzm6DIzPubZ71LZCDbqSv/6e4bOr6vlw==');

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
