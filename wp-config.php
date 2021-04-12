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
define( 'DB_NAME', 'id_granit@' );

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
define( 'AUTH_KEY',         '~zh7hlSJq8a!Gix*}B~N[m%Dr4JX=U?%{W}c#l8~CGqTc7_./E~e5-ye=/&So#m;' );
define( 'SECURE_AUTH_KEY',  'X[0oXG6($M}JG{hopX9uv-2)RUpO^X%|#/&cNWf`Qnk^>=m-U o=S!er^`c?Ny#~' );
define( 'LOGGED_IN_KEY',    '8)RhE@x@gPxHs_2Dz8mRM[x;+i[62` WDb^7?,>jT&w>81a/SBgw ;0FJVfdV ;A' );
define( 'NONCE_KEY',        '[igOyW?{nT>qQ.i!d]Lwj98}+2GGuq*fU&QZZZ6mz#Mm`MlRmm/wZ[EXOGkS7jIN' );
define( 'AUTH_SALT',        ';*{(/@gil55=QZ:xG-l7HU<BBSB?$&;h%wyt?uBB+^<zQWB0NxW.`8ec6!)f2jB&' );
define( 'SECURE_AUTH_SALT', 'r]`;y~|W/!L?K<}zIr?*gL3Hz~R/U}vAp%U%HvR DZ/KTAiEB|PVxprlF>~uz%5&' );
define( 'LOGGED_IN_SALT',   'Nt]NGY~rXT3dZ&Jl|!l`]rt%jsmLw7G5!2den7Z#DY23<XCk5e S.wlRS(et1Cu-' );
define( 'NONCE_SALT',       'lh^EA&{;YS1,HOmU7(B-f9@!{c>}GIN=y#YYY*r 5LWCD+s[)@ut7(]5e>Amlu:j' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = '21g_';

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
