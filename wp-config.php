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
define('DB_NAME', 'wordpressTheme');

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
define('AUTH_KEY',         'ydgo+&)C89NMMsC9r+cr=zX}p>T,e#6gU]L7IbY?L0K8Bl@}R@(td<_>b,)1AXr5');
define('SECURE_AUTH_KEY',  'O<@>7:W?2Sh5=PljDFhN_1K}C`^A 1S(}zVF.=A<N4l-=#1)|nbK639R2nK.SVOX');
define('LOGGED_IN_KEY',    '(1naX#K!`2N.#E7$fe>$,^ekM;+tbo@Pg&(agDG[BW:C }*]FT9n,|i6SN )&)!Q');
define('NONCE_KEY',        'So}w>,b-uu?|7I(BD@7+0m^6AJp%-Cl=)4foJh<s,1-IJtSO!T];t.Dqv+A]xr>C');
define('AUTH_SALT',        '9j@wq9w}vnS%KEk7UBFv#sLdj>Z=Z?0#sIN~$,?_{HVz#];Jqvyp<ULXK6 0C>ps');
define('SECURE_AUTH_SALT', '#T}T4qa,,R5ObIFjk2:l93ARAnI5`Xq~ClW=2%2OP]|2Z9oy_3[hljDI&p|x$,en');
define('LOGGED_IN_SALT',   '*G6Z*pCgC.gEd&=>3lC6Fc5I$^r,YTG3GVhl_gep55-((Qcekh,^f}/Jv+kTaUa<');
define('NONCE_SALT',       'iTQzIbouex=f=2jf`_7S#3e*}whPqa8;W5>52juDyUzG~qA?yLMHF]@w,{J,F!aW');

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
