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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'qwPvn%-?t*q%ek[vhQ5]TwM,rcEBWuB[v0y6*55:Q6m`;}k` <#Z1]VHDX/ZuVuy' );
define( 'SECURE_AUTH_KEY',   '@ybt4Fo?:sn+Gxzdm,[d&tsV$qY*0Z.2Gx|+8 ft6lXjSZ}MJGe5<L-[F7aFv>7m' );
define( 'LOGGED_IN_KEY',     'IUdWnFX%m~f+{X-049yJ,W<h:Z M~Mq5`J:[7+4fO7]/<BRVL8|3QJC|>5AN<*77' );
define( 'NONCE_KEY',         '1OcX/6L!(52yaj{d; -yfVf6z!ao(YARR0S8Q7,d6Fg%,<sn1jW7 /FD.|Gw1/i6' );
define( 'AUTH_SALT',         '<X3lAS3 }1pVX{4`4>ba`YX@<q2DZ2Y>G.It[!jS+y_A#R&8N7@.EQ2w.iqD7K%-' );
define( 'SECURE_AUTH_SALT',  '}f/*;:-,D@|L<lX~t^dcW|A7V`M3G(c38%oLAY.-;Y_zVVS%`|DNx-Vi.,<:Bj1|' );
define( 'LOGGED_IN_SALT',    ')NOwhiySx-_23;JPW#+SN,`zE6=GSD:% TYx&4tRr%J>>1JzS$}=J=Km=yx:*@11' );
define( 'NONCE_SALT',        'FinMGg:]v@T{-:4ZZxqA5RuW(lL^08n8r0xvO54ti4hNN%WNE4vO/DgA;1S0}u ]' );
define( 'WP_CACHE_KEY_SALT', 'V-dp@:!Lf0;Z,H97=xC:e^!5}lBjI[}nyY urB1MdIosFMIYVXbTjJoWz fL/|kF' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
