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
define( 'DB_NAME', 'hippioneers_db' );

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
define( 'AUTH_KEY',         'ZR_S=AbDE22 @,<FZ)6j%1KYpPPq}.gFz[xmU@wa:-Q)~`TVh}&=Q%<:2BxAtuM<' );
define( 'SECURE_AUTH_KEY',  'BR^K61bP5e-Id9iZVbv.71V>Nt/#Z3;k12$v>NL%>U$-g]N-=345]2B!G2|/|9tZ' );
define( 'LOGGED_IN_KEY',    ';ux}z/LP1XWjey>I~7J,,$Qphfl`OgJVS]&&#p9n,{+cLtrB5?GnmqBk!(RK$j|}' );
define( 'NONCE_KEY',        '%</uft_SfQB[VMj?/]2QPwrAK!xPL4$!2xA!Z;sBjvCIe_leC=2:<tZb9VW}KPL&' );
define( 'AUTH_SALT',        'TvN!ucMt&Rxbee3=a{9sGKYv!]A=gWkV$.g!LW<R86t4Hwak?dP,i{A3?+O~8rgD' );
define( 'SECURE_AUTH_SALT', '}8iulas#2#e2~%R*;~>vs#S2HsWoB*n34KM|Uq:02;-iVj%uXjS)IU3Ew<^Hk;O5' );
define( 'LOGGED_IN_SALT',   'K+pC!!_D&iTyKjQPrK4Rq;LZU {0_)r TZxAdYeT4<P)2GO1HE[TAP:,`3su8Oz<' );
define( 'NONCE_SALT',       'Xo~969Y$t}WqB)*-QMDxn6^~Ud{si[HD2>H)rc`DML<*GW>9GxtS^V`hCb4`m~,{' );

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
