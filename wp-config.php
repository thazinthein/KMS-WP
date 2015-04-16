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
define('DB_NAME', 'kimengseng-new');

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
define('AUTH_KEY',         'EupoSC=rLG XR:p4{~7Hibi5 ^u-C]ehKccw;$+YKjy=2]S2%PxR?PdJuB+->G5|');
define('SECURE_AUTH_KEY',  '`Y2--7olwRQbcHn&%,5Y7_mW[?6C^+rLAq1fQ=Pv^S]`VYsF;g|SAM=xN|$`8F&A');
define('LOGGED_IN_KEY',    '+N6;Bp9~i99_Iol3/S$9c&DWf.X,aSt1*7[z5j}W=-_]m7Qc*zY:+`T$`OpAg%%[');
define('NONCE_KEY',        'odW-%xOw/#~.?BM4FOL$u3DS@au&+A#UFxaUDEJ|kJ{(giY=Ntvf{<!@vE^Ai-^<');
define('AUTH_SALT',        '9w1AhJQii|~S#-0U|?u!Rev[@c_ nhkb+wSQZmG_3l}{(d6QFF&.9OZQgtP=dV [');
define('SECURE_AUTH_SALT', 'IXxk+f`4DV{OjrN.c`-@8Mye+J>K+i9WviX2Yg6w.7f#mW0ht~~Li;gsI5Oe|qw$');
define('LOGGED_IN_SALT',   ';=-Bd%@dP+<r.{+`&%bNV{^vqKiL^u7,K]|//g,|~3zbV83m7NN-K6Olw|U+-&xE');
define('NONCE_SALT',       '4(D/8jum5&>X]^8HnEE7I1Dw4UTkW<.m|7q-hI6e|[y-TG:I@^!0Gu-/V{+|<:f+');

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
