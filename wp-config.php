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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'myweb' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         ' AICRt1LQ2ey1GRP=7#9K~QDKD5^.8?tl:Y7_@<DWhc4<$4}k0.oyIe~}y<oDoCs' );
define( 'SECURE_AUTH_KEY',  'kCltHk[yc~%5*AEX|+2Pj/T1_U@,[v`5&r[t~*K5z `ZLG2TK/@P%L[M>3JeWi?B' );
define( 'LOGGED_IN_KEY',    'd0Vxw( -@slrB`W+HBoFe[u]?(wW%jGYDD]N0q?c)b@Op/-R^Ebu!I,zPRSdYo/#' );
define( 'NONCE_KEY',        'bLPK8zTU?&{S<JO98U%4vzk&Ri,T:lEa}?~|{8OUd,/>_zY&=Mjx+ZKj0#=/v?8$' );
define( 'AUTH_SALT',        'l&z(K8g_8|w6#.B_u.`t<[)72k&wI,0j{h~#;,cmEGilKbPtsOn6]A*]YMeonkiV' );
define( 'SECURE_AUTH_SALT', 'NI]`OsT0m0>K= q3l<bLHz<Ad`W!g`}3VLVz>i%2;#;:$Haip-pu%eLtkFn$ P65' );
define( 'LOGGED_IN_SALT',   'EHdju9;gz+w{J@;pXn`Ww%,Ge{+X5&~xyQGg49FuIL)^#M)@jpyF{:#n^[0SGyL<' );
define( 'NONCE_SALT',       'kAcd&mFH;:=U[t#E0sabUxkiuLeM779l4Y(et;vixX<A;2q@[:a^Ke]u@QBI&HL;' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'yuade_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
//Disable File Edits
define('DISALLOW_FILE_EDIT', true);