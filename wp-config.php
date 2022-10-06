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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'pruebasisenor' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Altair525$' );

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
define( 'AUTH_KEY',         'MKg^f^lV%usin0Hwc?B)CA*y-/GDc8YU%96 )8o0kSP[JG3rt!N@a6JzxzO{ #G:' );
define( 'SECURE_AUTH_KEY',  '8.d3zn,^RO^JLT58xPts? AowqK2u#^o)tE}f9$Q{O!sX@XYqkcNJ@t[or!I1Mlp' );
define( 'LOGGED_IN_KEY',    '+Ud;gzeQRA:#GaQ|nom2/QPXPZlW|l6E8#Lv>yiAOgj=3f6n0|f$DIu*ZO2Hm(.%' );
define( 'NONCE_KEY',        '7]2xq<96Gd&|R]BS}gOcRbj)zjsYRt];@dAi$?2`La)@JR<LmsA#5mG?tG;yKXtS' );
define( 'AUTH_SALT',        ']#PM X$!9nV@{{we2eG3l29x0&F^:>QTQ_V7#hj ZoUgFbXIP%+X6PH|.##R^%b*' );
define( 'SECURE_AUTH_SALT', 'l=cfO@[B})_faw{q{iK_]0&9JPVX*T`EUB|]9J{Fe)E%zCxvW1Iwbg?6i{~mQndQ' );
define( 'LOGGED_IN_SALT',   '^^9X-|^B@(%A{,V9^,CC;AvpRv?f)19u7 m|bn!agSD:,)1:)0zcUJaa_9r=1rj>' );
define( 'NONCE_SALT',       'kI*@N@Dmw6Q{[lrPVDno0<p0#bAID,g(*sA~(IXN:wzAD7y#TlZY^_3~.k@t*(K&' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
