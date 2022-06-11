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
define( 'DB_NAME', 'admin' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         'YXwjSDm-)Kmqy;=(c1S3,zk#:3R2[K^yu.EF1d4>38O:Sj(~$DS!Tn]HAIB>.9<+' );
define( 'SECURE_AUTH_KEY',  'PD{:,0oWKLK1Kole.DU|#2/3T!E|)~*&O,RY(keNf5$($0Jgu4dD!LSJ`C7[#K/g' );
define( 'LOGGED_IN_KEY',    'x7X4 ,.2n,73f=/fWgd#ZVn&u3^@{[h`~._Z2F`vw`|J]h}nNPC/uko^f#kut*T ' );
define( 'NONCE_KEY',        '?G[01Ykvt|w#{;:.#{vz1qPa>-Qg:ZSJk& Zc,.Yu x0-zE [jD&|5v_wAdt/&YF' );
define( 'AUTH_SALT',        'N[a4qN9%?z bFUVG1~Y0Yb{at!J@vt%1V!)jvZ~om{SjJe0lmpHDrAk1FBG;)U&[' );
define( 'SECURE_AUTH_SALT', '5tf,hkZP_%4pA;K /b #8k6AD5 !8< 8.QiAm_~N%pQ2mDGU^,poZziQEou><.WJ' );
define( 'LOGGED_IN_SALT',   'H^cZb] Am }/i{XMxzQ4a]u6_w=.c8#CBE^V3&on Ac[=wqNtX>hx#rrQ$d:g2j^' );
define( 'NONCE_SALT',       'Kk%TK|p`#J*Fl/BPk5a}6b:Zlv!%[CS?eagCR$9G%]?B`Z{v~0DT<kDT!HSU~qec' );

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
