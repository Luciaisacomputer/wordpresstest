<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'test');

/** MySQL database username */
define('DB_USER', '');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'Hq=ybA1b5|N[IK[D*Xc14{fH7i`-^yzfY)YR+N+o)xE!JfR[vEfKP}$;xpy[|,Ji');
define('SECURE_AUTH_KEY',  'Vj-]kW%wH3.zh+Y`t)d~Lxa/2J|s$w,GECI!OCtsJiWs]6)LTBoHw=Z-xZrzdB9S');
define('LOGGED_IN_KEY',    '>*/+qk ZLPPD_9sfF5:&,pMw]gH~-MSGQQOxB>iWS>;^5_8e#w%hk0]]il6N% (M');
define('NONCE_KEY',        '/;7`$nLP<u<_@KN.%L7~I|KI?szYg+#vVw&)4j!._GL=Otia:}Jy.(V1*;JH)Tx@');
define('AUTH_SALT',        '|GtDFU:+8fXn.*m2KzXaBIf!5oXkpWO0#:i,Altn9-JCYXI9ZY+eB[jftR+kGm-)');
define('SECURE_AUTH_SALT', '<_Vy/1?#?lw^h]u**N(0YxV]eC21 _;+b3z_dlYdNY5;)%ZlO~GE4pihQSeu^s|.');
define('LOGGED_IN_SALT',   'XF],5Q9nWLEmEZJtfR/)&Ii^p^H{6mkX4!qJL!tNs;-+?w,Mi@vvDfQ(I&<g;W4n');
define('NONCE_SALT',       'a+<tQpow+Ib5mDf3jsG}|Y|:4=?@EY4Wb]qehsck 9|flIL-pj.FAM3pgtkLpJl?');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
