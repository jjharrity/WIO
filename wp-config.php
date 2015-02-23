<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/Users/jharrity/Desktop/sites/wio/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'wio');

/** MySQL database username */
define('DB_USER', 'jjharrity');

/** MySQL database password */
define('DB_PASSWORD', 'KeithHound1.');

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
define('AUTH_KEY',         'k#u9HsIse63~||HVz;>[p[qxl;n!5C9A-+q|:wu;(OVW#ji-K!N<|453nkakwwlM');
define('SECURE_AUTH_KEY',  'M+8~@qL4&,Lyh7a@>/n0.N^;qC`9YsSIg.AOy;R.g/)C|vbYaxBLGT,==k+&D^Kf');
define('LOGGED_IN_KEY',    '-Ze{X)85Lk|,.S+}v8mM~e|4d)HYP`?kJ,)A}82%CrN$-J}6d%RLMZ-5S2!7UGg7');
define('NONCE_KEY',        'n)[[BP9<`LT;Tw[b>1`%<7O$cqyXd0E-imfx@%I-^L(z6N=[r]#0h}}<i<y kpYE');
define('AUTH_SALT',        'X|h-e 3Z*8~+$51Vx_yCw LBMfAL-W1TgKQ(/9c7z/.F~m*_]1h+MOi ky$nilQq');
define('SECURE_AUTH_SALT', 'YI]FV^>0eg=(jN@4Kohgb70-Yq}.e&-|h&kCTdgg-Z8tXdV^oaC/|4#fJcJ{[,0d');
define('LOGGED_IN_SALT',   'F4f2R>@.O1v%~P +~@-/]{3aD#ND)*PcLj(MK7)oamnF]s80O#e`s],*u9f}1LV(');
define('NONCE_SALT',       '>J5x26PbIsUcA7-RlTkg_;q74]EyftGp*OOKwnGA-1pa5@95wn&<>Hd?5+lUgU<?');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';




define( 'WP_MEMORY_LIMIT', '64M' );



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
