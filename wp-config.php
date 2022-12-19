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
define( 'DB_NAME', 'db_lgblog' );

/** Database username */
define( 'DB_USER', 'forge' );

/** Database password */
define( 'DB_PASSWORD', 'mygoCjnqbPDZpOoKSXGL' );

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
define( 'AUTH_KEY',         '%2mD2f[]r2uxOicC46 t@_lN,3^T7=hqC?w7tv,U1K|tAXR$%y98 VGrRYZuDW^Q' );
define( 'SECURE_AUTH_KEY',  'PS5W+PZ@v:;Yv{zpJyd1.`XdR,q,@YeGkVdz!RmWsn;L8IU8hZ4E5*lMEH6y<8$}' );
define( 'LOGGED_IN_KEY',    '2q9>>(f#.8w}J_a_9@jvtx,l!Dk{[xUa<Tpyy=x@QWAz[Cy>]-tP?uTmrLw$>)w;' );
define( 'NONCE_KEY',        'Rt:tP_+pVv@mTF *E96JX ;dXFmYa,^oo!h7+IS~Y$a I1T1.mMXc6s-/Qrvh%y+' );
define( 'AUTH_SALT',        '/I_%v@}N9?(xL^]670-hj;(XRtf>slzy|B+P$6q}O|HSX>P)D><v|b-uvj+Df-[#' );
define( 'SECURE_AUTH_SALT', '|pxC}0eO<VrKJ8de%-$(}|ogY9=_5_zao;e@={nPPwmA2!U{}T}&qs]b:;mxg^$ ' );
define( 'LOGGED_IN_SALT',   'rXg+ujjxs9#*2z}y;; Bl9rMk!#v0!1c@W#k&/k%A/q7;+(LzfPL;B+J(xr.AyUK' );
define( 'NONCE_SALT',       '{4k/<P?LFv/Nq:xiDHJ#baK(;lsUCrD%S H))+Y[~=fOKqRxz}Z.,L#C7~Kjd@(j' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'l6bl0g_';

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
