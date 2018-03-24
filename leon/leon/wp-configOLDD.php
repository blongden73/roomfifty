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
define('DB_NAME', 'leonEdler');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'bA#]yAn%PL|%]*6<0nkvmF./(0+tkf}8bCj_#vykdOaEi31A5v|IgMR<+j(+CTQ(');
define('SECURE_AUTH_KEY',  '-i=@hS-/}T5v7QMs%BseDm9O$3St^7n1B$}BX<$ML@Vq:NO{e0LxV.W[>XlBSJME');
define('LOGGED_IN_KEY',    '(N%mx<TF:n#z/Cg50o.Qkotk-F&fz5L;3q6sF4{I8RMdJ|/;#!6i![bz,Rk(Kz@r');
define('NONCE_KEY',        'm@TP2Io]n[>M+;,-E]:RX U9`LLO]%:>z7h#X:uzzq]+>R3!};_N[L62l p#;[-M');
define('AUTH_SALT',        'c?Inm1w%sVci~xE`Rz2l$U8M<5~eZ}I-sXz<T:d2{5`a)ilFE*),;Hm2l):Mc,I]');
define('SECURE_AUTH_SALT', 'P|3gSuh~HvOgniL7*rDh_,-;7k[RmF~~;-5<2j~CZ>.~`cY.pow~VuQp!LNzs&$n');
define('LOGGED_IN_SALT',   'ICki~=~jL{rc8TJzi elpI=h,;o[uFKgr+%n`%z :;zc)|q[0;>NzwXy$@ITTd(v');
define('NONCE_SALT',       'jlnkmY0;pk?U[6@G:wO0mCHhxdkdi_3O>(HjcqNZ4Q=|&MB1H,Eh&6lboCo$s.fQ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
