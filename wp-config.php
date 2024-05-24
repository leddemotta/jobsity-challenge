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
define( 'AUTH_KEY',          'H=iVj;sB-00V J^5M4Ai)x&B1x$@rP&YT7AOsTqErh.RTF.A0{R5A>}N_pa1X$ZX' );
define( 'SECURE_AUTH_KEY',   '1T}!k+nAsMORXpgnSJvOrn+S+*/K)Gi<?)hg(o|~-} !L?dq9JV3j3%PCCZ~dl`~' );
define( 'LOGGED_IN_KEY',     '_N-<{d+/9}Tf@}7Uyp@ZFrS]&Q<Ifb#~@:u/_VR)4~,S&IsYm=I.CjO>3B;?e<za' );
define( 'NONCE_KEY',         'VH^#m(q)Ub/*@JR,Dw10yW{T4G>;vU,dub$DwLK*9i=OqzimD]XFpSFC,@s3Q7Py' );
define( 'AUTH_SALT',         '#i;@?5QQfvJHC+WsuT7Z~|]A}64tpoY~+;[%&yKO~{qYE$gA2D% #*Nw/qR9#uDR' );
define( 'SECURE_AUTH_SALT',  '$<wfrm&b1-M&2h>Ts)f!K;HB9w0._PKmUL_xB(!PpA_odP[!OVXIyFO|[orJ Tlx' );
define( 'LOGGED_IN_SALT',    '^+tM Gj!~(xVxo/0>Z-6aj&K#iFZE*MADRw]{`c p4@PX]Z8d&s/gHv!+-2L?Bv4' );
define( 'NONCE_SALT',        '9` 56q@)ax,/2+Ief2~[OLMY=(WH}T>$S--J;0(7(2]UU9@s}0xg(@rN:.[;zk@f' );
define( 'WP_CACHE_KEY_SALT', 'NDfC7YQ+7|O<CEhOm-yERAToT{iqgK;J6q#mCZ=br}NG^ K{,VQiT{^/}oN.i`iq' );


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
