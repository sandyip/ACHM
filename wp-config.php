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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'achm' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('WP_HTTP_BLOCK_EXTERNAL', false);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '7OSS.Am[4bf&*b<u1`bpzwXJKV@hgA!8VONs^UrxR`8T41mXfpXus&z*#>BB~NV&');
define('SECURE_AUTH_KEY',  '^[c_?+,SFkz4nMS+F}tux>G+0eslEqr9B|1eAwkH`.%F$}Yo ?Taa.Cgfo4h9 k}');
define('LOGGED_IN_KEY',    '%LXm>%4i&99/`|-v$d:N+k(i$a;qg:A&S!AY<PSYSW:vV=G~9LF>#hiM,|v1:SS2');
define('NONCE_KEY',        'V9V&>}z-;~k(+Qy`&|,d$TZ_/D_7IA#XG:v|4CcY$k 6{L<W``9((4@koJ|98/j$');
define('AUTH_SALT',        ')bX1:17$sx;_TUfT]=R]J8c/=cvs5el4VAGniD82~C]Po,X$Q-Ir,{U~GwbmLQ> ');
define('SECURE_AUTH_SALT', 'Z$P%y+<n|aU0I9]`7]][#_dD(i>p T`G|Au>j}2w ipmcXC41^8QuM}7]VMA_U#|');
define('LOGGED_IN_SALT',   'ONo-3{=^[w!PdpW8-,>rptRs406bhNBc/2Wge2#oNl;`:Q06|#kpDWI8<I(W(h;M');
define('NONCE_SALT',       '@l9PQ^[?{|Ih6<+2?tlxh+t+.|v+eMwM*TZ|vHZ:pgCH3hA+}SQK+4Ubl=j:)oM`');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
