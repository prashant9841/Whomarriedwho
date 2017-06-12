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
define('DB_NAME', 'photo');

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
define('AUTH_KEY',         '9DbdMpQ~tf3pp0>GW10HX)nl)[~Pu92%W.nhWrW7`FV&{0<p5D=&7(@qUa!|Glp1');
define('SECURE_AUTH_KEY',  'aIkhMtIfgr)dJ-bEX:_?2>Synnyz<&iAORY UAje*2]lTLz@_B`MjEKaB}@2A)OK');
define('LOGGED_IN_KEY',    'OE=K_&zqmB*Z~fL:]=nj bIl}w=2i%^I fQ82%2ZeCc$B(R]UM3=NdiTxfX40}Zi');
define('NONCE_KEY',        'i{{4qH&Pj1YZ.WHdu6jJdxJVrkB+Gv|!yc&~@6=AQil?aGmIjjjZqFh4Y6-fs,aY');
define('AUTH_SALT',        'x|gYInMI=B!QwqFNn.oBQlps2A >Vv7|[iR]?.~bWGU5}Y&C(6Woa`6!sqEA=*Hh');
define('SECURE_AUTH_SALT', 'GE8pqxu,yN3g6Pt[L*[0)W9BwpEY7J(!K4/ow yPw#pmH!}Os/T9ejMA?hJf_t$m');
define('LOGGED_IN_SALT',   'x<?Q%G%&<)YrCBPH;{R%v@A:qR84)NX]0b4xs=*P r.4VgSF(`}N(/pC_iIm)%*t');
define('NONCE_SALT',       '+EIA;I>+e}.[o-Qyv3BUiNf+^(HU!8#r6nb9nT04ln8{dus[2XKtj!1es$5R(sQM');

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
