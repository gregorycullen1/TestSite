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

// ** MySQL settings ** //
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
define('AUTH_KEY',         'kT/xGg+r5J2B6NLpFocKUE3xk58EU0s8DgU11DUkepxwwfQrZyaT4ZwhAMKHN87mkPEusuY8cf7VishKRPgOzg==');
define('SECURE_AUTH_KEY',  'NFy2AhjiCBnoC//Lcs0TJXWej1hYtPg3MpPc8lqiJS8AdLK+r0SMqh4yCkIKeWDMdF3VYvLCi0jfwa1xYVqx8A==');
define('LOGGED_IN_KEY',    'pAa2LKagHQNBCKrvutSm7GQwfULsG8m8j4G1raaLLnrBDA5JfjTlZmreqisC8421dF9X5nWJL9WWYnorUTwb5Q==');
define('NONCE_KEY',        'zkxotq9PTcX7ChSC0lU+g/gmpi9fboWgyDLCozAfWUSvIug/tP+S1Id0eK1K8R0reJGxDgbhgUyPxDOwQG6qSg==');
define('AUTH_SALT',        'AsAL+ZFWOMDisLpBDpac2q/7UWhRzPqr7wsJX9DfeETUf7NR754R9feP3MeG0RXW8do7d+qQzhTZIdft5ImT4Q==');
define('SECURE_AUTH_SALT', '+KskPRpGNdieHKfGin/NIC27u3IVXJgKIOXyYq6tva0HRbF28fu0v55Lq3xBAkIcmpiHtd53Grd0zugou9Awxg==');
define('LOGGED_IN_SALT',   'm1JYhhFXzkVnGOzSXkLlyEd2thW2V3moZ088j/nL1iItUFwlnfPuYrvgCzkY6Ts8K0QmibgD2pjLNyyoz3CpIA==');
define('NONCE_SALT',       'HPmVoSEfSkWWsrofY1SdQLqbb90is9L7NhGu6NmwmPLZ7K/9KoTs9hkpAG7RdG/3ex2YLEQIfnJWTT43YLeZQQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
