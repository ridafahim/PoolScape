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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'poolsandlandscape' );

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
define( 'AUTH_KEY',         'sQ:(}5s<0(uH^0ZDA9o[0,A_s<E(#Ta<TUWYY<vY)YX;!$j8,;!f!R ^e+>Uj<o8' );
define( 'SECURE_AUTH_KEY',  'oJY%|<d#M?1LM+;=-dtvbv(%M]=mdH#m&ML-w}Deu!A>0<N>/7}sxk[!*[VAU6s4' );
define( 'LOGGED_IN_KEY',    'Plby`H;:asD*a(&t@rG8S}U:&j%i]6I)IvlAKJ/b3*}M!+^6u>Srso]J2G<)E#0L' );
define( 'NONCE_KEY',        'm6I}y7k.{fKT&y UJC#mC!wCB#tTu7O]aAl;;<p.qE)US@8*7@+Cvqz*1ji4Cu*U' );
define( 'AUTH_SALT',        '*6&Yqu[8d6z{yvY=X xVA}U?Bzr(r:]E -7Chz,RlopWFr164lR#:=tj3/<OTbB.' );
define( 'SECURE_AUTH_SALT', '/$4Fi]/PFlab=<6F_x3R0KBL-A+oDh{hLs:=UHp,0u4=jnB)eq|eZeX{gxgI-P#U' );
define( 'LOGGED_IN_SALT',   'v2*$zmM76k%y3[hCr&a<cA7`iAoFcVxpo/iv?rI?%H@~@n_,b#9.W~;*az5);mC0' );
define( 'NONCE_SALT',       '/6<{z+.N^N&X6kN[~>458kFaJ2M3{4k&jM,~rP6uWraCuR<<t8/|lJdC^S&^9=.C' );

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
