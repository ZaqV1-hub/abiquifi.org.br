<?php
define( 'WP_CACHE', false ); // Added by AccelerateWP

define('WP_MEMORY_LIMIT', '256M');
define('WP_MAX_MEMORY_LIMIT', '512M');

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'abc_teste' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'starcraft22(' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'f7q9JOjxcsVzYLTJkoX3V3LGGIdsvw4jKjjj4s89AOcPmPXbbx9vM1C8yazABP5B');
define('SECURE_AUTH_KEY',  'a6e1ebuNdV7wnrXAaq2QRtXEuh211Xk9BerhVNjBEqW7Tvn5F0P8fC1fofOLlMp7');
define('LOGGED_IN_KEY',    'gSLNQwcsoXDtsbl6icgIyJ44vmL3b742g8VXgIiu2WcijZHFCj2CreNrRXHm1nQN');
define('NONCE_KEY',        '30apyIbCX09Sa0iQiKPGeCb5PkCWc60FbdIMAt26w4Bs8OU918xxHnwR70UZsZol');
define('AUTH_SALT',        'yehFPucgLEmCac29RmduJhMJp0nr06xWYSz0nWXKn6meqIqdDwglMk6rFXkBYeY9');
define('SECURE_AUTH_SALT', 'jz6THN7g3CAMR6h5YdVD2GZuuiLIpischyWO07EW3LELPvYVp0ArX1iyxVwH4eUB');
define('LOGGED_IN_SALT',   '6iLWBUNReu6xL6CRhwb1ql57yhN3ynAMXj4V6y1ngf60EHC3wKvO5VpeBK9p05iM');
define('NONCE_SALT',       '9wsnZeEYf5qXoVPcJtebz7QbC7o8CE09Jr4fWE2zglt4vjVEIJsul4Hy75PRvXaW');

/**
 * Other customizations.
 */
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'xjzq_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);

/* Add any custom values between this line and the "stop editing" line. */

// Force canonical site URL (prevents old domain from persisting).
define('WP_HOME', 'https://abiquifi.questione.ai');
define('WP_SITEURL', 'https://abiquifi.questione.ai');

// Trust ngrok/IIS forwarded proto so WordPress doesn't force-redirect.
if (!empty($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
	$_SERVER['SERVER_PORT'] = 443;
}

if (!empty($_SERVER['HTTP_HOST'])) {
	$scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
	if (!defined('WP_HOME')) {
		define('WP_HOME', $scheme . '://' . $_SERVER['HTTP_HOST']);
	}
	if (!defined('WP_SITEURL')) {
		define('WP_SITEURL', $scheme . '://' . $_SERVER['HTTP_HOST']);
	}
}



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
