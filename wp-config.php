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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'everfit' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'ls1VcFj us*q#mI8H5j%)YXI_NA/Vr%NqsHnd(5GzX*S~$Z,-q:?2-mb.>]|UV%m' );
define( 'SECURE_AUTH_KEY',  'Z>9ai&~Le?y+(wQqX4k4n{uG2X!K#I9(KMztaUQW8<m76Qk[)<pK[,2WG@vGDb?;' );
define( 'LOGGED_IN_KEY',    ',?fv-ptI]2DE?gLj%!_}LgoVi^ROdq~UpW$-_Yn*,T:zv[bL}r;FMFeWgun#2O.W' );
define( 'NONCE_KEY',        '[_09$N,u> Ve>s7{PGXe}JBJ_]n(KRTt5o8`+!&_kteuFS9,#m.y*H*{9aLa5>N~' );
define( 'AUTH_SALT',        ',$g,=E|2RnF]nuJh2EF,]cex.g0UK@#CQhr7rM>sWVOFWO+7]`%W`(d?0uT|)Uh&' );
define( 'SECURE_AUTH_SALT', ']w~hb}g|Q[10x#CVyfFaMY&LbbK#lfC]I|</+S_mt|Tsqj_x%d)=&ornp5vNJ1Te' );
define( 'LOGGED_IN_SALT',   'Uu1K^.osw/2RVwK2A?ud>&?o8o7kmhfMtv4wUz,dtRCAfB0>.SXW<2+.k0YvEZ)z' );
define( 'NONCE_SALT',       'VF?f/_B{z,J>APB>[*M2QjOocm]]QK^eV6Yf+T25?*]bD-g_1,gG7ay<ZlKOZ9a.' );

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
