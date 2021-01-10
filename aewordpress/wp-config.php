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
define( 'DB_NAME', 'annatest_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '+g4A7D7[#jqVN@${WCP.s0}~FHcOrY_>8a29W7#c-OZ+dEoA;.6?PRaS$/ U{)Ox' );
define( 'SECURE_AUTH_KEY',  'axgg}~n6~j~wc-DBv&R|s867vVPf pXg[u fM!6v_GQd pne=5[7jv8wn=qrE}Az' );
define( 'LOGGED_IN_KEY',    'c.*d4GuSWkENusH?o*{kJ@Vq#U?)^QEWr>v&6!m;iQX)):5{z}>{<Q}$qyXWg@S+' );
define( 'NONCE_KEY',        'u2*hCY0!m#($N9=Ba?4d -M@/kZWZ,*PX9)i:~6Vz7PlM1]l9=._`xM-Nr, Gb9[' );
define( 'AUTH_SALT',        'v}80V_>>fn,W$2~);PR rk20?6+U/eJy]0}1[p].6l_/cA]lT =F0[YC;5E5I@eY' );
define( 'SECURE_AUTH_SALT', '6,lfELDKyl&$cvG81Ay.+L;V^{qolh?d>MjIMOWwxxO]oQ+5|Yl#`sL/)Efh)Pjr' );
define( 'LOGGED_IN_SALT',   'sQMNC9F=>n#!u<^(D^&K{Ty9jPsAXv0g5dld7mSB3lHqSKz4r@ 0]z-5vdBI*W@X' );
define( 'NONCE_SALT',       ' ;F1cwH+ZgH/J@Jf1~G3+>vZmt{Fqv&iMH#N8F~ ap =v8J3Gjrjg6=9q|@4Dh=v' );
define('JWT_AUTH_SECRET_KEY', 'secret');
define('JWT_AUTH_CORS_ENABLE', true);



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
