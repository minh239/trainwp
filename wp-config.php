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
define('DB_NAME', 'learnwp');

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
define('AUTH_KEY',         '5!1=JvoiJJuqxwo JXNH&+g`-%:MO:`r.ff,u^-pc+mey5w6Fekz`K~#z]vc.#X(');
define('SECURE_AUTH_KEY',  'AT+oTJcgCmXP9b1q{R^)dWYBj#_>t%e >ge3l.T<Od5/wI9U]krN8Sa_-*Y7G= %');
define('LOGGED_IN_KEY',    'J%y t+<7 6QvP G+8Ml+Q&fk.;/Rj1{fQpEMOK?++38-BidJB%UeN:(Pe=dis{8N');
define('NONCE_KEY',        '<vmHYZwPKIHlg;_U*&_v13?Mg?dk>kM<Dd!R--A)<FymThW|YJ4 <Auv|z{ELr[X');
define('AUTH_SALT',        'w0Q#]aLE`~xj<*:PRBsrU2kno_^e+%TcVihG$Ir9c{bru;d?KupAE~agyVgwfK-r');
define('SECURE_AUTH_SALT', '[N7E)w3,4@=++_XGp;nni]f_,p>Jqm|_$[) :$;+/oaN;Ty^iK$hJ<a0:cm|<9Km');
define('LOGGED_IN_SALT',   'Rh+m }9fXS T.-w8[Q+WiSJx1+gg[6&}$C~%-i7;:OFDBY+c_Q`t+MC q^E2J-^O');
define('NONCE_SALT',       '1E(t;|K6~S#HLB(Jb(UC5)jG6-kpm>F}41+-@O+-Q+nV*M7 ]pfV|(:$cv@?uv O');

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
