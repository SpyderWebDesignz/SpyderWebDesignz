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
define('DB_NAME', 'db_Spyderwebdesignz');

/** MySQL database username */
define('DB_USER', 'user_Spyderwebdesignz');

/** MySQL database password */
define('DB_PASSWORD', '3YnZ3yfDxjOizI6K');

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
define('AUTH_KEY',         '{aj(.RX[Z3D*[(EL9/m]^tkXc&%iUxQf]p5AHRnA?4}t+7Id`WuSh;Wel1{B#sTH');
define('SECURE_AUTH_KEY',  'jI{GbExOh~:.M(%RN]J-~jHW8R};&>xbZ`If>*J55=?t# 4mwe[4%kFzgWmI4J??');
define('LOGGED_IN_KEY',    'YS@%1p([Yy[W&lbTRro/yF?#R13dL4gkc3D>0s|tqpq`#-kf3.9uU#*:Y-E)$i&N');
define('NONCE_KEY',        'y/6laI#98S,D3<wnX@sCRy.u7AV#pf;{d?PU+m3yk/%R|^dnnP#FH3a)49utLyI.');
define('AUTH_SALT',        'N=p_Tqi/x/`/^n2ztKRxt4UWg<}1=YO6K0h9i),F=]X%wWd9Em/8HAI#KI{9M0dx');
define('SECURE_AUTH_SALT', '?cc1M&<E`x;O*@I7lRaFg/Ygbs}5hpjxWjEv}F8Oc/!+TooCdp,Usi2m-GC9^lc(');
define('LOGGED_IN_SALT',   '~C{~Y;-<<HVddb!OzV}18>l!c*Dc$-nT!Y?LxQ&~if#&.F;_)}TCk?aU:sQ#EdI,');
define('NONCE_SALT',       'nGj:=[-*lqj0Ng|all`xz=uw0<QEU$jfkJvqZ:7=z/kz6!BG9)!W8SGi-XYZ`kN{');

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
