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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_portfolio' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '0?YuaF,jQQW{uQj3.JB`_ww4RVM]b/43r PvI(hJgP2{ZAE S_UN&m;B pw0]-oY' );
define( 'SECURE_AUTH_KEY',  '6p[R1=~0e3rp+cHc.0kQ0]=0}/mo!>5wD7@_cU{n>(5<HO#kv/oLX3[^|^Q8yI}R' );
define( 'LOGGED_IN_KEY',    't(KWaW%R2~Tzs9}Xd2Q$H4PZjGxxGVk8>#c9; ~v0.#(+3Jp6qk1.l@KJ>(i?@Pq' );
define( 'NONCE_KEY',        'rFN?+XMNll?)&=N{K0ICDL G MFOk/beV*+nK=C5>RJN>iisRF~,E*!cv;yto[eJ' );
define( 'AUTH_SALT',        'd-Wg&/.X+r.[),E_d/3OZ$)|j >p3wE;pGK;&?6aeV>Upj#B4e*7r@/74Bx~[N,;' );
define( 'SECURE_AUTH_SALT', ';5ZeIB!w/%PHq7}m14GZ222fM@_sQ9Kox^k:?pUG$!1)<HtXLnr.!~F1.pUWR[Fw' );
define( 'LOGGED_IN_SALT',   '~a0&1ZwQnV-/r~P_yRf7!xGk2W}=lbLj0%a-4q[%0*36uY`_c?f~HM#PJq8-I<#{' );
define( 'NONCE_SALT',       'ma<*CxMkY0 4Wnm1Wag$>|Fdw|[[TK(*D%(yTvB|m;G`rM).V4~)wB 4A*%>bgAe' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
