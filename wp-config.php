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
define( 'DB_NAME', 'Mcare' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'C:S=xZio.;Ph`:g,j` xMBI;F`19!?4f#CK}}:%)a34YS4N4;DX,M8$r~iHBYrLe' );
define( 'SECURE_AUTH_KEY',  'F{wmCa|R$Z$.}cY,1AP@^?BM<Rd7mDoHVjC(PbD3tx}kAQS~9wNM4@C&ifN#~zyX' );
define( 'LOGGED_IN_KEY',    'w3;dgK=kYm+>9F%re>,vBKKEZ9y9*Y#dD>k2e#F DIAP7|8oWsg^f}hPcZGj-XwT' );
define( 'NONCE_KEY',        'xKuSLOaJjv?&hdbs*6<CM>mV*M$9|F3P[a-0vPa[8gK9SozVY`DlLfK%C<7QK3%p' );
define( 'AUTH_SALT',        'Ww;J}u+y@FV _PHZBo}]U*B:t0r<@7@vcC;ybJCLiqOdstC+;Xt9u8y6>!+;@s~X' );
define( 'SECURE_AUTH_SALT', '[fVvwJ?1d)!:UM-.u7E5S7;x@Q#v4,69K+^y0!>6`g&AsO$d?rD8/Q=MnCUc%raS' );
define( 'LOGGED_IN_SALT',   '|M|I[0}DF*<{|W0TTv9@6_HM{8Vc@*u0ex4uE$u~.wE*=Cv>Ql+56izSc/[aHaV*' );
define( 'NONCE_SALT',       '$<t?2uW[[@rao$EP_c<I$B!z`&6C1}@waT#k:qj3ZgF5x;Ko-mB0!]W@T!HDpkX@' );

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
