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
define( 'DB_NAME', 'naturesbounty' );

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
define( 'AUTH_KEY',         '@:?~+AY5Y_j56m`$Vtg:6[S^uTFPsmSqcB306W7}Y>e`M7tsrI_jbKBvNbbbOL8$' );
define( 'SECURE_AUTH_KEY',  'GGk|eZXp+3Rz$F3MKVOmG<0&2-]B)+C3 [g-bOen+5@Dv>oBF-g,z<!uYx:RspGs' );
define( 'LOGGED_IN_KEY',    '$c+QL6$X}BSCZ:w?VURcV4Wl;u5HsE/Ufl96|8[`#&)3~ILJSRT,%ifPw!m/z| 8' );
define( 'NONCE_KEY',        'Y4&(J~kc6-0&+Lr62<SWKr{[O635[&GE+ IwEw/UF=M1tu@`I~}Njg3bMbEBdabb' );
define( 'AUTH_SALT',        'nZv^JT,?qiIuA$LR.DKAlSUopdrW{7De5/{buv9~K u~xsO#(u8cHys;cG3}XTPE' );
define( 'SECURE_AUTH_SALT', 'Q5s`p|1f:26BI6}`=8C#Z^t(t&1aV;I%N9<|C[]-lBq_LMW9p8jmb!IY{lyHdL_l' );
define( 'LOGGED_IN_SALT',   '[u/KD&n0WsxZ{EmMDsmd#Md{fx-e!:v]5J~5q_rKc?p#<K# <U0e${Z%t&z6l?tU' );
define( 'NONCE_SALT',       ':QymGv7AyX_bbUIdr<MmgM2j6-#xpoEt +K7T$8)ReDj%<{4r>{*sHft7}[H1GFh' );

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

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
