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
define( 'DB_NAME', 'wp' );

/** MySQL database username */
define( 'DB_USER', 'lokhu' );

/** MySQL database password */
define( 'DB_PASSWORD', 'lokhu@100' );

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
define( 'AUTH_KEY',         'mREavNcES0k&_YdN]3aJ`YtLDCtLY7kAd`mFT5Cddf_8>(2t z-]&P>!9A1;`GG)' );
define( 'SECURE_AUTH_KEY',  'Z76L#URgyaP%I%_((_f^CKM`k:97a21Zbav i@>tKW( Sq~n3xrmr%#jtxMxdVNO' );
define( 'LOGGED_IN_KEY',    '*YVC]H:*t}y[cm`aBpyFs:X#Yz].L_<nsfJ?6rt(Oy4BO/)#0da90V-N9#H)+rbq' );
define( 'NONCE_KEY',        '+<o(BFm-;;hX6X%m%9ZtX&<#-AyDuBF7g4Nz|o;9}Rzhk1;*~DeP>sIXR>3qnv>p' );
define( 'AUTH_SALT',        'x!MmK1|Oy`26>V0bf+M@:8x_O4&->]eA >5gr(.C3V!i/|x(d )_o,qW[/U.@?*T' );
define( 'SECURE_AUTH_SALT', '?d+yUGFuUP))5b~pcYTkR8HSIy:{E8A9vdwc?/cq.F+: ,B-5j!K<Oq<z5-#iC.P' );
define( 'LOGGED_IN_SALT',   'eSDX1)EX3hR?aw S`{)Y:{znc5Q@ZCgbU1##/_NC *SF,W<Io~QK<BIgM@CQ/$xb' );
define( 'NONCE_SALT',       '>q|36bJ@>yJ,__:`$]x<n`OqEPh?Udx?^So(9E=dmsJSB1MOZRRjPsl~galQn@cD' );

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

