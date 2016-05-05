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
define('DB_NAME', 'alextryo_crosby-rowe');

/** MySQL database username */
define('DB_USER', 'alextryo_admin');

/** MySQL database password */
define('DB_PASSWORD', 'alextryo_admin');

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
define('AUTH_KEY',         '_NsuFYe F$80nR%NGF{JP0#P@>oKS[hXA=H<3|H&$4H*lunufg0Ic7ho<U~,)RBV');
define('SECURE_AUTH_KEY',  '7KX;6Ej{]{i8tU}DFq(7z%BsTq;W{Gb})kvQ8CBuNPb_Hv]U+;T4 TIt>@>!@~UU');
define('LOGGED_IN_KEY',    '!ELCqz|q:7q_!A[4`141dkrx,UMX#R*+s0O@v}}euw3SGjAw;r#Ig|A #_?y{OnS');
define('NONCE_KEY',        'WO8fV}=-&k 7a/@o!s$9A/xF{~(1(dJ%Xu#$A<Z?m(uQsX,byRN$2V?.f6sJF1[=');
define('AUTH_SALT',        'jZ%S[?Rfn1s6}<uwqYSG$O}ovS(2Mu&,VInnhFj[#~-F(t!T>mOifA2[R1:Wg&;7');
define('SECURE_AUTH_SALT', ' Cw&x(ZQnS8c&K!u)vqlP+mhJs&Jr$wM2*O{eamfx245bR!|]p=bAOjiz1xt|X#d');
define('LOGGED_IN_SALT',   '2&8n^L{oMI<`eKWgF%LGt{.S)}8I[3W6+wt ).r2oKS}w@x.&Y}pffMx`Eug{yV1');
define('NONCE_SALT',       '#<dm<8YE4;n^jM+=<u= kZj[*7(3} -t=_<0h+k[Zlf|hZGka$H>z?UawI@r~p6K');

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
