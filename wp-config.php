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
define('AUTH_KEY',         '{|q?Z}[ ^NYX$r|G^e[M,Vv`N5^q(w`LQd-o@giV&}o64Uqi bbDWnX #<(@{5E;');
define('SECURE_AUTH_KEY',  'v!2byu7{Yp$?^G*W<xwhV aBBX*>KG=/Mf}5NHag JRvI66;9Y{JMO.T{s79L1K ');
define('LOGGED_IN_KEY',    'P:hv4948c>!](wcy{l*Um+Nr:>iP>G>G3ccQz%d]Vt/pid.aFqj5B1+*DjjuM/}1');
define('NONCE_KEY',        '4)$K3fej(0c1h6{q.3U+iSK?5u|=Xz(%Hz%I_zsc%ce*-2zF5I_%U}Uf}c*8v/7Y');
define('AUTH_SALT',        '9$cci/.Cc 4pwve<|;^lQNG[?}ek7V*&oC*xL`=6RAG@j$Zj7VDTysVJo?+/--AC');
define('SECURE_AUTH_SALT', 'm}+3iW$X!xiqBr`2t?M-6uR&HV/kv5[8;Z[xZ#lCCN|2($q0 })LB(c<]S?9z!3q');
define('LOGGED_IN_SALT',   '[?d%T[<?el|CdIc$0~:nc(8( !9uGlUG=;0f@F,G^@_z>Z_9%V@fLe]AD2r HCJ0');
define('NONCE_SALT',       'o Q>M@,T~c3XpDHtC.Q6qCCO#l.Y3-&+q!LP&i*)r:;Vc`D}:Q>?=f6u(|$xp?[5');

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
