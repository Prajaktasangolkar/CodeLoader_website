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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress1' );

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
define( 'AUTH_KEY',         'ydV (Ev<;_G58Z:^OZ >.S6~Zk]k|3&dkR]J5C[3FhXw(,G5(~*ep{L|4HWYq|KT' );
define( 'SECURE_AUTH_KEY',  'c!0B98Xmxg1Mk~z{JL,=[cG)GJ*pmm]?rh&nIGt<.O~8Z]Adlhr{eUa<Lat2#%{*' );
define( 'LOGGED_IN_KEY',    '7)|YeY5.>k((zKLW,I<F5o2.)::#gWLB7s2l1F+U>}&#O}GZQ+}/{-M0FZj$Za&#' );
define( 'NONCE_KEY',        'iq:usX@:O?C[yheoCD)Ip!bmFfDE+RH[Vu-50qsXy@|SCFcNd0J{7$:P?j4+1a4~' );
define( 'AUTH_SALT',        '/&5VE|XA^ETfi>?6XB2)wA[8VP{Dn*yY3{o(} f+LDr5@z&gqel>iSs|uizf{|1B' );
define( 'SECURE_AUTH_SALT', 'oCvQPO^h,[NQ!BMHx;r]}O{b[lniVtm`%Zk{Z@|U)A9#WU=mA5GjHUAj$J,pZj+*' );
define( 'LOGGED_IN_SALT',   'o5teebi*j8g}qVUC#I9Fs6y,}9ljJrD{guf@*rUlPYJEJ(u%C.Kt8?Sz)W>i[|8O' );
define( 'NONCE_SALT',       '`J4rCt[@dh4+oMS~g4WeRR& #V,d5 rWk:J 8ZF@W PpE,5ezS-YyZLp(jz)p^f^' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
