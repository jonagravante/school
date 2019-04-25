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
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\xampp\htdocs\school\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'school_db' );

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
define( 'AUTH_KEY',         '(A3Ew5m4HE6A7yIDW+x >|m;5p!nzaQ9p9X_xW77&^Nf?xTd+TVTUggU^N #[1Cc' );
define( 'SECURE_AUTH_KEY',  'zy#k.I0!/!i{YUIy^Tt#M%]jBjmSx{1U2i[2;kS8CMEo(JejC[:]+xA:Xf_[:ZN$' );
define( 'LOGGED_IN_KEY',    '/]1gj|LypAXZos^f9d=k/7Q7e8P[! Yk%#q7@wKe)}&WJ}NUB[e&MxX6Iv&nFly!' );
define( 'NONCE_KEY',        'O1N(J..[abexcrsu7o<hKSsuvtNB7dv;F_F,u;9]cYHAESw3) ]Bca,kcp~)X1,9' );
define( 'AUTH_SALT',        ',j_=G#2R%F%m]6*v|jO3?q[m>7t,Kcz*yvH^[T__H6XE&X;6qng~I ;/8S%XDD?h' );
define( 'SECURE_AUTH_SALT', 'V44fT~+NMoI2g_}=$<AF,C5H/{`CRopu>IJt!g/o~niI_Uji/@o[:NsJz*~QXfTQ' );
define( 'LOGGED_IN_SALT',   'Z%{plgJ~kCBw_Fu*h.FKRm#C.%FG]b`Q_e-/u$r8gA;~a Hj/5%4#fAAAXw+rK=9' );
define( 'NONCE_SALT',       '=U{(|`MpFKtwe;w~i[^e~;G47C{ji{&1x^Fpb2i; 44RuG{^j%=]I5@2%o{rz5 R' );

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
