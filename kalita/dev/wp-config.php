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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'db636586182');

/** MySQL database username */
define('DB_USER', 'dbo636586182');

/** MySQL database password */
define('DB_PASSWORD', 'im@rk123#@');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ';z~{~PL}-#_e?O/i8`G!F_|TZ`,?ri+yp(pl@u62Kz:9Bj*T?~-e4}:XIVVWb` @');
define('SECURE_AUTH_KEY',  '_jE-!&~~!<uHTV^mm=?N&tjeA*gu/PDMLjUY-:Qj%T)$_kBIIpVDS{71P?GkfF+)');
define('LOGGED_IN_KEY',    '$hi_,TS;C5/ht=]jy4Lkt0xr3.hphe.[+y^1iJa[beNguVbO2K~ZV5-^pU<3t=)v');
define('NONCE_KEY',        'yA-,D{CC9c@-9Ygr{%EEx$$T]K8-4`7FUbm,l}-gC69yUQB7}m}gmfCVXqj*[Z3H');
define('AUTH_SALT',        '#Rt|6KNw!/QOT^)aC<%GJFbqqv4boTEi_;fn)nGvn3vHd eNk4W#D[$_%X?6wII~');
define('SECURE_AUTH_SALT', 'a)@B)I5tEuBM5WbVU@}DK!@Tn(%x1|z@M=.S{hRLqwjh!:pAmwr@Mt-o`(Z4!QHp');
define('LOGGED_IN_SALT',   '`?#!Uq}#aYfjl`YL(3I26Ex}sx8&J Vc[BhNq~.94c@n!Z(dks._: 7B6sTfsqgn');
define('NONCE_SALT',       '7sHrwwe8!tVpA;N6LFs-PQmgY/Dcey;a+F{jJ)dXk8AD]=-mSj*Xo#{P2VTDW8&Z');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ka_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
