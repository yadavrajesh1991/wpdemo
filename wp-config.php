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
define( 'DB_NAME', 'wpdemo' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define('AUTH_KEY',         'pM?.$>?H`CvERzg0/z8arcX_~tpx|N)w^fu~z+lu|XtTsJU-5}@g:e,vn|O/;gA|');
define('SECURE_AUTH_KEY',  '!2j;<}&vf|KwP9U?B9=HgYmyrw(t!P|A6 ?ji)YRfzBdamR!,S*=4+r7Pcng=W(2');
define('LOGGED_IN_KEY',    'Ok``8/q<)~j-OOUA<QRHoD7Ygr/lJ|o<-l_5w&+oiNEW}.Je+`O>73V-tRKzj1g[');
define('NONCE_KEY',        'N,sSOX^-K7A_~(|(T00hOF$,3C{kp>=)h[~5u Hm?[t+|.^j{jNG?Q<r,;k;2x2 ');
define('AUTH_SALT',        'fWU{v:VjV[N^-9O#Fd1VoEp}b3S@D>(,rJk2E2--4,xJ6_/[VBm*.{GjL^W/8.2Z');
define('SECURE_AUTH_SALT', '#X<Ml&)@RM4Uk^Py39`au4KXv+h47zh+D|xeD$ttBBE8:1}4~Uw+I6a{1yfQ5ziX');
define('LOGGED_IN_SALT',   '-GQ(CS&N4}r4`v2DK7B,zyEj`TnsktZ$j(7.Mgd~|#nN7-+mg|7)8b!ue[,<??Y,');
define('NONCE_SALT',       'd0Am@X4!m;%mkY|x*?yqu`rXMc_(Mei//e^UIWa.Y5^tO7CWGpqe>^zJ8#5|5TN}');

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
