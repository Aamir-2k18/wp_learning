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
define( 'DB_NAME', 'wp_learning' );

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
define( 'AUTH_KEY',         '>JG@ORQ,_M)*T .xdGyPoo(m*TmAMdHZ0!:{fL5?BGFe,wM3<XR>.E~HzTQl6Uo&' );
define( 'SECURE_AUTH_KEY',  '[&@pmis7Nm;sIZl!XWjpSq fCLH`Q-tr75ODafyvuu/I@b$tW-, m Dt7M)#(L8}' );
define( 'LOGGED_IN_KEY',    'J,tQF5W1n<1gJCa~^p&MYi0$9n4&</f<d8[HsTWg9Mk!.SNe#kk34 5@Azk[2dD)' );
define( 'NONCE_KEY',        '71#g7VQ;+)V!a.SH6$=});QC:pfw=+TrLSv;Yvt!sBW#$@vr=AQc[4fsHoD:6HzB' );
define( 'AUTH_SALT',        'tPS8o0?=eB8$Dh2{;6S$dVdb(*&n]lf)/N,Fa:%cy~Fti`/R-Y.!e$T0 s)ayHlz' );
define( 'SECURE_AUTH_SALT', 'u9_uI(I%R1mR9NX0to7$LXh&U/,GDTRMJiJS9qdG*NikLNlfnNOV#8ifWfqSI01%' );
define( 'LOGGED_IN_SALT',   'A|Wz0+mU<vO)vj-!(ZbMek(~[:F3lj&@eDK1qsXvjxfPXYCYBZXOGhJSz/W`UDQ[' );
define( 'NONCE_SALT',       'hK`XB-{!FnQ_9;`@bgdP3Wn4Tup</WbNpx8Q}=YL&-~7I*&lL?niP#K~AtUsRC_]' );

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
