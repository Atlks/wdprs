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
define( 'DB_NAME', 'wdprsdb' );

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
define( 'AUTH_KEY',         'E%A$:K*k)Y2b9}LsXoQ?V1(VsJPQ_ExY$!.n]+S/*UiDN|.r pcp_Ckk6&% A9PB' );
define( 'SECURE_AUTH_KEY',  '?Jr3eKpAGjnl!z=D^J+g[Yg_`9w]#D&OV$HDyh@@Z1hOs.l[fNEx7j+c-,>DblNm' );
define( 'LOGGED_IN_KEY',    'c`JE}0u2>twP[`:?X.nSfSBZI51!kEJXH~RN_[0<E9vyLMmo{Ze`MqoFKEh>yoSn' );
define( 'NONCE_KEY',        'bUt33Xq]jn$*tzw_>p$4hTbhxpe^MPlJ4P<FH:8)nY$/Cq;P(pkQU9+tb*d5ijs:' );
define( 'AUTH_SALT',        'qLdbPB>wG}4bk{ic}n~S&])CNJsUoZ-drxGmPNA?It-X-*Z]WT_64A`0gs++~C=/' );
define( 'SECURE_AUTH_SALT', 'V}6IPf4H/123T~&BJxV@#|xCVcpm=n,5e>wXN| pt$D;[jS{]QR{B7$<Q|2SDWFh' );
define( 'LOGGED_IN_SALT',   '&O5635,;yFgSAwC?XJmtkR)tG6b]Zw~3_1Kf5~~^E]uA?M&Pg%0NsfU7~a-4Y]b.' );
define( 'NONCE_SALT',       '!Ft=#xa*!~kd1xfW(CV_+P,YK2NFhMBl=EG@X7h?Q,,)qb,|jtvq+CyA%@(G)2g@' );

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
