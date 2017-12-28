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
define('DB_NAME', 'thitruongcaphe');

/** MySQL database username */
define('DB_USER', 'binhnq');

/** MySQL database password */
define('DB_PASSWORD', 'pw123456x@X');

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
define('AUTH_KEY',         'H;`p5$?xi&UQS8!Wnd,|P%apDl QuJA`f#D[Zo-TE_/V6_BP5dI78R~^EVm34 )f');
define('SECURE_AUTH_KEY',  'Kma>OH,>3$$Moq[+wyW?!f2~y%vOxWE|S6#-kqbZ-)}_r{hXSw*+.XJKMv-EO/sn');
define('LOGGED_IN_KEY',    'NrcHr~b]XM8|vIrBG5DGS!By;H79-moxT6d+-78)O*}|9*C.?B0xFkNC/s|nE,/5');
define('NONCE_KEY',        '{/Lle)+]PB%[UShU)DSA|BVK0?8_xdKN+v0:9+ PzQfvadFS=j+GS-YF~#FH;e>/');
define('AUTH_SALT',        '(ay>m:{t=3eae*TH2u~xw}.h|kE8]MWqs%prbiC3ERs-cAXRy/+X>ftTO(8})w}m');
define('SECURE_AUTH_SALT', 'WmCfh+v~ZqkZ#`|li{PTV(>;>W1LRyUW:[}U5j`7W_oymiy;;3BlA^zqIuLv<O!}');
define('LOGGED_IN_SALT',   '<4+1$=Ki~EB%D[DVQ!-M_o3.}hYAfl:XjDSXL9o&~+#oDXC)v>M0+ey+4x):tD|-');
define('NONCE_SALT',       'Mw4;8&kWR.7*Te?wtDH#!@n59KW&V-}H+-z.pU!v2~gXO]cz|h (z|#M{@iJ|faj');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ttcp_';

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
