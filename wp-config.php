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
define('DB_NAME', 'enaveed');

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
define('AUTH_KEY',         '<<>XV;CF6Te^O5&:eA%4~-RA.D;Mk`:CgJ4y3hD,-gvBcC=[9P](J|WPj%DmsFih');
define('SECURE_AUTH_KEY',  '|J20ko_#Xl*PRPqm:_]qC?%70m Vz=o~>rqmab/h+|y]Q)-+ beqO`t/v0=/l|-]');
define('LOGGED_IN_KEY',    'i-?`~9LW~-|Nz8|2_|XKVxtUZ#INc6`Iz-Ppv,f{<+fm+Re=c/;7E9Cb?FM`vm[W');
define('NONCE_KEY',        'K?*]YA&/o@26L]+7^3++o-|IvCM0JMe#CNLUku=4{Oj-{4+tx ULhrZ4IH`^VdMW');
define('AUTH_SALT',        'vZ{%NX[e^{/t<: ;I~E<I)0+s_TxhL+n1+8c[@Rj^| Qs4J%`=nrNgJr>4zO5dgU');
define('SECURE_AUTH_SALT', 'l mh**7&<)?|,:-U&[^*cj=t0^-,9<{Uw+8&ULTwA#<s~S*p+.;IwczDT[FiP3}`');
define('LOGGED_IN_SALT',   'N-MHHxIl$MePqVO+a!yp-h8s%M+ @Q^MEytO0{9d6&x%5gdZ1/GA6PgPjagH<P q');
define('NONCE_SALT',       'wZ[cybfl7Io)|TdCmz%zF5`3PYI#J;O!n[:.~c:X/)tP)uJI ZO)WxrPWn]**uVl');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'nvd_';

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
