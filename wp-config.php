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
define( 'DB_NAME', 'rsn' );

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
define( 'AUTH_KEY',         ',;,CQ=@TD$5:v32FX&$P~d*#dwH;}[ZoUz/0ve/!ebo(x[=syRFI$fa@Tj[XRBQ*' );
define( 'SECURE_AUTH_KEY',  'zEBF+Y&z_%mRBIoRiB<D]UDUzwpHS:4Sqo@lKp]v%?GffQ1V}YZTn}jHXaQ<rVqR' );
define( 'LOGGED_IN_KEY',    '%mqd`;2J)g@9cp;+])QCND0QYu`}:k,osz_V2(7E8H6>g}Yax [DqG/=%d8g*{GQ' );
define( 'NONCE_KEY',        '@wG0is6H#E.K6-KS;7_GDjETO-_F~?3.,G@i+w]=)uNF|{f7[mgQ>%hz+f!`aYVB' );
define( 'AUTH_SALT',        'n1S=`+_A36KL3@5:%11S(m86HD(g_mVRY{f_>F2p)0*sE~cZ>/u`0Vt8!PQvwB#j' );
define( 'SECURE_AUTH_SALT', ' wmvk_>i7wJjh1JXusoQMpl*u*Zbf|).ST26$[2O~G.HGDjd?R{GfymCJ1$,;Tr#' );
define( 'LOGGED_IN_SALT',   '=@_r#dK>_Jzpya ,f_w|Ze7D+/,p~n8RzNjWb$44r^yf,G7L-zeKBO@wq&zDKBOX' );
define( 'NONCE_SALT',       'RH<kH33$m3O:<>i<p7W+]E8eTaS.b&q5M Ro~k%S(=!w$8 i+R)SnLwiPXjX6,:?' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'rs_';

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
