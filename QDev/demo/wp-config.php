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
define( 'DB_NAME', "qdev" );

/** Database username */
define( 'DB_USER', "qdevus" );

/** Database password */
define( 'DB_PASSWORD', "qdev54652!" );

/** Database hostname */
define( 'DB_HOST', "localhost" );

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
define( 'AUTH_KEY',         '_.9 O<4(c: Y C?,N_S<F|[Z@KT_BMS:)(42dZMu8PVn8PV+5b6ttEwM=`uwBLv^' );
define( 'SECURE_AUTH_KEY',  '4*1AR;n)opuSicd&;S}~nC:zH?0)hN]p B77-<a1X%:]c/wQ{hV82o4FBV@ZiWzK' );
define( 'LOGGED_IN_KEY',    'ic.qC _R) ]B;wg44Wy42L$|v-TbXeD7I(PCj E2]8A`Q/}!ppiV%{*fArX`InuY' );
define( 'NONCE_KEY',        'g@@MrReCJoQ?KfyL~JkCLjzAQCU;V$v`!uapzz^Z[z6y3{pM7a#i3eMdaIn }Ft3' );
define( 'AUTH_SALT',        'Y6vh7L)5 7S>`Zb5;mtWmm1P mUA@1e.x)Gb);E9lu|}UZ[v8dv@Rbx(:.afI:QO' );
define( 'SECURE_AUTH_SALT', 'b^[-+A0C>*xL<Ucx]4u>pB>TxsZr<V%]jb&7Rc&I|%A?>*ds<I>+[m}2XzZgqgp-' );
define( 'LOGGED_IN_SALT',   '}!VK<3m<sfU0:uQJ@zms?O[n%+uE{.w9U6y5;.IpYTU:e=2;4FC~r?h!E|rB9{[}' );
define( 'NONCE_SALT',       'NnQ0$YN^g9{ ew*l1N~w-6rH`P*[==m3pN<c?@j[p^O2qTen}K3reU;#>$mK7v(;' );

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
 *r
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
	define( 'ABSPATH', dirname(__FILE__) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
