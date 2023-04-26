<?php


define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'demo.premiumwd.com');
define('PATH_CURRENT_SITE', '/themes/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'premiu35_themes');

/** MySQL database username */
define('DB_USER', 'premiu35_themes');

/** MySQL database password */
define('DB_PASSWORD', '1[8R[PI5Sh');

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
define('AUTH_KEY',         'hberymrnja4pmcni4lo799vozcwrfwsf4jre4u8uausxvig2e6bfbegtsbg56oqw');
define('SECURE_AUTH_KEY',  'uwxmszbardudb8tecc3eezmz1n5cdggwzhrdgfubmo2wd3drel1j6zzydvba89px');
define('LOGGED_IN_KEY',    'jy7efyxrqizcdoiy7ego6mcksaph3flmkwfky60mwrj938ni39rrjxhxt489ejdy');
define('NONCE_KEY',        'urg93cf9a0dskg5n1rbekmus880krozzikil8z5bbpnukh0hesuyijdx5kwxvsvj');
define('AUTH_SALT',        'uhbiiuckpza7o2jcjjikxvb8ndxtpj0lzdte5b3kumrglxrydmdm7psdvsdy7psx');
define('SECURE_AUTH_SALT', 'pprhajaoinlglfju9pmv2poqyivrijth41e9xoqeiufvp4qhsr8cadgbv1qbbtmt');
define('LOGGED_IN_SALT',   'qrhzwwbenmbifbyjmuzibtujbo0cjcgbmfvjyl5xu54231397ljukc99bjw5we75');
define('NONCE_SALT',       'niv0dnsrwyax9mgffmrhzdpm5v1assim1kefcj1keigl6ro6elpiesiqo8tkj8hz');

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
define( 'WP_POST_REVISIONS', 3 );
define('AUTOSAVE_INTERVAL', 86400);
define('WP_MEMORY_LIMIT', '256M');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');


