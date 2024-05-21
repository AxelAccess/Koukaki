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
define( 'AUTH_KEY',          'Ty}]Qc<*4pt@So@TRN0f+58H;~I`[37r3.lKU!UNBe.bGiGtPV};7[%9ECfn-_Zu' );
define( 'SECURE_AUTH_KEY',   'bF_DzH;&cyO_t7L<:jq#kRTQ66<eK*T/16N3rl&KI@fa#(B>qP`NGE,J^f5,0R y' );
define( 'LOGGED_IN_KEY',     'TP6[lI_brFnoN8YQDn5W-17hW_x$yr8c7;w=6jz<UA_bmT/58Z mZD^`lE]|?jrp' );
define( 'NONCE_KEY',         'mqxJb/AK5f(1Gvay8Qm]vY3`h<BOSk&|?f_c1-3!-ll @6;FCP *_9(zwbmQ$Ybf' );
define( 'AUTH_SALT',         'q:*B4(;&WjxX+r[j]B6ZGFV4#c`B25ZE~kxIju&$+:A%95H-yLBNm2,P,DL0lc-)' );
define( 'SECURE_AUTH_SALT',  '[}CKbnqp9D}XGc6MbS<8nIHQ?6/^V|Qlf0[>L^fu,hQr?^6Qdpyyy_vb77D0O%kH' );
define( 'LOGGED_IN_SALT',    'k{#S9-0M<`WM8el49p9ge2T_g`kq#IXy73<0M^;)o!}q)~=^ `aNuUI;&/(/+BM.' );
define( 'NONCE_SALT',        'qsmL-L$0fm?tu[F5Q5xSB$V:gE;(A!]O6GSWyr$xJe++o!~$YU],%V6zjNHA3A#l' );
define( 'WP_CACHE_KEY_SALT', 'A9h]vivR<Cc_EkY8Lki}gjV:xQ;Fn*E gd(!jrYJFhSvmo`VxUgdBgj#K(R<=9L!' );


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
