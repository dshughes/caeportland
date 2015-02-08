<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'portla08_wp76');

/** MySQL database username */
define('DB_USER', 'portla08_wp76');

/** MySQL database password */
define('DB_PASSWORD', ')9S!pn175P');

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
define('AUTH_KEY',         'jv9ejah4hncjiuueh2j0pxq053lqaq7pp0tld8pmaozjmru50dzsyltw0ow7az9h');
define('SECURE_AUTH_KEY',  'hlwuxgmhpvtgj1tt4kjzsppwgelseymkjoq7qndjptnztp847ecup5mrxbjmoqpk');
define('LOGGED_IN_KEY',    'rjfmhjvrwb6p0vmugmnl2fwgbzohvswcbqlvwcedrcmw4v9ucvoayvxwaff8dun6');
define('NONCE_KEY',        'guh8ncmuap4s5wxkezkupjhfvjntz0nrouembsdum8irrrz80itgeou17ee0l84x');
define('AUTH_SALT',        'e9ijfmppnbncstn8qjoq9m1nthr0d4l91wx2x1uxj2xcetw6pu3be7xwqnhlsonp');
define('SECURE_AUTH_SALT', 'jjshcraix89ewjiwiazeafmyxe1jzzlk2jsp9vxzfgxfnrodbwcwghmugldpsrqq');
define('LOGGED_IN_SALT',   'oserelm7rnm9ulfrh0dha6mxzqwxiulxxxznnc5v8sz34cjbp1init6n7qtpppck');
define('NONCE_SALT',       'eock4phyuzk2wx7hfp9abjy3t8lxxzvzxurvpmirapfz48gg0oohbrx6cxw3kam8');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'tlj_';

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
define( 'WP_AUTO_UPDATE_CORE', false );
