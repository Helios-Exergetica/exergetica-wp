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
define( 'DB_NAME', 'exergetica' );

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
define( 'AUTH_KEY',         '72=.+BcqaPlC~JVc @^&,O#ueJ;5r(go:DbMd9}fxLNO<6P3{Z)]K|YBc4e(fnB$' );
define( 'SECURE_AUTH_KEY',  'P>wDCg7TJ6{:<hdB98,CfPO}caF4Do)E6./FbjDcqG9&Hy^zzY}WTG[qfJOn}ygW' );
define( 'LOGGED_IN_KEY',    ';J]775Y42_<[NMU)[-4Bj*53<;S1Eb1C8<1Hwy&{0PuQXX7r_J<JcIw]8(.Z;u3c' );
define( 'NONCE_KEY',        'd]/PMR%*jW5QY*Io# 3]K+3fp57B~*_5#En;1!FfeRe[Q1Q_M#@Fdx@d<r.Isj8(' );
define( 'AUTH_SALT',        'Bm.w2]UYz9:;g/eH #)S-J@<{71y=k1zbx#Z,kKX:P~1*Bn]gd|qrAu$535{X4m^' );
define( 'SECURE_AUTH_SALT', '9(qwGv:9zuS8,X,Q$z%dS[1/tU|B2{5.jLf^u$^P#Mw>)2oUvBcH!zz|a{Sun-=C' );
define( 'LOGGED_IN_SALT',   'LcZ+PoscMp2:3d92&%]Y$=<qGYq={gXUX1N7Eu%WB&)T8C9;S=,Hm)4xI7Io2NEo' );
define( 'NONCE_SALT',       'iPO^8J;8]Ysgjq)qFT/Tw^Ta?p1:]JDxkA-sL/D8cjp~ChDZ}n%DRlduQI9uac8M' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'xrgtc_';

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
