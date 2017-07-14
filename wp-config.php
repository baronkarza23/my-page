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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         ')^h5(?$~M+J`*-+7^$n+# (Q)mEeblMt(ZYiO7G@!5+}>nvI,c@A?&8Ndl&gm!/G');
define('SECURE_AUTH_KEY',  'j0&3 cpVyi/Ir[K,|[%m%d.@[x+`SksE4[()hjlt;2n#gXJj(F5-Rr#@~!Z-GWsE');
define('LOGGED_IN_KEY',    '+!d$UK[.q/^TBL4Kry=.>+(Ec=Tewk2icT=Z_0-_{+qY]^9{MR;GBg[6s8[L>_3)');
define('NONCE_KEY',        'FM>B!u,`7jj}<hZj|W*c&re0y|{X<x|bhN-LKFa9`qQ[cL}j70YJ(7F7<|@>f0&1');
define('AUTH_SALT',        ' d1gvb&A+YYFtb>vJ5{`@xO*<]Dn:kgLtyG5xhk)]_10J#GZ_NP~(f!dPn2[Ob50');
define('SECURE_AUTH_SALT', 'b<na-g/MSde6;KL,w_=cS7 RJ8CH~J-~>KM|Q-<fX.I/TM@goPGs*a?bh|vB.#wP');
define('LOGGED_IN_SALT',   '6G{s`dDE-1.Cz47Vc.n3?@PbmT]%8)|Hr.5v|#i>:Sug<1q Av>-HJg<n3&6M~&+');
define('NONCE_SALT',       'ypB#-^}HoI7@Ug2dg// /Hx.rLb|]a`Xisd#W?@#TCuu@b#&Rf(;+V43SYnItb/O');

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
