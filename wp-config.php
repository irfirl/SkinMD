<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '=W2-d<7HkevZdxl*1-{$L57V?-/!>{R%c[@ifcOkw!XrRq/|M}5.-5Pls9J1y%uX');
define('SECURE_AUTH_KEY',  '.gT fP>/@$8vE_z,e$T!,WdT^hFPF;5*y])VOPLyIY-4|7?}=S:Y8Q1v;0, r}8/');
define('LOGGED_IN_KEY',    'l)=l>dBf#i.))BfJRp+F Z/oB?ft5-3XMl=H!)}jp^`,uZZAN@wzO|Jsiq+!%$#e');
define('NONCE_KEY',        'VTxg5XP:)SIFuH],MJ~]<]o,PR3N+aS.==C.p}a~&a ^Ry>1JH|>UO+1tla 4v|s');
define('AUTH_SALT',        '/~RJwkl|V:P@#&)yS]HVl_>V2UoT weV|RsH2u;Y,ERB)ceEeB[bw6)A8@Hi8.,C');
define('SECURE_AUTH_SALT', '0&IvjL$Yzwn_*kGl%~lm+:y#VS/h*A<Ni *uX=&r6uuzy1:.1Wiel*J3>M+N78#w');
define('LOGGED_IN_SALT',   'aVIo<2&i|Y-;T-NIJ|CRtY~OIB/XPVeTBjGR8A(k-,rUjc*]Y5iBgK#rEg*vUFl;');
define('NONCE_SALT',       'aOwXI)a?p3cUA+B (2*2;{%G*gyP7_DjqZlPBXr@n5:(nUQ?s3?:Kh8y?e)T6{Ke');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
