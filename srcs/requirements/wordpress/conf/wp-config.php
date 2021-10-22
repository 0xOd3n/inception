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
define( 'DB_NAME', '${MYSQL_DATABASE}' );

/** MySQL database username */
define( 'DB_USER', '${MYSQL_USER}' );

/** MySQL database password */
define( 'DB_PASSWORD', '${MYSQL_PASSWORD}' );

/** MySQL hostname */
define( 'DB_HOST', 'mariadb:3306' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         ';6f|M7U#ncwiE5@4Rq&BFldY(^|D3Y15bx.2CRkL~]#`F_.H>`yM_$qH 8BKm?_+');
define('SECURE_AUTH_KEY',  '$@` 0Vk2:=7P*p_yYxN>m)s1^J`g-3_A?|,oEk?pST2kMP|<>BqzpCK~Z<KosXTq');
define('LOGGED_IN_KEY',    '|d+8eioi[QU:/7}*L}%478?EI+%0&#ZF:tv1/{0y|;6K-C(m]:Zy$#J?w+[xx.?w');
define('NONCE_KEY',        '$xSeLk:sc15*UGCc6yWs_p}+ah_I9RTpj.foh0[4H|q3I)-E>o ^hDxm/;~uzLwK');
define('AUTH_SALT',        'gS_Hr,=c-O-[5^v^peS4(0*E6,ui(G+UTu(>&Obl+Nlj/c:nw;_>L]}L6*`h5?L|');
define('SECURE_AUTH_SALT', '>h{^.FP~@RS?%}v1.?8f/C_&(ZeD5 5Nn>uCxxNB1C-Q(D+VnzM6 5L#?YDY{5C<');
define('LOGGED_IN_SALT',   '^!7YP?9NczQ/j~Pd2Bc1@C:HY3J;`{N{rz/qcN6Vu+MY^pTPS!`+cZ/{`9BC`|v&');
define('NONCE_SALT',       ' LG!^[V;-lq]NF3JdP3=H18z>&<UEZIWt^ge5{^EkPRsXwK<[ly,!KYlX{sl|r*i');

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