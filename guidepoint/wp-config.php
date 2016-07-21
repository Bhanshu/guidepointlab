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
define('DB_NAME', 'db623650247');

/** MySQL database username */
define('DB_USER', 'dbo623650247');

/** MySQL database password */
define('DB_PASSWORD', 'admin123#@'); 

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'X iVL/ LmVla^!pBq]&n4!eN%F-HOjf0ZGhR7vb.V@;~zeFIS#Xux+~&Bd00-kdi');
define('SECURE_AUTH_KEY',  '}<,Uxo7.|MnkKzn]knz?&HqR{#F`N|qORqkNI|A0|RfslfrkTf&Rk/}KI8-?)i~6');
define('LOGGED_IN_KEY',    ';OzelpS&>z7jB6(*deT}^z]Z|D|DM|}EKno,F29$qEPn5$GVmpXDhSdR`ZH37TVf');
define('NONCE_KEY',        'V!$#1vj,-a{i~$O+|E=H?#(3SOH]*mqr,I$S-8p2]^2:&0zj)V)cW[~/8c@HF|9[');
define('AUTH_SALT',        '-Wi@[]p0q.fb<S;mu+$QN< okad3o&|_!Smj`cU5A7NmQCk7^)NzbSUHYBd6q0$;');
define('SECURE_AUTH_SALT', 'q7Q>-~tt<Tg$OzymP-|6T;CAmU(/bVVJOtrqf8S>z5bb-7pjW>C.wDG]OSY*KHlR');
define('LOGGED_IN_SALT',   'BPwqNziysBt=r_2];,?MiTp]UB_%R/Hn{=sjy_zjOQ|P{@Xv1!><t`k`_np?4-~H');
define('NONCE_SALT',       'l&1|O#i&`4>r0b-g6*p)*Ok60mH< >PNtiZ}?J+]~r[`zXQW;[YXKY+++-p^zR5a');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'im_';

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
