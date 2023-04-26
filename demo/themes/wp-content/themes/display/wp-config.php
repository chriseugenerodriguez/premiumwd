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
define('DB_NAME', 'premiu35_display');

/** MySQL database username */
define('DB_USER', 'premiu35_display');

/** MySQL database password */
define('DB_PASSWORD', '8s0@E(3BPS');

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
define('AUTH_KEY',         'oy3rb5dzonjyl4mtr4vrb52k0ijelyzqnnbnyklrsudx9a9haukhizwrjmzc1tb7');
define('SECURE_AUTH_KEY',  'm0jzosxwjkeewc2qzydoovatwq3y3xqtuljilotjp7wdhrl6d0vfkcipyzhjbyc7');
define('LOGGED_IN_KEY',    'qfsj3re2qbykhprdwg7ruayaod4iod1zwsdh4piwotaqgpn76gwqjknwr1hx1rxg');
define('NONCE_KEY',        'jkanbj0ttmjvksha82fpnr3huwfyfyk9vqfq8ovq8dexctqy8ibhk1gb52ctcka6');
define('AUTH_SALT',        'ar7c3jmnouetonlam87hlipoh5xz8ho3dvjsnrlrx698xeworohomnjbaexif640');
define('SECURE_AUTH_SALT', '5tplgoravias92cgij4yweuccj9z0dv1qvakutvp37au1jihyxivoxo4dvq1zhz8');
define('LOGGED_IN_SALT',   'gzekqmdczc9ftzvb5fuaxdp7bl2bhmgy41gmyzrwttmxgrxuvy2wt2roqevczy6f');
define('NONCE_SALT',       'sapkw7lf39jrkkulqxixcpkkdlhq3nqeh8xb587e13qfkagtwwn9seellxdf1poc');

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
