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
define( 'DB_NAME', 'blogwordpress_db' );

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
define( 'AUTH_KEY',         'c u6X@pfd[2XmJe_g;CXh*cZld #j}WUlA~39w=5F?KD.vcsw9,l5wSZ&+jhv[Le' );
define( 'SECURE_AUTH_KEY',  'cR]Jbb]0y#)]XX59k@*}i#]vBTN(2X,$ng5eJ+{17zTa4:ocZMPPhHDC^_ON=LOb' );
define( 'LOGGED_IN_KEY',    'N%2GDj0^Sq7zS$AV9#Z6t0,QBt(?<JPd-NV;bK(>,Z.?`BGiu#o/XO9JU<BxCr7o' );
define( 'NONCE_KEY',        'P#F,7DCU8t5WLGkT})?k{6QCd~4G7- r>.1qbbDS$XhSx/c/]D]U13?UOb2ragr6' );
define( 'AUTH_SALT',        'B(pGYXvE+e1!VYqOtTwTPRdHnj:Khd%_lv8NI?*dM$>_R9A|r>q|#V?!d/1zuFe_' );
define( 'SECURE_AUTH_SALT', '94F#SlTAi=MjTGmtE]fW.-~5KiPmy!@)ax:S_}p@_ /AF&_cn:H8,5Uvn.68G(5[' );
define( 'LOGGED_IN_SALT',   'y=h@)jM+f;~ub9]=u(z QNx2uc&y_zHRrHE3u78o>.S#_~oxC3WNz1RLCKY%|#0^' );
define( 'NONCE_SALT',       'w9l>mVhR@{ ZVR;iJ?,B:n(6,[fNti9gdK{GN>I`lUu.c%Qwc6ddj1.er.N42_m<' );

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
