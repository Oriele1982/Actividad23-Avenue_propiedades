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
define('DB_NAME', 'actividad23-avenue');

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
define('AUTH_KEY',         'A&]2y3]x-%b2!-B]K~G2tcA5S}x2iWHMF61j5^`olgfnZ<j)*DVCr LCDjoqXYh7');
define('SECURE_AUTH_KEY',  '*D|Ym-@Gnm5xHmg2+n#62:U_}oQ_:8s7qRu2]:$]1fvjt[;!>gK(M_U+S5Mpj4w[');
define('LOGGED_IN_KEY',    'IY*w$^!G0hiel5^hRqI1efC2NDLo)$o}1r=GB(pbE=XY&Tdy>E6a**Q,E8~&%jE3');
define('NONCE_KEY',        '2<[e]Im-`=]FB]FM?MT,T`5e|y+(&XM.lBq0n8%&W `Vr;7|0|NL6=*Fn+Jyvm6W');
define('AUTH_SALT',        ' %Cv/C>gllK>Ku:UySD~49Oj_9W6va7}Dc,s-~p)f9ddsWI](O;]NruUpQ,)k|yz');
define('SECURE_AUTH_SALT', 'u*h(CuR=gtVquODs6G;ZKojFZM7&;f y2vGab/$,3W#PFT*ED`bRg/NUx5{IfX{p');
define('LOGGED_IN_SALT',   'i0tl2~ZE*h;ZyC@=P)ut {Wot?hwVyf!B}d0-Hdps(XZ#Q$mp9yu1sbA`cZ<ff|O');
define('NONCE_SALT',       '~&r7X_){?yFf,b*Gl$NuSLHZsP;[0y[.5,@R!QL$81S4]?>Mhp?9Br,loMY&Pm0H');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dl_';

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
