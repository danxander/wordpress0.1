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
define('DB_NAME', 'prueba');

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
define('AUTH_KEY',         'DnB#uZj`{:&@T}|h4c(Fz~D7(^$R{D+kBf!ICY0`7jwCEy=~[fpuf_NbEO}BRDYw');
define('SECURE_AUTH_KEY',  'C;IoKqC0~}M@tnbQ?3]Z<Yz$whTcrhY9}y@EU?UZiTxX:IyPTpB0%i+h?m):Z!z7');
define('LOGGED_IN_KEY',    'JI(W2X{X}w_yBmBSz0C%URxBF&DN?xUFbc| yO2@Z~+KySs85.p29tvMk6hi86$K');
define('NONCE_KEY',        'aU{&TrRQ^xLTbo*C7Z9Fif]!RGN8_%Cl.GZga:PXwHN89an/%6J=n6efn/u}Sp.I');
define('AUTH_SALT',        '~/?MePwI;Y@WzY#&49vzdc+4cabCG^efsI47t+^Fx>=@=EnkTn=-9Mb40O.2t5^o');
define('SECURE_AUTH_SALT', 'Y*wL{)DB0K_-pX(0Vi`,CuN1+X=mClLs_eM&3@:-;:J6}KJRXwO{ho5[^ly5FPzZ');
define('LOGGED_IN_SALT',   'N};Zv|p2e{l6dzr6FSmvn4|@}-2eq0&VrR77F@)OP._qT6Zkq60vDbW,r]7E:o[q');
define('NONCE_SALT',       '?hI5DD$Eq#%HFrz8n%;&E9/lIr(/s=7G!~GG1waa)*{txwrXBGYc6w;9gam<,W:u');

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
