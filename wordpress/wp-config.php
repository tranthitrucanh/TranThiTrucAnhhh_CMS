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
define( 'DB_NAME', 'wordpress_tranthitrucanh' );

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
define( 'AUTH_KEY',         '{u9lP )o|jt.8r2u7%c ^U#{1A]}iu|l))vH=O)=w$E[>)/_?;)-DjvfA{ifI/l:' );
define( 'SECURE_AUTH_KEY',  'P.f-zsM/ul~ #|[h$KJNZ/t0pL(gFe6>Bd!a[WB_2fHff.-4t0T}x}JV<(jc3:mx' );
define( 'LOGGED_IN_KEY',    'V<BjPyVB1p;uy]UVH1=TNmki-v$W#he=TiCvmbB5GkKmEfqPDS{+cV`{C+;/4@]]' );
define( 'NONCE_KEY',        'qUS4+1Jd}DBiP/}><fDdw7*w%>f)f<ww9tCFld2cV?oDPu{Rkzyn8*M31bi={K6k' );
define( 'AUTH_SALT',        '`5oGqfUq5O#Xx.cVC3PjZ`imlhgK+tk<:-#oY^5PR&Lqmx&a`y_eO`(i2eh#H2{K' );
define( 'SECURE_AUTH_SALT', 'kq_J1hv;0:_r9eg&_frJ<,[{eG[Myu^V!aq00/?6_7D-D)i7Ny|prwa[s_On`Lk.' );
define( 'LOGGED_IN_SALT',   '1s=n^nq/jgdm))+Ca26qSAH!R[$CPjmd=C^4HM-q`)GW%eFj.w$eH8}oQry!cRJi' );
define( 'NONCE_SALT',       'YOb={|G1Um*DF:8qevq)qT3@wB=QQ P~hIr2=]v7.v+l5S;T#[j{:3J$m}oyCW#2' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
