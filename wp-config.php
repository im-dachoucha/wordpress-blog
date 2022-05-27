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
define( 'DB_NAME', 'brief8_wordpress' );

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
define( 'AUTH_KEY',         'l9K9819wX?+X*yL;}TwX#8AQG2@.3P0dg>G%%_YM<C`&;W}gI0D}%SR?KHmJp.3Z' );
define( 'SECURE_AUTH_KEY',  'A&t1xy;bG.r37$9C&*R&<E7|[}Hp(0anIadi/{W&)G;F-S`+0-G@|Svw&#y]_l!1' );
define( 'LOGGED_IN_KEY',    'ZjH5oCQF=?JR=+9Lj>tHt e]TBf3$.f?+}|6yM#F#;%`%=B@Re;qIs~IM*v/I6GB' );
define( 'NONCE_KEY',        '3i6kEEZ0E7[.In[,9HDw%:Af./&@LYnL>Zf86}=S 7<43JCZcgP<eBwl?(Cm<$X<' );
define( 'AUTH_SALT',        'O 9=@oTgy&yN(8b.ci&lHUgfx2{6#d-aHCrEp_%@S0b5pM-56m=]&rg7]>~# !1[' );
define( 'SECURE_AUTH_SALT', 'wK1! 2yT.(,O6Mqx]h{b/n1;JF7csDY<D:Y2O7$-aENxN0/K${,6NI|9@G3q=V<D' );
define( 'LOGGED_IN_SALT',   '&@+~][q))/nR_FNJWldgsQ8Np4h,qVwZud5++G>mRaj[mitEP4ZOS&Jx[=y`#~;&' );
define( 'NONCE_SALT',       'zMcUx}^jbL67fpm79N:qRmU?<6p#HF5cn5J4m,K[Ebt%Qk[I5R!Ze !lQsIG+&; ' );

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
