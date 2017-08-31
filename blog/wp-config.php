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
define('DB_NAME', 'astronline');

/** MySQL database username */
define('DB_USER', 'developer');

/** MySQL database password */
define('DB_PASSWORD', 'Developer@#1990');

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
define('AUTH_KEY',         'uI,~w<6|r)Zyr`F,Iu]UTwf+t=~__QnP S6Vvdt~s0l$%B>aq=mMI9[8L/}b@k69');
define('SECURE_AUTH_KEY',  '?a&{/!J#41ol5LD8?YAe!>cP<!Chbkd,998uo6j~HevZf8/aAJTo>8ozyup?&)2k');
define('LOGGED_IN_KEY',    '6te#0Jid:e9A4E9eH+0Wq0#rNT,*`B{.0@jq+1u6&)q5L{fT#{XA-RwNWgC}P{4h');
define('NONCE_KEY',        '<S{}v7S9U_^0A*e]9$:MM#Ve9Kk4jS<AyrHi+OU2bwR93dhx@_)s&ymMq.dVp:jC');
define('AUTH_SALT',        'K>R_VB]S<AmZ.8`9.~&D7(8nq@+V~7G(ezDNVY-;`<49Yr4vH`M`@v/4KNq4:qc>');
define('SECURE_AUTH_SALT', 'c AHrE2Yy(r=gRgAd 4+#VF:2zT>m-?y*W9/H+=z_.;};TzPEGUg#5H6m WMtjCr');
define('LOGGED_IN_SALT',   'RlR^(j<.E^00`Xa|I,DJ.XuULU{,I2}J;.;KNTMdI,iP3A$#|>vaEk(nR<HBC(M?');
define('NONCE_SALT',       '{;d;e{b8:~RcM?mI}vG7X*ZS{Zf17H0hFaYA]n*MNhX-Oe$tPi0V9U;#CNOb0siP');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpr_';

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

define ('WPLANG', 'pt_BR');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
