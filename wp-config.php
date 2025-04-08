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
define( 'DB_NAME', 'db_bkp' );

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
define( 'AUTH_KEY',         '*?sUX`s<Er_E0u5.>`x,I0@tW##M7?zS;=3P:B9Q#)T0C+YJ!ESX6/jyr1:k^Y*q' );
define( 'SECURE_AUTH_KEY',  'K>AKE{V5pT.Jsu@3Dn5,SHcRe]es:BsjKmqbp7AY_])9Ph-[>,X7nO,-{vX>$#LM' );
define( 'LOGGED_IN_KEY',    'zn`1Mr%3|0E-c9Dx:v/89h`q)Yr`?Xr}![&WRHS;)Wfa/qeQIsxy359AlPTsh6ai' );
define( 'NONCE_KEY',        ']*PG w<) ~-7G-G<uVX2;#4Yy.?Q-oZSC/;Mdi]XBhF6L.;rXoX`=CvDCPld w{#' );
define( 'AUTH_SALT',        '.R)e}cX!LsI7_j2I|`3X)F2}lM#r)RA9!r~MIq/S,T9`5aUbKyKDo . =xL@beG~' );
define( 'SECURE_AUTH_SALT', 'LI$4e`/oI3qNc3L!Ck~Rdd/=4,bLlV+|?c7yKsu)#)0scWB l2KpOh^C[$qF{-(:' );
define( 'LOGGED_IN_SALT',   '.`n+RO<^mBCYYAK3inT3?KwfR#!udna,n9E*tPi,)Q%3xw%I|hp_Y;/1L<Q7eEZf' );
define( 'NONCE_SALT',       '2vwdA)auJv{cFYA&nFx60z;C(s#}IT9*;sKl_Psy~SY;Gc)Hz#?+!)m0EIuURIok' );

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
