<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'test' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'MySQL-5.7' );

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
define( 'AUTH_KEY',         '2OQ(;wIE45R]NEH8Tz0wv`5zsI8U)&*>$JG1}d3FXP]HG#IA6jmc_Nyr1<R4;qBp' );
define( 'SECURE_AUTH_KEY',  'gRN9dq]pv{/zd`N-jj(XJiYXAD/{03,L~5q$LJE#(l+(3v`j.m;5e/q,g4[`n`-C' );
define( 'LOGGED_IN_KEY',    'B+%`5Mfa ]B!QV+p!ukm*T^j +XR}.c-D(kg2G7s#}TOk#d:&Sb/#HM^oYUOxn> ' );
define( 'NONCE_KEY',        'yX1;$ }hrNj:OOAYYY~bH9*$@#5?4w($N!B)1,ByA8 $cy(N@rZPB%25V{Dyhs-O' );
define( 'AUTH_SALT',        '`*C,!np;Tfn&RHJ!<CEsqJDSrD=qXYmfS`0ENIN;-a)ouN<xw^;mWnP>eOlW*/Be' );
define( 'SECURE_AUTH_SALT', 'k(]A@P[&}@M 1}x-=@msK`U)xHT %aL+$;-}XZElhc>)TyUP]Q8qHV/,B_kW$EB8' );
define( 'LOGGED_IN_SALT',   'R3Ely]7fiV~`!Q-7]1DsD?|:WI#a:Y`U`-{=yn!q=D&zu#N`h-z*oS7$1I-kS1oX' );
define( 'NONCE_SALT',       'j)5&BD25f1?:Z8&DcjefF_Ro#)X u{F n0_R&wLYAMZ*ed}SYMpG95jWq*gx_s2E' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
