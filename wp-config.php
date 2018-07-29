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
define('DB_NAME', 'wp1');

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
define('AUTH_KEY',         '-Rr);-^Q;BOb:Xs~]5<~U+`hjfK&2._e/>qu)k%/xttj~|hl1<k9tm]8J3A@Vm_m');
define('SECURE_AUTH_KEY',  'f*4&nLT@9|W>>2AbFH[m;+MG`~O+h4U@c.hv#,)dx@=Ce**fGjDNGzZ&} 8bDSl$');
define('LOGGED_IN_KEY',    'X6M4Y1XC_vjg~/|Cp<j&w[wI=AH=WY$EV-GQ!jW&#iZ}rz.CWh}Ne*h`Ol!99/Q{');
define('NONCE_KEY',        '; ) @d37uxV!RFQc-7X^)MJ/i8ttQF;2I4Wr),%jcKtO*6RB[xZdf!G1.|uK3)l{');
define('AUTH_SALT',        'Sl`%I1%zgfpz>S@Oa=YaL0_J_>[smy_)&vFk)}?Xijbu&S%lEIk7O%{e3@m (})T');
define('SECURE_AUTH_SALT', 's.  b&Pk2qJ8gp`p(6i|N_-+<Z(I,{|qmma8vhiQ~r2_BPQOLDV3q-)8&BXgpI,I');
define('LOGGED_IN_SALT',   ':50!#,JI)?npzprgxmnM^{>KbV6)HGKv8)?]kC.p3]`b77hYhw6#4umV7I-T@;hL');
define('NONCE_SALT',       'eP,N#`MhY1p38I.#%IN$^T])JZhoDB[h6J.QvNs46Om K*x^ -UL^?znHW%YR^LV');

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
