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
define( 'DB_NAME', 'news' );

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
define( 'AUTH_KEY',         'Adz%%Q$3QNKwYkBptw`{9fG!w giAa?U*2l{$zqy NAKi<E+!9+Lvl S& ;R)ZK}' );
define( 'SECURE_AUTH_KEY',  'D#|$[ZpOHoEt>^@&G^ jF-X@6ZwRRqQS5x#jzp#bXr|Sr[#|?0 ]A+(s?%m_|Z @' );
define( 'LOGGED_IN_KEY',    '8BLlCon+cPMFS6A?q?3m z[,Jt_3[BDpBFu<u6L:z|lWHl<(`NAZ25xyOu/DXs.z' );
define( 'NONCE_KEY',        'y77~m:#H()1+J]9>`%,?vmT,:yrQ.7ydsK!sp/%ExaRdc+L/Y hr]ry`PBA&`s @' );
define( 'AUTH_SALT',        'DSikzJ-@]8L2Rk;<ny9j_xY#mb3-}2@<F+BC(leZEq,A?/$eVKJ~emPL#*WrysNS' );
define( 'SECURE_AUTH_SALT', ':%G&NPXygWr-m?jO.@Mo3,OW}-eoyy*B0:y$p.,U7q=0C,vWkU$4ulu`5+cg6k_%' );
define( 'LOGGED_IN_SALT',   'EU</x(;HK&vQ1uCbUk<C3cA(M]iE{{l5}#rogO?Uj08XCe<[nDT@(8<j5#t:&-Q#' );
define( 'NONCE_SALT',       'sD4(BBp9d<D;yWQ]|pz,]xNR@J|>t j7C/vL`,+c,<:>9&Y+W/.v#bvUR:SM`=gV' );

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
