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
define( 'DB_NAME', 'wpsongsdb' );

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
define( 'AUTH_KEY',         '>y`q>f-y3yr=3CTumT]D6PkK>wg~@8jsZef68G]>qrLq;e/9k&;aR&zUC%%xVnS.' );
define( 'SECURE_AUTH_KEY',  'V4_q9.Uvgpc9*Zv&p,9h^XDn6sis;1RreNaI& AhO+v4M@2DuX/cRZ/Xe]pw4Onk' );
define( 'LOGGED_IN_KEY',    'm=cI$<cyJ*NI(7dPUUosx(.[%zNE0ZSTd$X]Oq:G(K)g!n7Ioq[&`664xXZ*GWaY' );
define( 'NONCE_KEY',        ']hPQ2L5C 0rIxw|wGri`dP55+Ii(cyz%:te hj$MTszWIFPObo>|^AK1!x,&<d,O' );
define( 'AUTH_SALT',        'l64}/vm}+h<uIOvA;LNhju4|tX<,#wd .ie;=]bYGbn5Na_sO&T#OZIt.U4S@+<i' );
define( 'SECURE_AUTH_SALT', 'Bkb0LW*,Y]EI6I^/cZu3bdiY}U<iNK.O;EwD^X2g#%DvH/trE)qif5X%~<}=>rP_' );
define( 'LOGGED_IN_SALT',   'Qz-4BkhH_~{=EsCu!Ke8:S{ewJukqmJZFs|4KjE$q77c/JqD+gdM7~8N3B+]kt<X' );
define( 'NONCE_SALT',       'gVnUWm*/_@-ZYDA6J9cDZ<)[1NLui8Ji.n-cdu<hqjx{|svLf9]h<>y6>A|;S~B@' );

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
