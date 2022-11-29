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
define( 'DB_NAME', 'gamingstore' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '51123711' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'FS_METHOD', 'direct' );

define( 'WP_MEMORY_LIMIT', '64M' );

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
define( 'AUTH_KEY',         'Xj{nH=!k][X_.{K2,K7[+($Gf4ds8dOgLN`euC1s*XP&;J;B&SNG7FH/Qk*s(&j_' );
define( 'SECURE_AUTH_KEY',  '}j<)KJ*6YU00e&zw1eR|.$~:810^Hzw4[zQ=5j6rRIV&# S~60MN6QNf2/GR!.lW' );
define( 'LOGGED_IN_KEY',    '6MNerEyFXwK(N[[z{or`CyUE`W& `c7p.TGaFpBKF#3Pl|^A~o@SHSo}1KEv//,z' );
define( 'NONCE_KEY',        '3l5j+C`4/KhYXO{$0%-lK%KVyuM$=E>^ECg31I^FJ!w-_URstc]iG281r_K9eg=|' );
define( 'AUTH_SALT',        '.8A#v$p%X6`%XjIs0bXJS%@5{`8oV5>dLxV`4;?CIl)dgRy?uxeYh]L@`&B:0^r[' );
define( 'SECURE_AUTH_SALT', 'g*A}{RfIoP+(N#8I*1&^eV%M3kMC4C=Z0~8dntpEAXRKVQNU~?Qo6Kk$z}5Yk5S2' );
define( 'LOGGED_IN_SALT',   ',;e1U^G~cA8@>ou#FoLat$HsI_JK!+T|;c=}_rXYp/+z?+-moN83RVE~6(S.iSg;' );
define( 'NONCE_SALT',       '-]I g~)(7gCJgrjw`4pIkg1!$chq=^@,POq](mo pKV( q-Dub8AntTkH{W];pDF' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
