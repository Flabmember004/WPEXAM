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
define( 'DB_NAME', 'mysite7' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'e~2e%,([h5Qu=$ih%dp9>l+L#4x/2#{LEANJ?0:Dzw90)D%9D|13?05k5`432z=]' );
define( 'SECURE_AUTH_KEY',  'iUO-<^ZW[P[PzEkf`,DcY#tL!fyv+wIBg;G*XL[z4Y[S-Pm2Lqv~&e<_eY6HL0VN' );
define( 'LOGGED_IN_KEY',    'B&LD=X)COoOO 4GVix5Y~.;Ws%%Xng8_zC=X%|+0q:2]C6}_d>9TO;AuwI#:2pQ=' );
define( 'NONCE_KEY',        'V|^l(FB)`2r5ACY2&ok~VD`uld%hW-M9WuAe_0tnG!*hng#]u&_%^XdrNI;k{FB$' );
define( 'AUTH_SALT',        'Cvb//oiF,>U|z.=`g|3!w[`5nS #q->/+Clj[QJ5PkuQq{U4sD3[!0@]aw}+msx.' );
define( 'SECURE_AUTH_SALT', 'l?g{(NxZ+Yr&SX&0Hu3ddQet>k[mQ!S|hFoT8`h3]$Z2D(5[G@ZBi[y0<}g|HwDm' );
define( 'LOGGED_IN_SALT',   '=ki|br?aO{m8W+%nH]zeRo?q,SN~Hugfqy=Xq=ZgX@ZQW&g]mm+)Ma*oJM=nBJ]S' );
define( 'NONCE_SALT',       'zg&a^~RNucbBhaa<m*aPSnXx!ds[]Aq-+mzT/?*846*3Dn:tS?RF=6A#ew (&^[*' );

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
