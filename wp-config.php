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
define( 'DB_NAME', 'tech-ninja' );

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
define( 'AUTH_KEY',         'z6Yya=m*HJ1b)wSQ32{i~9e9h-::#LT|a3EF>YSV8vtAv~,UHTb_V~^y/i# dS|y' );
define( 'SECURE_AUTH_KEY',  'Fw9,c 0^6TC-cwk51^I0KsBp7u(v^~GF/m?}`9*tN)WP[w&+JJlH4}M5FwD(-A,u' );
define( 'LOGGED_IN_KEY',    '*T=X{g%vV%Nhy48Ttk|hckoC^h7TojFrfZAug{,<zS7iFxm8QY[A=9HO]1#-?{CJ' );
define( 'NONCE_KEY',        '`-=UgNGyJ<o7Y_/TFwk:td]@#VYpn0$Ge`:BA6P-NE7*5s2|L_5[]G=w&sEAb{)&' );
define( 'AUTH_SALT',        '3l7tJcF^!C;^eWOe,gbF[Cy=@Rgk0cPu/u^;X2xxhut|n`bp4pqxsPC+t:pHyk_1' );
define( 'SECURE_AUTH_SALT', '&(Y.d=l?DB65#Jx:3yF${jWXq#6%Aj#,]q:2{fsRoz`M>A@9`^WaqIL`C3H5[f>?' );
define( 'LOGGED_IN_SALT',   'g9(;*;vvT-oh +Y,viJ`klk32Ku=:2HNgmoRH)OmOC|Fm}&0*%#=.sN!RXEz`1p8' );
define( 'NONCE_SALT',       '^4fX3no3+]%F[tO~Cm50P9r_YL,@iU^Y+wnF1HJ]Qg1CC6DN3aK*tEI4]y0n~DAT' );

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

@ini_set( 'upload_max_filesize' , '128M' );
@ini_set( 'post_max_size', '128M');
@ini_set( 'memory_limit', '256M' );
@ini_set( 'max_execution_time', '300' );
@ini_set( 'max_input_time', '300' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
