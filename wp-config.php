<?php
define( 'WP_CACHE', true ); // Boost Cache Plugin
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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         'HgmD:Tch6u7efC: ed$XMI-8n]jyi>CXc$HT0gYZgB=aJ<ao}ukUx;BZ(g!Vy@y}' );
define( 'SECURE_AUTH_KEY',  '++/T=*LXb+J0`&k?g6@e#=F*[;Z,sQM!8C]&ds{webrcY)W5]5ll)W-:QVa>3vr+' );
define( 'LOGGED_IN_KEY',    'Yaj<S*rd3,HHD^XWK9HiNLivxot+YDnA[WTdSY.q~X=n!IqM;/aH.ESYYC-,:sor' );
define( 'NONCE_KEY',        'D|@1/Z4st^a4xrw&Cms^4PIMPU`wZkY9344pRU..>Lj_}/${Hd_G,s^D>>5 Nr,u' );
define( 'AUTH_SALT',        ' /)sEwT174xx3<jw%#uSH=IrMp!t50 sHbM2^6pg]5HWtko&@H@az9jx_6Jvmx*`' );
define( 'SECURE_AUTH_SALT', '2y-?~>3b2N%N{s[MKHZn%g|@^;5d/I4-od{G>D !%H#z{l/n{O~+.atC+58ODnUl' );
define( 'LOGGED_IN_SALT',   'bNl*[YkySZ]*JNP(o9!CKC@ !s=$9$dYJu1H4&g)rkCRoK);}4zeqZyWdSXF752L' );
define( 'NONCE_SALT',       '3/~CC(?4!)$BS2v=>c|oc._}z2pJfH|[$I9H@fA(EqJ2Y|#5frJ3O/^+dloW4Y()' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
