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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'www' );

/** MySQL database username */
define( 'DB_USER', 'root' );

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
define( 'AUTH_KEY',         'Q*9Oh!Em5vlf/XI]nN[VJdLj2hN]lzF;lqNz^VcGHPI[^rs;228Lq#D;#qb74IC:' );
define( 'SECURE_AUTH_KEY',  ']NRNKnU,R=,ZG tZ#e2>SJ!;]WQr&VPlAh1;|d;L:)bsz!IB>{2lzw!$Sp_fo/t5' );
define( 'LOGGED_IN_KEY',    '~JdPW1e^]?YZK._cDI(1nvQ+D(k fu>0~l*VUfw5Vc{Ib{emnK/hIIT>[O/>5m4=' );
define( 'NONCE_KEY',        '*[?@a(Q%LQ=Nw&QyRkaS&~Mx*efaAGk<`<Ue{((20GBEDQkZ|R#uEl6&od(bW;Kp' );
define( 'AUTH_SALT',        '6=#?*GQwOpWARp)Ds)^r(vVC4eZUL9C~-],;5-L1Fs-_y)]Mgk|7~/=w}AlNpv39' );
define( 'SECURE_AUTH_SALT', '$[ f4sEWoM!:Lb:Z 0p[!37mZH<mLFjjTHHEP=67:X5NOtb.1:$(B{7NPpwwxC^k' );
define( 'LOGGED_IN_SALT',   '}+2~VPu)QC=Vr;%bt/tT+^=0-,^b,^[pj1@5[5hyd6NMeFcj_pxTwzuGQhsA`yg*' );
define( 'NONCE_SALT',       'E_|-+(k`k|?S[1e.Jk&fA oJ$QIC!/{nvG;6&hyM6^NQ3<)9kW#Z):Wt}SF{zZ9y' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
