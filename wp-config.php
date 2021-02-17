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
define( 'DB_NAME', 'db_gamaliamedika' );

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
define( 'AUTH_KEY',         '.`t]V4)IsV.tPVF2n~<}}qjIj|HB_hb6|S:h![mr-62p3kPtE5{8UOjy:,vHAtV1' );
define( 'SECURE_AUTH_KEY',  'h-gNUfk9 ls7^ABh%8n/JU0:OI%qVq]yRw^-%#`AKd1MSJb&$BMB@n74[nS#4rx5' );
define( 'LOGGED_IN_KEY',    'Jr,puD(Xe:XJ8<^]-VT oL.336FP !#0wg-m Zn>d``kCCRO/&}?{U$CPtGg6Kr%' );
define( 'NONCE_KEY',        ' LS_MmO:R1Lr2`YzKdc$Wr;0)OZYlM8<ZOWcJn9]^vDOM$Vg|vGO$PI<LnspcNZ/' );
define( 'AUTH_SALT',        'lG9lXaDLN{;C=$PiBL]Mx+`?mJJ@A<?v/`;avbV8AR>z`rrT>nVgojWw8?+yPBn,' );
define( 'SECURE_AUTH_SALT', '6|<cw=g zRo^aTqkp,?W0OkOx*pEIP~_P6!H@CWY|TP|(C9N?(Uiu>RK.OsI;3F}' );
define( 'LOGGED_IN_SALT',   ' zL^YY_!16ng.w9r^x_=W@Da ,NPX./[z/ey?(tblW>HMd{n0m,`kts08<g,r1Rp' );
define( 'NONCE_SALT',       '|8x%3rA1f(N3Dnpj2`-$rGNfbOtVoj~6OrAQ(y/7SM:R UJS XOv/V^|mq|N Som' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'gm_';

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
