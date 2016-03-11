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
define('AUTH_KEY',         'B6&}[HF!txzxMxjO.AmpGd4W-S!66~:!?d`1Vk{fd-v:gdeMlh/^621okudk-2UM');
define('SECURE_AUTH_KEY',  '!2n%2.3 8>yPRalZq`b&sn-at`=I3/w!!+<5)C-Aa+]Im}y/=F#$->7m0u|@-Ay7');
define('LOGGED_IN_KEY',    '+7yaY>Q2tDnw-`p8o^*c_,NgxbD+}(X1bE)_nO`$b~`Xk;?T?RjY}/|!`4^fc^!r');
define('NONCE_KEY',        '%[!Pi?>+ev(Pn`9Euy%2 16qD3ra2.v+H>:p|Wmd4C1Ns>#i!237`EtPhj~:|HV4');
define('AUTH_SALT',        '6MLQ?<4cB4R&Xqs*prm};nwcPD=KiXwJy;%7lBrYkkq]WJ-*my/SFYLA#GDcfq/&');
define('SECURE_AUTH_SALT', '0JD>%2>8)`n(+oKAjch}c| eP[tW@{2e!K?77BrVzP}oVQaRax#MK[2+{^xn?$hI');
define('LOGGED_IN_SALT',   'HK=@(:J$3x=GJZe:Lp-r 42`X&Ip&Y-C_TOR^{ax[Cg4H+&GmP]mVDO+6_Lb,6>O');
define('NONCE_SALT',       'wJI(0cY3!+b?gh|{7MZcw C,1,zT7]841xnHe~tIVse@,H.<A7k9%?~oT.;->1!K');

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
