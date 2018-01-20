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
define('DB_NAME', 'jwaccountingnew');

/** MySQL database username */
define('DB_USER', 'jwaccounting');

/** MySQL database password */
define('DB_PASSWORD', 'Datos123');

/** MySQL hostname */
define('DB_HOST', 'jwaccountingcom.ipagemysql.com');

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
define('AUTH_KEY',         'B/-w-Dhy @L8|+:)l!LgmW< Nrd&YS>~=ch|vE6A[td+p3z52V Ji~CQ%GcAYo 3');
define('SECURE_AUTH_KEY',  'J{*k`;pL*G*@{`87~B[#!xZ+`[j6o6q>D<Q1!MZ-h?X*E7D8PkrSz(?*EajGB0:s');
define('LOGGED_IN_KEY',    'A-1XOw#8jGFwWI L$<f][] NRs5Z<{U9R?>rbX~N_1H`6.;]}<Kt q%Qi8^KFQE6');
define('NONCE_KEY',        '9K>JeKM]N8+zMopiDombw7G`N:J/3>q.j~wfTduE0+aD*wEk$/|i@rWqD#=bWCGJ');
define('AUTH_SALT',        'HCUK7;qmeXjxt.>B5]7N,*yV/gn52Es.62!>h)3_: )0>,h=3X}b&Y!C2,dfrGts');
define('SECURE_AUTH_SALT', 'D=u$iYuWzn)szd_O9nx;Qv7zf^;gB|0yHB9#O7z4k=*K$^xAFTis@mffN/>IokP;');
define('LOGGED_IN_SALT',   'Q8QGg#zrr(FoIz&HV~{/S!@aKb-f;59GX!xQYT<j?4Me4UCPgFng]!^r);DFr5R1');
define('NONCE_SALT',       '4t.$P[rPM;T4UQIT6!/8#Aw@L{X6Dbq!1gZC0b`s-4Mu1E1pC&qmHH9_:EALFx,5');

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
