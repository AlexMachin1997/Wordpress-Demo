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
define('DB_USER', 'alex');

/** MySQL database password */
define('DB_PASSWORD', 'alex');

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
define('AUTH_KEY',         'tMK}& |:q`bK%Yi.xh}SrcovwUp:;;#CNR#r6=zZMWW`85ex_LOTx9nS$KvuZeC~');
define('SECURE_AUTH_KEY',  'LzB,lc>bJ(SX AGa4HOVUvX2GGBP98{zlfHwqL@CmP_9!VP_QgB:HrU1NY0P5O&I');
define('LOGGED_IN_KEY',    'g2]:;xK6qF}*`qrvH2R/Mhcn$(t< D#YwezK|BJ+@`d{y92JY#S_7Z<X/3YU)B:S');
define('NONCE_KEY',        '3<h}G7H47Ugku0v ><oM8e$*/PW*@KXRDB_6RaOfOJ@0+k;eqi422c72bp8VrHpm');
define('AUTH_SALT',        'BL%^q;,f-B-|eViKoxrrF~t>(67N>~fA9Oz5iZPTRtjUUR}G{*_u7Fz+@,m$N>Zx');
define('SECURE_AUTH_SALT', 'ocGmKU7=b;}$[?gwzB%p+[i(Xw!CzQiZ{%t>p!tZ2pggx1^(Dn[V&9QaLN-WjZ+=');
define('LOGGED_IN_SALT',   'juaNeiQ</5 DQYE!oHjGgGT^>;XU{=7QZ0[)[[U$f^ekSpJwThRsV4E=g3<-rm<J');
define('NONCE_SALT',       '}Tlw?OG$_[HvfSl-q)vA [@;D5+=aHQab[+958TIaDdk>>m@*GQTb`*^i;~x875p');

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

