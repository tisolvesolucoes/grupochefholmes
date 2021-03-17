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
/** The name of the database for WordPress
 * define( 'DB_NAME', 'grupochefholme' ); */
define( 'DB_NAME', 'grupochefholmes' );

/** MySQL database username 
 * define( 'DB_USER', 'grupochefholme' );*/
define( 'DB_USER', 'root' );

/** MySQL database password 
 * define( 'DB_PASSWORD', 'NS2mbe9NcS4yI' );*/
define( 'DB_PASSWORD', '' );

/** MySQL hostname 
 * define( 'DB_HOST', 'mysql.grupochefholmes.com.br' );*/
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
define( 'AUTH_KEY',         '~u:~&YZ&-2)yAK)HYlSRlT=UpJ_jwtsptP!Q`?/?PhEI.FS*it)qNH`s-E5&TP!|' );
define( 'SECURE_AUTH_KEY',  'pE7QaKh|8cRTAM)}%M@YwDZfgc@ZM `sBsKw24ApRlU{_v7${jE`UJ.l^^!tp@:H' );
define( 'LOGGED_IN_KEY',    'FG_oN;.#}L+6/6Iy*=]{p2Ozih/StSO[EfM>Uju8b8_v.axUbY>GgR1GKd%hS S~' );
define( 'NONCE_KEY',        'krp)x[crAgyMwaM_[a*L;XCuQ>spy2DnKL72k1^(!6sQWM9X5)HiW9 3c;&;R/ m' );
define( 'AUTH_SALT',        '@NqA=Dp}zoqZz{V3 -s0omo(Gg>d+Kv*>r_nxu :3-xZ?4vY+?euYC.<,%cFuf(g' );
define( 'SECURE_AUTH_SALT', '{UcUozQ:=Du@Yi>)QC.Xu[,W$2sv7[_Zs3A:x;hg~TJu1I%jTm!wlDk{HIfn]Ap7' );
define( 'LOGGED_IN_SALT',   'nXm~zPkBzbd1>e~(&E8Va?ywW$LrH2||7s|.qi1%555D9Dl8he{i:C(~TlOkQ@T>' );
define( 'NONCE_SALT',       'OlziXApfi(+[<dmsT(n$oC`WHeg^l,E[X!!krkg=:RplCqD!~G!&QlpTeA)AK@Y>' );

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
