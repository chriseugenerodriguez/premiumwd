<?php

//Begin Really Simple SSL Load balancing fix
$server_opts = array("HTTP_CLOUDFRONT_FORWARDED_PROTO" => "https", "HTTP_CF_VISITOR"=>"https", "HTTP_X_FORWARDED_PROTO"=>"https", "HTTP_X_FORWARDED_SSL"=>"on");
foreach( $server_opts as $option => $value ) {
if ( (isset($_ENV["HTTPS"]) && ( "on" == $_ENV["HTTPS"] )) || (isset( $_SERVER[ $option ] ) && ( strpos( $_SERVER[ $option ], $value ) !== false )) ) {
$_SERVER[ "HTTPS" ] = "on";
break;
}
}
//END Really Simple SSL
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
# define('WP_HOME','http://biz104.inmotionhosting.com/~premiu35/');
# define('WP_SITEURL','http://biz104.inmotionhosting.com/~premiu35/');
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'premiu35_premiumwd');
/** MySQL database username */
define('DB_USER', 'premiu35_1cdemhb');
/** MySQL database password */
define('DB_PASSWORD', '1todRffCKd');
/** MySQL hostname */
define('DB_HOST', 'localhost');
/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');
/** The Database Collate type. Don't change this if in doubt. */
#define('DB_COLLATE', '');
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'bWHhRSNMNGuSNzjjyWxjeLxJYbJJ0Cb3IxMADwfG2OPjfXtzNVvbtH182mHq27zo');
define('SECURE_AUTH_KEY',  '96onfbsGFdJWrtmF0OTcKYDIqSIk0vWSGnjtX4lU1zmUwgLhUaHoGaa35r5xkqQr');
define('LOGGED_IN_KEY',    '2zCbiwA63sCAFrReCBFZ3sTTEBg366r6bDELu6JeU1uyfoMjucZNvkJ70FNMsQOr');
define('NONCE_KEY',        'c1tvo0jEUIfBKyom3OjKpUuyWfoxyeg17dDQhYDxj2Q7GOrIhJnWf9ObhwJOEWYX');
define('AUTH_SALT',        'OnEo35P96vN1jaOgEZMLVOzn9dskfuFYCNsWX5gbkeeXKlOnAjWSd1MrsqUZcNXC');
define('SECURE_AUTH_SALT', 'tn8JVTf2ue63xFAkUQJOScunHiFV3B0oCEvGDfgbDaSvJxsw9uvgFkG0YCBCjT7e');
define('LOGGED_IN_SALT',   'wOUOFaa5ZvH8q7pZha1i651nf2F7uZPKJnLO7AfVTJU6vXGVmS1RkHTGiqPSKg4G');
define('NONCE_SALT',       'Jy8CjRfIeuPnXJet80y3O3fXYVJzLhtXZKvqpM0u2nOEtGRIGp7qA95BLBGe5bDw');
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
define('WP_DEBUG', true);

/* Multisite */
define('WP_HOME','http://www.premiumwd.com' );
define('WP_SITEURL','http://www.premiumwd.com' );
define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', true );
define( 'DOMAIN_CURRENT_SITE', 'www.premiumwd.com' );
define( 'PATH_CURRENT_SITE', '/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'NOBLOGREDIRECT', 'http://www.premiumwd.com' );

define( 'WP_POST_REVISIONS', 3 );
define('AUTOSAVE_INTERVAL', 86400);
define('WP_MEMORY_LIMIT', '256M');
define( 'MEDIA_TRASH', true );


/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
