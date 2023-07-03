<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'resort' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '5bg$uIq!K~j{>fu&m^`eJyT#!rI%aZS{dScm?Cho*gJq1W6B5*k?W<iaE)mxi~I-' );
define( 'SECURE_AUTH_KEY',  'X&sWB!pl`nae`@t}psq7y6c>(d}Ykz&i6}Bjv94s=;tv+$&{K&Gmn4=>b6X{H4*F' );
define( 'LOGGED_IN_KEY',    'bp9Y^ BFjB2?1 86JMG1^I2jBJDfP!h.&7MV:k!M:7(Of0k]X,.BuW#WOKpmE3[V' );
define( 'NONCE_KEY',        'T+urR{v:A*<dH?uw))wd($0#xuP$eI#G2D^wj->lihn1.#~J|;R($dg?|;j-5h{9' );
define( 'AUTH_SALT',        '-J#o{O>fDSagK|W7+-Wg733JDVo6xLL[>-#>Re{v5{^)6^,cGUk~P0o3L.D}rgww' );
define( 'SECURE_AUTH_SALT', ',}~EJE_nhPmwU)`kH1GBrds]Sbo`GP,IStI`QbQLrPjqv.1V=~k|3O+#FeMfvLk&' );
define( 'LOGGED_IN_SALT',   '8yRvv&5$p,_~59=`sk>l~IXQxDe7R8ud3-`L,]A;7ya->XU]Y2_rV~gnZiX7*6~k' );
define( 'NONCE_SALT',       'fBcVhCimHe+T._(ba?9tMtCvAyR:Ta#}$C3*=wFsHImEvrK7]SjMi09F3qV&;4rq' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
