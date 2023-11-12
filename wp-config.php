<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'vercel-project-1' );

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
define( 'AUTH_KEY',         'YY96]xW;PT$K25CS;B0_B-_J!ZqNy`?S++ktg URn/[|aZlVeAia[Dx..]{8Txy,' );
define( 'SECURE_AUTH_KEY',  'r.dP{n913NKaNf-?[cB8f&/AmSE($3?Hakk_gNCVVS9r=+ybQ*HmtjJQ:r{y(o*B' );
define( 'LOGGED_IN_KEY',    '% goUJbQ%b$Z`b=;xbCYSe4J(Bv^WR. !4PC<0{/6{n@@!qP7WYd0]0v.ZMGKxfi' );
define( 'NONCE_KEY',        '!!Su;m:Iy%CGA>Bt dlh)80=Qr)gGhLr1d10gMNN~!,>0<%qrW9sPn:1tOc<M6If' );
define( 'AUTH_SALT',        '<=[8K [8@z=VsV=4n<pUE*p5KS>W0!xMq[.6}W3c9(9,>+.u-49Cvmb>iOS%s7kp' );
define( 'SECURE_AUTH_SALT', '`!*;hi*m_x$Q)4UfSm/R;2B?;@,/ p/;_dSdY|J!!l!O4#D1kbw)/DFUb#CyD5N&' );
define( 'LOGGED_IN_SALT',   'MZmpi-A+eUc%.D ,/y^#0UvW|SY/IRbTM,*8u$_TXa$2|J jC3C4A`ut)zF;{[&C' );
define( 'NONCE_SALT',       '&[jOf*v@L %{=nahFx}/MQK_8//d1^VFB!W/-3K8o-sP(b6Ci9-e8ap::llL]*mw' );

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
