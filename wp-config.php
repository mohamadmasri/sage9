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
define('DB_NAME', 'wordpress-sage-1');

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
define('AUTH_KEY',         'v?db8K RHDV#xn8R|NOItP`-*Tv7a_i( XkkyN6Xy*QIywQ!vkFp^9Xg+#@BdrOG');
define('SECURE_AUTH_KEY',  'pL(KiLf92O{ Zbo^?ZImwWWm5_ZZ!8GSY$Is.J4Sku~i{@|O<SK}hk<Sw-~1TFR{');
define('LOGGED_IN_KEY',    '%${XO<+!>+=L5G[p3b;`%#?O068wqc~irB-j^H4G~sPRG*>LcNm=s;>3L&0K<}B@');
define('NONCE_KEY',        '>{p$xp5*!jV};D)DzWf{dyA|:|%:(cUaRl i!z9ct}+I$d};*a^IW-DNt5Y_H?ey');
define('AUTH_SALT',        'dx,{lrs?i#YdLmpW(A,Hed%HLE~,$Tt2>qHak;ze4EA32IO:J*(%o|;GG@<3$n+B');
define('SECURE_AUTH_SALT', 'M KL~ N.e<,*fB}u;o~vD:@Q2j*..%,7@M>UVLpn~)3a=g+/h)(VxZ$d7pd*h<.b');
define('LOGGED_IN_SALT',   'k=FKM!3WvP&wtQi8AJk; b0C{$[06qFBzd/5}nDSS:}Ri^5 xC<duhanGRpm#`+=');
define('NONCE_SALT',       'R/2)sg !^7J{.!,LdHmC=xcN69nAG9iMBY/>7nmi;*aiNA+~KkykJDW>^x8i*MoV');

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
