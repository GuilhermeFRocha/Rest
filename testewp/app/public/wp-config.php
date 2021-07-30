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
define('AUTH_KEY',         'xaXkTwciFbR96LsxY4ab6WmqJPrDdrw7iJ3rJq0Qy3Gm8ig7x96iN0/qVzuv2oGh/QMMEQjDIttOy4xTMoBwjQ==');
define('SECURE_AUTH_KEY',  'E/iBLno/kL6MDk4bqKAh3lSouimgU9VZTdRnd28y0SFR6Qs/tAiWS1O4N3ZuNNT2BZmjvNLU+kRtWZpENPP0Eg==');
define('LOGGED_IN_KEY',    'Tot/vjUr1YXZwE5QeWBWhrGRPRkG6aFHqfIX1gBt3fIIF5uLP/PSArhAIGt9ykYQXbq745ymWCrh7ZibyE+51A==');
define('NONCE_KEY',        '8K8uZKZ+A2siBG7bjL/ojYNUHl9rFo0icv7OMhfgaVZwczI+hTMgYoBIgpUFf0N1MJMUEnpmHJl4hVBh8CgZjw==');
define('AUTH_SALT',        'H5tfWzbC2D7BWzIM6D/iWgn7apMIYiY9rFp7QV1agPGrELQH4NyX07xVyfsK+/CEjqoQzS1N7lSbs6z9gaMThQ==');
define('SECURE_AUTH_SALT', 'oInRW8zeV6uYV+4XyL/075lYDDJgl2UIh3Abw6OwvpwWLT/BSnpj+R5mB+/xv9qQcwpJU7OH/FQ/KG1tW3on3w==');
define('LOGGED_IN_SALT',   'NczjMYziuPBF6gNDdpAmPECvt+LO91sRLDFYN7ywUSM0Nq26B5IH+qK2263u8xfi1489skY9NgWE12Vt/6lX+Q==');
define('NONCE_SALT',       'gsGNbfvR5XTaeSUO1Hw7xJ/YvBrWMenYT1jeYg+DNVBbZFZmHuYxANnxbB1iTp7MOT3Hl08UEqoy26XQ3f5XOw==');

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
