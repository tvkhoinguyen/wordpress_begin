<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress_begin');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'uUyhm&E!>i|L|#k_C69@g%IO5l5Nq2j)G-.-dJ]jEWX& S:CH,I6@&uJV;36XioS');
define('SECURE_AUTH_KEY',  '$jBAFU_[|UJ`f}N4+HYp:x$W*=oGYk<;$&g[2HjF|+t7]]t$+*pgJ^|k^14`e~b6');
define('LOGGED_IN_KEY',    '/K&S4wK^e)U2Icd0aVattj>-bt,)-2|$^gr7svjVeJc8zE-lvKw[P3QZ[dVZ?2/W');
define('NONCE_KEY',        'p,*|~4+[`%!w?4X54?Z(;nW}f0S+CF2|v!B]ZGG3ln]-.>OPP#tqKnTrAab1[8#W');
define('AUTH_SALT',        'VCS2wI<+v98-cdkfB%-c6ci%@pj2fr-4{%B2x.FR,56`,|+{h+*lbA&}8iqp0)z-');
define('SECURE_AUTH_SALT', 'fZ@x3h%1T,&LU84rF;5:d%wpBn`GRO`d93S/|f7uA-W}Wwe8dJ|yVL7gz7T7tW9w');
define('LOGGED_IN_SALT',   '2$$@(Iu<`7bLIf30#pI+;gF}*[1Xa-PmXaB?/|mGp4V1AqAe-o2#<~J:]r9U(6ZW');
define('NONCE_SALT',       '#.poS!Bv~#p;D+Wft&U7]OZhw+<B4uQT+Q@F3]z{b9C>b&ab}Rw/4gCELO?+L8+n');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
