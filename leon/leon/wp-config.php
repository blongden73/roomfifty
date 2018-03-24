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
define('DB_NAME', 'roomfifty');

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
define('AUTH_KEY',         'toL=r@Fs=_z6.qq7h3}3,IE}J!} W8]IT_~4Mw>Ma(ABmy]j;eDSc/]gZI|]2^}6');
define('SECURE_AUTH_KEY',  '5,dY?<2ts8Tr/XQA^x_K):eY<QFJ2,7ZY$1]V%DUI2[F2Me_w,!:Flal8_%e8T7l');
define('LOGGED_IN_KEY',    'dojK?Z5b/,|?dhD>vve}PYjrEfMB1JciWYiF6xJBjog+0b4dl.JR}krtP>Q(.GSA');
define('NONCE_KEY',        'Hu-I56[%%WcE!Fb (>Z*HQ/J` }__hW;&nQ*p_LIEd8hf?:XB/o5p =Q_IavpU[g');
define('AUTH_SALT',        'NNl1%H!!DwLmwO@s-]gjj#b4i]3O@9p|&q^lX:sDcY%Q?IYjRJC|a2(n_.lM+j9]');
define('SECURE_AUTH_SALT', '/A,FZuHt!7fQg69LUB6h<da1eLc>;N%_om=F+Y3h1T`SO@Uz2u*n)^;}E| dHqGT');
define('LOGGED_IN_SALT',   'N+H,5eB4BRB|kBw]Ny=o/g~RGwq+G*RC3r%Ni6B[o=2Em]hb`;0b9W;J|Z)poIFo');
define('NONCE_SALT',       'rj3eFKmlSTXY/sL|-fTM7_6DSD5:.Lsxb%YHmjL0#+7 NWoBIrX~u`@l2Y&-Xlf/');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
