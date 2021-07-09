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
define( 'DB_NAME', 'waizegt' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'CD[nF]9o40%6kJ gKbd2Y8vaT(0^dfO=N`{Y?7oi/)w-[@Ws7=Tq0ybkw%6RQ|>z' );
define( 'SECURE_AUTH_KEY',  'Kk*Cux?[rR1$Y?[E0x2n8==z :xz1gqzK4mTz84;?p2DJBL{axJHoofW ;gg(tXR' );
define( 'LOGGED_IN_KEY',    'mtk$[{ws<Sqed8>rl^r%0CR&[L.P9P|/rKRJ4;**Z0,(d-<E7Q;h>l^;i37;g/H#' );
define( 'NONCE_KEY',        'u1sjM+>:})E3un##X0,]WJ!riRI!>YYK*p?7M*Bu6}c(s[-KSu_A0Tes-KDXvQDW' );
define( 'AUTH_SALT',        '1UAh0G~!|z61X(Ys|21)g!euDNb HFzlF&%PF#sRW}j[l8n3iVp}ehK+y5I13}*X' );
define( 'SECURE_AUTH_SALT', 'f]y`ATWEPx *Vv,#qHk|RpOX%*e]^x~sn!lftQ3XHM0n;)Pu|vP!XUpiTZ2#J:n ' );
define( 'LOGGED_IN_SALT',   'Md?)^F8g;=j` w9K_$B!VMLwnoN/Y#(L5AVL*(M_Lu6~V)OfN,O_EKC`(gJwzY=q' );
define( 'NONCE_SALT',       ';6dGZB;7i4DX@I]O?;QF#l[*4Yn|(ceG PZA?,{^/TexG]9N)y?;kjf5kp%F$GQ=' );

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
