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
define( 'DB_NAME', 'de' );

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
define( 'AUTH_KEY',         'k9^xG5012TZ(C4_ +C A:^~:^H1ru@q;<z{HGin$rwOZ12cKUE(+MLENSi=hGRF~' );
define( 'SECURE_AUTH_KEY',  'yh3Z %jBSBS.;C^dOFM~9i,>u$qa|$nD/Jg8s<VYa+rC}-.mgs&H8Q;/#k5FA=g.' );
define( 'LOGGED_IN_KEY',    '<=(&=M( OV`OJ-+9?c#EXL~yENiXqRXfOA=W;ko_*`mKF;?0r;Mj-~&43!=_ VsW' );
define( 'NONCE_KEY',        'o2QS6_tAcQN_YJU3WVkumH=&JNf]XqNG_$j}N _1hxPI%Rxu~_5PmJRtHI;9QV;$' );
define( 'AUTH_SALT',        '7$D>au%ZM}(/%!+v%aj#F5&{y6Abfn3g4U7f4Gl)^>fOw+No:Ec<-99m1x;4b27%' );
define( 'SECURE_AUTH_SALT', '4?uNhjQpjkfr9TS6UAA+%16[[.R2?__9Jmm<I7s{sN}F&UBuyrd=+3#.wJba7P.^' );
define( 'LOGGED_IN_SALT',   'tSE[Y^JJ%vGn`wf9XUM9aEX|6O}p12l%e;FCyZC,4pU;$n@b^I(2UK/||5euFR7o' );
define( 'NONCE_SALT',       ':5%42O<d T#<N=5E]Iwa JKLuYe~i>Zn|o;UjIv0~x_#Y:LAW.Dzsx*`l~^Irf+R' );

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
