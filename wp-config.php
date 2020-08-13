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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'new' );

/** MySQL database username */
define( 'DB_USER', 'new' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'r4m1k1T n&B%=^V;DM=f+FIu[O]-Goz`Srz4!w* I<vYtzH+dl<yJWF*`*wBu01V' );
define( 'SECURE_AUTH_KEY',  ']DbH02qOdq=FgJf5nG/XBGUE>Ac PYc?SG{I_p_HJaIE@4a/)yxf2E$5V1(ZmBe-' );
define( 'LOGGED_IN_KEY',    '}F@xhK0 jTkdNMB/UFvH%F>4Vf5snn6HsZ:iWAz<rza7*_%g7I,LDaRo|gIBL+:^' );
define( 'NONCE_KEY',        'lUatX^A[JJE|_-|mjXfBH;u,QA<%^g,e^sqgLUD@~HhYNL}2clf;`{?*s8La@XRo' );
define( 'AUTH_SALT',        '_6WUBd}KK-:T f`x>hO72:QH:n<1a3Jh/HkN(DJ$ZehsDSU}8]y7<9/N7UIrXWP ' );
define( 'SECURE_AUTH_SALT', '_U<U84tl9_z/jSn;}I[G<zV|[s=&V{[stgnSv]NXaJzj-a~_/wL.G.3=tjA17_k0' );
define( 'LOGGED_IN_SALT',   '{fC.mdZg1Kv6b)pw~OTMXO~+Eg%yMORJXgVbRKBS1?Lq}z%(rlrG.jvbRPa[JZs^' );
define( 'NONCE_SALT',       '+d(EQ711`Hz%Hz2Wg}!-$nJT{Oi!:VH_:#yw?O2)*4/=2{u7.|zH%9S0Hsm]AR2*' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

