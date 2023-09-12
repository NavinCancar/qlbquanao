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
define( 'DB_NAME', 'qlbquanao' );

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
define( 'AUTH_KEY',         'Yrr ZJ!krcoyDpkXdH@%z[6Dq8r,_y#$L$!m[6x:lvl~5b2hsVdgbkK=FJza4uPZ' );
define( 'SECURE_AUTH_KEY',  'VSYy::T?W07-17D([C6#3^7JL= ^,if{)9Q4< dw)Lntvuk ;X<dH6WtW HnY;!Y' );
define( 'LOGGED_IN_KEY',    'hd eN)ah/VuTC{B>,,bNOX(GpkkD0p`qlJTKk}5nfpy^hzkM7<ek[6RCVEn wQ!Z' );
define( 'NONCE_KEY',        'G9,#uW/&@3&9U`-qW+CInS#N:pO!YVs[* t<kW*m-:j9Nx<`8; /|Q#1=`=1}4Jo' );
define( 'AUTH_SALT',        '%5+a8kO] Exc)hoeC@|(=Tz:Aj#m?uAVbNGQ#@gI_&l^T$;JmeSqE<<QV:V@=CT~' );
define( 'SECURE_AUTH_SALT', '1J)#&?iU)8)l5SA9:A:~K=^~5tCARBo(G~c[#yU(_}dW_6kO!F0GRU6[d:!(Odwb' );
define( 'LOGGED_IN_SALT',   ':STn5 BW([u#]K)AHgkNZ~,zn)y;=:,YoRsrD2kbVpTq9:*%NBlT3eVh<o8%{|[~' );
define( 'NONCE_SALT',       '9Wcgo&~<V>0XVp/nAi3>i?G:=j+<fBrqaxBKgnpc<[-iswItF@*|e5qdw{rSMZd|' );

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
