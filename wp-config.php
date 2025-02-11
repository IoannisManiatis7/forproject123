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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_gqpfx' );

/** Database username */
define('DB_USER', 'whsk_dbuser');
define('DB_PASSWORD', 'whskdb***');
define('DB_HOST', '185.138.42.123');

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY', 'h48&|]Q748q2QUQT2E))5Nb9]W04~22/rW45CrEz(Y_FZ3~z92046glN0n4zn!e]');
define('SECURE_AUTH_KEY', '4%Y/7m|%(9Lenlg/ns3q%q1632CemMPIV29[xVo#f;pXDDaFlZ3p9qGh[9(Z)4QB');
define('LOGGED_IN_KEY', 'rL#Hr@fPHs52Tao9J;_B/6|jB7-0O6H%8R[kH%3[cpTw0d#3)tBR1~F16D2Q3vI@');
define('NONCE_KEY', 'v4j0p3mB:k])6vOTR;&6/o:J[|Y+0U9*3S9N50uBnA6USrtX:+l|j+KIi)HT-]%d');
define('AUTH_SALT', '1o%13QbC7A)97p5FD6F!l]/T3gF4Ps(KB7q1kpZZj#iNi5_1d58D86_1i+|zu!i)');
define('SECURE_AUTH_SALT', 'O@iw7#JAMkY58#5(mwD0[:I8#3dTwx7~S8W(#1m9)R~Y9h-tR4)IEW2WP8HIiL-*');
define('LOGGED_IN_SALT', 'i+KPlPvsDP~oUm@22u@z-K!i:lT3ce67oJe1C46701(Xm!Q#7vy57QG+u:ra3+fA');
define('NONCE_SALT', '5jUDTS6g#~~37Cn7|&x9YK/YyINq5B1!su;R1770Z*oP0g[t/1h#XV6w]XHP-*!T');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'VQ0Fc_';


/* Add any custom values between this line and the "stop editing" line. */

define('WP_ALLOW_MULTISITE', false);
define('WP_AUTO_UPDATE_CORE', false);

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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST']);
define('WP_HOME', 'http://' . $_SERVER['HTTP_HOST']);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';