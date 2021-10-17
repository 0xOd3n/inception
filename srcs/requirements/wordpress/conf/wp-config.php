<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', ${MYSQL_DATABASE} );

/** MySQL database username */
define( 'DB_USER', ${MYSQL_USER} );

/** MySQL database password */
define( 'DB_PASSWORD', ${MYSQL_PASSWORD} );

/** MySQL hostname */
define( 'DB_HOST', ${DB_HOST} );

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
define('AUTH_KEY',         '66qqj!67XKQj^+{p}@lr?3.&NX!$K+v<8dFDl-f /+R1cXFlrrnmQW0-pm-{C*EL');
define('SECURE_AUTH_KEY',  'kZ%/^d28U8_D1t948IVxOPQZ+Lrs8j cl$~zcm{,*f =WlusW%;^i2e-z[N.<gLd');
define('LOGGED_IN_KEY',    'UdDBUqcVp$kb.oev?;+PN3%2*KG$&Ha4i8vi.7%h++uQ{7A,K.zo(;W2^>nu7eB:');
define('NONCE_KEY',        '%-1de0/H-g1^x i!u&FX0ZlqS1pVmy*kH)Wo~QmlIWc}d$#g+/&$/M|xf~M.aG2*');
define('AUTH_SALT',        '0uB0[X2BS4#dI{g->pgL|y4.jQLjXObXqOWyp#9aaI+~LJC||`,N)4K|&Bf4guZi');
define('SECURE_AUTH_SALT', '36L#{Wle9/q+E*^h[5u*B-QR%^?|mkL/#)<[om@,*uN.b5~Fe:}U|t^uJ~-es}3+');
define('LOGGED_IN_SALT',   'A}ubNdx;6P_$:KEfkZNIX1NN4=7-hm_jF=vgk_H<KP11)sMy7?RyxV2HurF3k`+}');
define('NONCE_SALT',       'z_Z_;9P9opE}c6T&~%P&q`R|xYW18ju|N4Uy)OMlkHzQ~58YOi[V(dLK-|BKbg|2');

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';