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
define( 'DB_NAME', 'database_name_here' );

/** MySQL database username */
define( 'DB_USER', 'username_here' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password_here' );

/** MySQL hostname */
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
define('AUTH_KEY',         'J+rU?]~Zf4c,e@u3X)z`T0#FgJo^--gHMc*9|5/:V[L!T9-CI,rvB$~@|pUR%Wwn');
define('SECURE_AUTH_KEY',  '>E|_[%#[5u61`rUDriD+[6,qC>med.al|,RF8uR#[``cUi:3s}m|7 mhK|>hx41i');
define('LOGGED_IN_KEY',    '-~0=ftI3$yyKio])>R*$PcSx8sT_qXF`OrmFEOjcQZh~LoD ?gO+kanreJk=`v t');
define('NONCE_KEY',        'eSH5;jN6@IY*@:PY_6<IPGEdo^LS^?Tyo|L0fZUZYjALW]+{{i[MjY{,zz2X| {R');
define('AUTH_SALT',        ',D1~b~5AmCLX/T/p|:=Fx*84pLN=!WyZ1BN.`oLj-xWm?k*@85t;Q!S.hWu6+jk_');
define('SECURE_AUTH_SALT', 'wd#`&k`L*9jws;<XM^f^Gj9?)}[yY?{7rr(NvYujy?I09pjc?}o.yJ1S=_9yrWOD');
define('LOGGED_IN_SALT',   'ZS} R.I*;[-A%14lHA&#C.Tj{a#Ncpt8SA-FWtjqUN<1tQV[hAFir~)0/*mvn_+y');
define('NONCE_SALT',       '=F9j&n/89U|&C4Q*k>%a,ZK-s.#C%!u90T$5P7|ZV$p<f;:aq[V]}9@OR9F;t/Jl');

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