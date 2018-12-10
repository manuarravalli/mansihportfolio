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
define('DB_NAME', 'portfolio');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '@jdLDXwcu&qf70L1fRQWz_{[jZ3$Zu&}9q14(eiG:Hi3j%e.0AE=4|?dJ-#Pfk0/');
define('SECURE_AUTH_KEY',  'ri97{q )&wkG;37[PKX5wzeA1,=eaZ=0ZM1Q42-3/PH:OV7c+J);myxWMu4l8!6f');
define('LOGGED_IN_KEY',    '9[RVF++P3~W{&|X*TZGF+^nywoc$pHt1fqXI_K?W!H3B$-%uh*9rlX.IN6<;gZmQ');
define('NONCE_KEY',        '%:^k~{q:>}gkt+$1Ig8KXBR):[adY[TF7>Q[Z60FZZ)h(79VT[W<5TzrcVkxq*(,');
define('AUTH_SALT',        '#rBGa?T-aY7v|Dgb{eeA&{BenZsOf})]i%s7bbWlo;>L;=o.:++]p6}@4hr;wxH{');
define('SECURE_AUTH_SALT', '(ag]P9^|917fb-4)jPp LeNH;8g},W~[+,N1O2Q@$aj{4} /QiWyoVNI;LWZ@a$)');
define('LOGGED_IN_SALT',   'X6N2n.TmSF%Y_>mU4~5r}pXrcG9a!*%zgoH,EzaQfSiQl IQ%IqqworfIK|z63En');
define('NONCE_SALT',       '<j8d&,vgY].AMBX^i`*0=RNCyKyZe2q)(AejmwxesKMn]WV-_G@JlwCUDh:_ebtR');

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
