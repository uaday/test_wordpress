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
define('DB_NAME', 'test_wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'Et*~hCQ@iQP2,+Mojo[}LO>~[*sWGA3}bOrgwrKTJ4@^66k_7SUGPpd.1~-QhyKp');
define('SECURE_AUTH_KEY',  '@|+Ql)vLVEX&RoYY1OiZ2DD{Xd|xI>~t0{Aou+LZ1WSi^H%O,kOtUivUr?Xi[LL.');
define('LOGGED_IN_KEY',    '(F(CsDL0V:(a7Gkm%3xE*AZW+8?#@cpP8dnzNr@m8[`UM[xuI4e7n1Lvd;D]J@dC');
define('NONCE_KEY',        '{C1B}BU-/R^s1HEo9<`HVkgPCGuu8wO*1]?D|hSI-..iC}.:q8?#<?{6n5}-{uhN');
define('AUTH_SALT',        'J/}:_mrH^^K:1;=P%t8g!bW=.{m-T.FB/?pyImdYu^9=6N9*l5jT|coj+&D[hI79');
define('SECURE_AUTH_SALT', 'NJJI=Z)lvsrI5&`!4%fm)x^z*a/dO+8[Q7uK+^4m$r{aZ^$ VB Eft8@mC,%~HJY');
define('LOGGED_IN_SALT',   '^;ggqCj;Rz~y3A=BUEAQIv ZIxW;bUpU JrSj9dX#u:ZT7,xC4ZK1</D{43f8%:Q');
define('NONCE_SALT',       'wjOKtF$Q#4:eh]AnbFEsn8E%qMj}D)VZ%iHa66k.N+ K>8? sS},,7)&c$MHe3Ga');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
