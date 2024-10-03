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
define( 'DB_NAME', 'protectora' );

/** Database username */
define( 'DB_USER', 'roxana' );

/** Database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         'mJA)um@pB$VP6[1B6qH8uN7hzJezMa.[(P&K3@m:)/`d>wX~u5y;q+YRF_RmAd9&' );
define( 'SECURE_AUTH_KEY',  '9Aiwc?I0$jswv=J4^`Fjp{tCgBVIfQb_fAuUJ 01Kf$B[w&6(t|R;m7)opk?5g9]' );
define( 'LOGGED_IN_KEY',    '?4#~Xm-E=%*Nq$btxbKU?z)e%g7{,>QoeSt0+x//#U`Mb8v45s[(WJ<N!j%p|Q-{' );
define( 'NONCE_KEY',        'DA|^*mmM-x}_JfuUtQ&s$r2&ZgHCil2Z#q!Ek{iGD)sV~_M[[f.ubsF}]NnO{3u}' );
define( 'AUTH_SALT',        'F6YA+zoJSG@xv[MuUMX--n5t:t+l5QupGqADXU.^`E9lx^_iu?Sd!y-rOdWE`srM' );
define( 'SECURE_AUTH_SALT', 'W]Iio+[a!.)d# C**_U!QqbAf^H4R+;z:M?dJjLHC(]J[qS>6ey1{f 2ik5w4J_T' );
define( 'LOGGED_IN_SALT',   'I#<rsQ%^E/zRfnT^.ixD?O%+df9{i.]0{3fKclW!FxU:zY:&]bc9o&G7kZfaqs:I' );
define( 'NONCE_SALT',       '`${s2?uX<jH2*ppe_Z6-b|=npa_>fmtp4!a|&RiF6!5wI#O{l=G#dKlk.LmDU;RQ' );

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

define('FS_METHOD', 'direct');
