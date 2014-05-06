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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'u,/URTq l_x;Ku1cQlL-EKc>#SZ+-^=tOyX,0H-91bAwt9+=ZVuY8/kGi1QE].+)');
define('SECURE_AUTH_KEY',  'A_FBvT{(yz8#si|,(TN? f$Z|)~t+ zaSLoZo*9-``$-+=-:!?9&)S&luP)-Z!GF');
define('LOGGED_IN_KEY',    '*!/uIs0H|b2PH1VP+5]!Jc6Y=(<*L0|.qN?g3x&aox<2pu]_k,1CfSRJK>:W.e+`');
define('NONCE_KEY',        '{;g%iW@SGSG0i+T/=}gg[{64}(X;Mq$HpK,~i? f!5HQm;{K]nw(Ex37!X*a+pVM');
define('AUTH_SALT',        '.d$g#y!5fX;tM~tdni[s-Z@jrdK3a%pOdrL/:I=]1Esu[R?+no38I;-dSUe>|V7n');
define('SECURE_AUTH_SALT', 'IZo_6Pxr3J2YOh$_N7U}12+`:h,_P]nkQ.ePxKQ1E,J4`tf7<Q$6e,IC58@[f*.&');
define('LOGGED_IN_SALT',   '#pFj2$qfb`N c_iXtb_.P+Y(5=~&H GHq`Ycc=H|k!T~f`EX.Va3j8s9znrN9o[7');
define('NONCE_SALT',       '3.|TiY0OB*m(JsQZ*W/AcV`r8Q97dh7=>|fZ*<WH>|+Q6d~ .`V|W9UuE={OIS^A');

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
