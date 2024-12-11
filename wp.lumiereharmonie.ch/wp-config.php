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
define( 'WPCACHEHOME', '/home/clients/981b33826157d0bc1aacaa75d67c0941/sites/wp.lumiereharmonie.ch/wp-content/plugins/wp-super-cache/' );
define('WP_CACHE', true);
define('DB_NAME', 'bm82p_WP921749');

/** MySQL database username */
define('DB_USER', 'bm82p_WP921749');

/** MySQL database password */
define('DB_PASSWORD', 'iIyeBVWlP1');

/** MySQL hostname */
define('DB_HOST', 'bm82p.myd.infomaniak.com');

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
define('AUTH_KEY',         'd1CQdSwF@aUUG|p#7.JP<2Zm&?:H%<+mWH`P`ofBav7L<.Fi3#t-;+uc?{PlF4t0');
define('SECURE_AUTH_KEY',  'k<m}79l(/S`Nz-WkPHS8P/qe|~u.~N-;.GU#i,oIIu;;yK5x/lZ|Fa+10Y0bTN`g');
define('LOGGED_IN_KEY',    's7q}(0UvHK97!w8:h8HU.x+i:1d|BQBt3gWnk|f`wQmtD|Q#_>5e#5H3mM#j~<IQ');
define('NONCE_KEY',        'P;I~{ir{eZ&`{@om*T;lV7U-/qfv;~`W16k@o{}IXS@a1hn!g-Jd_u-)3KygRwEy');
define('AUTH_SALT',        'BoL:#PrxC%)1g@ZaTpf~&&?|B?I=HF55LSdc9o|9ws1cJ88gwAg7NR+X@,1>y.<V');
define('SECURE_AUTH_SALT', '~qOCZqBDMW1}6@)^8V|2JU`F+}E1(cpzL>`Dm#4wAuABw9bBDls|HIllrI0K<&fi');
define('LOGGED_IN_SALT',   'goq+4/a7g_5_qdjm}bv#,Q?l?BR|tr#O/Unph3lbdLXQ8zaq?qOZ0g@Xdc@;3CyR');
define('NONCE_SALT',       '8geLF=~r(zBxBVpnCcWjp{Z{r;nB2{(3!tl@oi_s*{QSgCogqEK;hbQh(.H77t*u');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_921749_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
//define('WPLANG', 'fr_FR');

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
define('WP_DEBUG',          false);
define('WP_DEBUG_LOG',      false);
define('WP_DEBUG_DISPLAY',  false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
