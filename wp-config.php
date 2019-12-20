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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '~FoW1>>zniWIPNEJZmPY9WUPA#v;IzBGQ;E!Qv^78,ZhQ?b2KE4xYI[>K4PlF01)' );
define( 'SECURE_AUTH_KEY',  'IxV<=/:-dmbF5&`K{RxA}nUoRN6jl[Oz{t3nDp+w/!WG;IjN4)lq:bS9D|2~}b5Z' );
define( 'LOGGED_IN_KEY',    'M BN5v8bdMaMY!v7Um-yOW{FgTv)o,6dizBDCZDK-!jKx5Jf^d>mN)laQn<PS7wL' );
define( 'NONCE_KEY',        'wGq |`W(Nf7/DjYJc?-ekV{Z5rx8qfnF~DL*9e^A,+b MH355=c*{<.N>lJ&o4E-' );
define( 'AUTH_SALT',        'iw>H,r/ArP4-Xq6N9vuDRl}B{Q9/NzRR9pur5(F/%b=v<{0DacIxMwy5%`@pL$kw' );
define( 'SECURE_AUTH_SALT', 'HJ #(qd^H9az5SZ*p^x;dAOsePTYT#G.7V#OrBL5j~~q$|_,mou3EYl.KmLn_b-F' );
define( 'LOGGED_IN_SALT',   'qmo2@+o=B+nmnt*BZ|SazBZ0H.I*a{1do:wJMKNC@*87$oNz6Aw|FjVD9.o8{]_a' );
define( 'NONCE_SALT',       'pc${bB{~0H9s6jHm<]|iWpvcQ*^d,pB6w8nB{J$ S_D62O,v[@bR<FcX4naWBQe9' );

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
