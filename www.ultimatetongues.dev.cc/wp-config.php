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
define('DB_NAME', 'ultimateDBl4clx');

/** MySQL database username */
define('DB_USER', 'ultimateDBl4clx');

/** MySQL database password */
define('DB_PASSWORD', 'sSY0JRd8JS');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         '>{LyA.MyA{b9]aH+L6mT.tEueD]e;xDl2~HtKwZ_O-D[S~ZCk0d|K:V|wU|rF}cN@');
define('SECURE_AUTH_KEY',  'czQNg0}Fr,bqn^Qfb<B7Q^i+LaXm6;Iy<.Tmx#WSi2LDW.*2ex~1hdtDWO~1]Dt');
define('LOGGED_IN_KEY',    '@VCG-~5s!YYvF8R!0}cv$cvr7QNc}B7j@<7nj$IbUn7Fu,;Iuq.TmjEAQ*3+Le');
define('NONCE_KEY',        'jyQe;HAT*2;buq*PfK-;]apl+LeW#5GV|81h-t#Wlh1GRg0GCo!~1dZs8RcrB4N@}');
define('AUTH_SALT',        '.m-;dxt9SOe;]Dp_:dsp_Shd[C9O~:8o@-:dZo8RK-:v>Ynk4JFY,!4gz^3jfvFUQ');
define('SECURE_AUTH_SALT', '*LiXEHW;9Dp+t;Wmq2HalD5Ht:_1phtLadsK8Z|1[hsl#OdwCNRg[:8w|-Rhs:Vk');
define('LOGGED_IN_SALT',   'R[[Gos_Klw|dSs8KO-|[5hz|RsgwNCR[8:kw>8gkzBcVg80Co[}jyn>Qfj}BFU@E');
define('NONCE_SALT',       '$ftHWa_D2H*t;am~GWal15Ht;_2pw_Zld5K9Z_15ht|4cgw8NRd[:8w|>gvk|Rcg}');

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
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
