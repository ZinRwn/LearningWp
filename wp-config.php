<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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

 define("ALLOW_UNFILTERED_UPLOADS", true);
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'kareemshoes' );

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
define( 'AUTH_KEY',         ' X9DO%M%f=;eI-VK25X%qRrl!Six5Rxc$5EI8xtZ.D/8.B5[t3&2&,)A{gb<PKHM' );
define( 'SECURE_AUTH_KEY',  '@t~=bBY/Wl@o3K>].u>LOSr?@K7}SlM*A6lAFgHLl?mv]r:(Sk@u47)s#xT%(X}n' );
define( 'LOGGED_IN_KEY',    'P8]Ja1&G?0O$Xk_UI_Bz]*@9B2fXBtPv9vz#0P*c1<_e5VE#jEn~e2vn7+Awj>sX' );
define( 'NONCE_KEY',        '3;;]bkc=S!p3P!0[6j|mlpK_OD]TBl.t}AXMRd*?CU}>NmN:fD_o7DW|s*$jh7O*' );
define( 'AUTH_SALT',        '{Gy2Caoo|APFZ>J~y4@(&QHt1C0F4{)B4.o&y2s)_K6M{5$GPS?iww{>u~6|QQP|' );
define( 'SECURE_AUTH_SALT', '<`c`L83}XEK,wl_GYUzrhl~ztE|(f6:.iGyz>!NxA7P*fKf1a^J$KK2R :xpFuR;' );
define( 'LOGGED_IN_SALT',   'Zud_42v0|VFdx9H)]a)%xEcnC!Ln88ZhWNhjX5XCie11o.sh?9s]LTy0&xB!^V?3' );
define( 'NONCE_SALT',       'eZ)QX{[ %l7{#!(2{`;`5nF4GkSM^%]E64a?>I#h$ wd|j|AfD}Sn|2TqVtzx9@z' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
