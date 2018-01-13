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
define('DB_NAME', 'cpportfolio');

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
define('AUTH_KEY',         'b|g.7&n~ISyGsw*?irN~5;D<J,}EgIa>W6JI8NGV8)+)q*pxF{?YIG2Uos41~IAR');
define('SECURE_AUTH_KEY',  'Y.De#>xF{uK@4KBGZLLB&GF[=:c~e,;DsOt2|0;~Av,,1#iRP|u VfDEYVY?$+wP');
define('LOGGED_IN_KEY',    'U/mQ(5ebtiBoZ|8W;XP1tgfW`3+ohMY5Zm2B.Hb7@Y#kC^zC/@lD5D Tx|Suv)0E');
define('NONCE_KEY',        '+7>{Wg9/}@^&cJvHMb^}cla}!<$ pe{42oGjd5He?+mz53e 5-& T55O@Z4OfgW,');
define('AUTH_SALT',        'y1Sb&8O}elt_eMTnr*j=RPkMX$<MH)[pDjc//.Z_,P(wGUhrF*Z-kl`oz9pvG2uk');
define('SECURE_AUTH_SALT', 'ow#JeV`JS8)]~65^bgVSLH #N~`FV*AnL^r1BVAk=b,%|*K`6SB?)Rj-Qdytp#.Z');
define('LOGGED_IN_SALT',   '}}%wO%erWaew:Hj|YAa-X}0B}N?N8<;wugyvG-+4@6do!`A}9`o|DRk-pg344-Lz');
define('NONCE_SALT',       '3ZNyM!2Qb3E*s<~C6hc}Qn;UwPAm_u`(93j74;hv|nJ`iI4v}p P*RQyH1YCABf]');

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
