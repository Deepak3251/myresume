<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'myresume' );

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
define( 'AUTH_KEY',         'piNV7-@S>.2{r7~% erz|AW|GEFpG:5V2YHTL6iU}Fu4Y4J/5|m_c,)$+klrwS+S' );
define( 'SECURE_AUTH_KEY',  '[MCr(IXO5qdlu(/5HNA UY8gGpKFU.$r2w^l1~5H(WR4iUu:r/840[aY3yc77;jb' );
define( 'LOGGED_IN_KEY',    'I;p|%;n.?9ANHSk4FJ&ADFVXIIM|D:sfhl9Pn^n0yGG|dSM4 @=-qw1k6OM(yyr#' );
define( 'NONCE_KEY',        '&X-_?V;[]x/Lb1+7N4F;+s6#J9 }JZQ9A>*OgwM+[>B1%/R*iu*oI_Gz*UX~6z4>' );
define( 'AUTH_SALT',        '>l9D6 d~t@ukO9&-3Pm(9DbI|r7$f)(;KR.s./uS_`l9P(a=o7W@t3<+uPa`<M{J' );
define( 'SECURE_AUTH_SALT', '86xhtwC+6,3e6bN*f(Xzpo%cF-TRV#Y;DvZ*YX2Oe@to:^HXyV-Z[=)zVx%mA=M8' );
define( 'LOGGED_IN_SALT',   'DqXf6Ls9RJ<vZ|O$;I@)X6h<qnV9><6PX#=Lc@9x#N,p*aouyVPD@fVyqyV,x76A' );
define( 'NONCE_SALT',       ' mw_O>ou}tPQKw ^lVL.sP5U_.[GI~@jCMh_A4~WhYnsj/f)PZMLF.Pv3cCn]s|1' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
