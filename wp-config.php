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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          'uYP}IZS#TBV ($ :`H?u?:pA/|!$/l`i1(d1)e8zPnn&}~iBO7yiVG;|ZImaz6^E' );
define( 'SECURE_AUTH_KEY',   '*~ZE#q%Q:*~y(nfYzP6Ye41 CQ>CkY/X57fbI}hE8fZufKS*uZWrbcZlB<l;$Ug=' );
define( 'LOGGED_IN_KEY',     'rz~Ob|$Bxf!S~;0kIFLAl$dGi.%[t}Zo@A0ScDK.`YOgDiBa6o$_r_X@K{KE-rn+' );
define( 'NONCE_KEY',         'CaU#Av{s RK5)-4+Sz@p(W!B7Ta:MUQ_NY]tz>{f=N=}`RHX8qEwQi5Qr9l3;?FX' );
define( 'AUTH_SALT',         'y1M?4Es*FYF>}o1:=lS-}suI&h=3FubaHQ=6Xlx0zrWtOXZjN%5[X/HnY-`D3F_z' );
define( 'SECURE_AUTH_SALT',  'JKrL}{EC?sy2[#sxC]qax=*>c8n!5U/(6hGOR6x.^ ~uuU<WML4Y#Gwd~+|wkX8^' );
define( 'LOGGED_IN_SALT',    '3RK<nSP,h1m +FYR~JUzV0WwMO6so~;yF%R=9/ufhxq$l+GHPiz:hsO=}7}__p3h' );
define( 'NONCE_SALT',        '_hsVArtF#(3n[URo8H{%T=t@8sL+&~:;]Y@,br`E:i@kX4e~K;AreiVXM0FQ-NW;' );
define( 'WP_CACHE_KEY_SALT', 'V)nDDAgmL#eEk.vb4NzxNM1a1SU/EwtQP1]%4.IX^=<[KB^!~Z5OGPf2byTYXfMG' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
