<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'test_db');

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
define('AUTH_KEY',         'jGlDNi`K?[lY~`]1->|UUdbX8B.{a9|lJyvl5(V_~+|gDs^AOlA4Uo|R-(`~(sQF');
define('SECURE_AUTH_KEY',  'w-e=T^}rsu4t:(x[H*Z)S&t,U9Y2q, @[rV!+A9P{%JN3%zS52+4C;)c~Ro#08X3');
define('LOGGED_IN_KEY',    '[>=Vz9|#x/9TPloV8(VM4QHR%*f~4}}A!gAA.P9^^)onS.B1LRkm)/d5!(<5=-Z=');
define('NONCE_KEY',        'K*$i-aHH$&/LR+-y4,/H1U&1N&a0JW0XU*-o]Z=WgWX]Mz+k4ch_)pXVv:-R*)ku');
define('AUTH_SALT',        'g]^uXY2IWj^..vgT:/hi=D`qD1-9I5s6f*#z)^X)K{ocBVMh*UBuxlMn[gN;&6B{');
define('SECURE_AUTH_SALT', 'W4.GlLd+{mD|hp85y[o}|1Fo@sa/[-5tK-/u||1+:m+4P&bf#_+#=o8PF9SAe=B6');
define('LOGGED_IN_SALT',   'SD_(%L7Fr:Rti;fR:!#vsRvoXBe+8)0JsuPYH8k4:ggp;z;Ky^U(d3!5,AOs<I|b');
define('NONCE_SALT',       '^IkDC<l$3|qTn}gm*f{)*69K{3$a6wlFZ?[mEJv3n.o@%8NEO0I5gYkeiRb0/d#s');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
