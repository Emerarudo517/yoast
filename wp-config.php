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
define( 'DB_NAME', 'yoast' );

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
define( 'AUTH_KEY',         'sG@Ba$8<l7D?h=8F+A$CVB)a@a7.Mu7;_!PN(x$YzO iKm+m#B1v=x)=Vr!4B?ff' );
define( 'SECURE_AUTH_KEY',  ')xYCrK_a,>>^zYl3B4Lj.NQYno<]$[(Yo9 )KI&eWR.r}IGS)mF&1!sD24@m=PR)' );
define( 'LOGGED_IN_KEY',    '&ZA&UpTHoJWDCl9F-:001SJ@cJ5=V(k|Mj(favLqDrwVnKDf9mJ%yloF0bD(1t^X' );
define( 'NONCE_KEY',        'y0^0/sO(B4JFfY2cBc+5NC>Q=oI>]|9CbcpXM8P-yc6DNGizJS xrhwyn4szh<UV' );
define( 'AUTH_SALT',        '+w99C!*SuIa0UVR-JnGKL:js^]p`$OK^#uz5JXwSi#oZ>5TkNdRw9T9]H[UQ|>I>' );
define( 'SECURE_AUTH_SALT', 'q$S_-3,2h0|Po`4os2oidgw;[NW*$|guB.2FltLGZkwk5 @t9<z-2]fzFS=HQN|W' );
define( 'LOGGED_IN_SALT',   'xlDuCPEK.^Ou[F#wZgNY_/7k3MSmLG+}M*^~R$1-D%x0P9<b Kza1U,90jLAY{7^' );
define( 'NONCE_SALT',       'f:u&UK0)v/YrmqmN|lrm%|@$P/N|MBj2iIgr/+W]Kze8`VkkTF_c%@%@7YGE.L1M' );

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
