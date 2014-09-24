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
define('DB_NAME', 'travelo');

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
define('AUTH_KEY',         'a-#NG:Yk pj rOxs*bf36#Ob)S2=vLLSUkYS:$jU]])#L;-8<v5VFF0tQ.$jM)!#');
define('SECURE_AUTH_KEY',  '`^}50WqApx;Ls^ti|tQ0|S+N+Bn;] )#,$77RqYT;*!W|qlO5T%A|{wl8NUdQ~}4');
define('LOGGED_IN_KEY',    '9QP(IE1]Sh;hjdDg`Z4Q.U8GX^TD(m*(Eg2?MmKnNF5<HM3rY0}x43x.m-y^AC*^');
define('NONCE_KEY',        '6GO{u$|<M?g*:^~Y:XTO$-r-Wg<o0mjEA?d|Y=hB7dtk-pd9w)f+!vh3L$@%_A*:');
define('AUTH_SALT',        '}6PZd*@vo,8lc?X<_c|17:nF&Za`b$/#Z(.JECIUK8-eFYj|,_Yu{S+*ZDc;g1}~');
define('SECURE_AUTH_SALT', 'N}K#HjO>:o]Rfb;%YE|^z0EZ^!|}M/_c$7Ahikkzej-cj;`uI|/-hg s8hzInkmM');
define('LOGGED_IN_SALT',   'd=tx/$m= @^-QMW L&+jgSjXrDX_Tqy+v/S<HU=<wVw#]6!n:@,?rJw49%xUAiV{');
define('NONCE_SALT',       ' {GgD mTj*flRrse:v4mhb4NS6-7q|dz(NtMT^XRHK:+$=13;TUK`~Q*JHb@t(Xo');

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
