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
define( 'DB_NAME', 'icmbd' );

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
define( 'AUTH_KEY',         'WU(TNw#prKyGE;6N0Q^4nKnP38Uyz)gF6Z,**q]>e p<yFnojX[Fz@*x+TL@~.wy' );
define( 'SECURE_AUTH_KEY',  '/3K&t0Zx5}[1-/`b[BCm|5cx>1}Og&Ij0T1E)DHv8)tik)[e/I0,l]!v}gdbGKxy' );
define( 'LOGGED_IN_KEY',    '+>!|ssj0G.f/>6pjtZT-r<^G{RdWoyRpE=1(|V?{7%pfwiv*Z|dWSsM,&?%^PXf0' );
define( 'NONCE_KEY',        '#vt+oa(.F_Yzv]/glw;l .;hXmGdl4whdFt3-ge`b*4wc1oF~ltF?7sfqHNt^8*;' );
define( 'AUTH_SALT',        'gCFRrY,-J8`<~u(]t2>Ef7WyvSMU_L&kI9V^Ar4RETuw#i]gaT5&NOa+Jpxb.tk{' );
define( 'SECURE_AUTH_SALT', 'eqX(,( ^z%/$>o)V2HB8V<X>T*Z*yH]RN2A/pL>V2i/sdDMtq0#/<u>A:{D2D-lS' );
define( 'LOGGED_IN_SALT',   'Q0WLEWR6P|&8Lh#L0<]aBv],QB7_,xyf/VyRzj86SSYz8+-Fc[||4%Q4#*THqU>O' );
define( 'NONCE_SALT',       'cOat_ #i-T0/q$62E.V ahi]!k$65Y<IPY4^px]Ps^mu|aRRd65f>Dr$;_$DB~K|' );

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
