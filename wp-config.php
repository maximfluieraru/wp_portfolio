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
define('DB_NAME', 'u957979891_wp');

/** MySQL database username */
define('DB_USER', 'u957979891_wp');

/** MySQL database password */
define('DB_PASSWORD', 'Mr79294984');

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
define('AUTH_KEY',         '%(c%V^+buQ*mLcR+!+$B &6+z^86|EhDrh/+Gs2pz?xilLnpF9Uf]<,3yZ y(] R');
define('SECURE_AUTH_KEY',  'axv>i(K[VGXPL6-=xsm6Rou=Zbbva<q=-hc5-QTROV> 2W[Ps?q>.I-p$nbX-%j1');
define('LOGGED_IN_KEY',    's%}fESZn=]9SOv9F6]NK+!]W {(6gr+b8l+314JenlqTA)`Mp]76F*8h+:v{1ila');
define('NONCE_KEY',        'HOF[1Y`+3<x|su`:^5hQH,jfcbOC2hWvdK#E4jwhcJ0NsA_6|&U?SEkRO@||lCvo');
define('AUTH_SALT',        '7IYa-8D!M-qtAchqa@v}Qvk*SwZ#?_*)f{qOB.VR@/cra^Y x:j5EXl*h=L{k*ew');
define('SECURE_AUTH_SALT', 'n[^{BmV?1f3c#ni%zlBXQ6D7}LnQD*EWG-hO6F8W<|oJt.k+Gc&m5i1w@K+{N)R+');
define('LOGGED_IN_SALT',   'LtXs%~b4R>2*vO75VH>#_7+--pK>0+xw0;!,C9nxBdpz!.L6rfewb]s<pk}*ooe$');
define('NONCE_SALT',       'k^|:[N`(2G3-*^Rq7H0y!O|t|X6{YJn+km}[gi0jz`[t&aV/@lU~w+ (N8Syq*|5');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_portf_';

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
