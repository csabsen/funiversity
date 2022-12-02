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
define( 'DB_NAME', 'wp_fu' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin' );

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
define('AUTH_KEY',         'mxGTId%!G5e?i4G_ z}&@y@l3;6oL6=)D%%Zd{b58@)_8(RN(4?gpFLZ%foXvtG=');
define('SECURE_AUTH_KEY',  '=bsMJ+jPCOyjMlwq692e,+;3r_@z1z A§ l: h}Ch.d42Bsz_}eZNpOVw,?a(]§{');
define('LOGGED_IN_KEY',    '`bD]uyAm3t,PN50at=jQWRp_o8}JmNIp]Wy6yP]KHXF[^vE<Aw^g9z7{@IcBh.IJ');
define('NONCE_KEY',        'BE6l1vTruG/btj|31G(-X§skHflV7o&k2nXd[?IE(,i§rV)VO5_2@CdfJy/-§R§~');
define('AUTH_SALT',        'G-67urki_9Fxd-{B%DHkojTh:bnPAtkHgbTU4T3[ivIAMT9APUDf43Bu@KG6X.BF');
define('SECURE_AUTH_SALT', 'Z|W4kQpz)oJ=eaxsm9@oMDBu]`qKS§op!$sm@2n@khYa0%?j_tqQgtK1,aP &S(&');
define('LOGGED_IN_SALT',   'RBP5;Vixv>bEO.gTg ZR:S`P8RrD`OTxCGA2i:0R8j1K§v~~4§_:;j@hhjeeg4]3');
define('NONCE_SALT',       '+`qA!}C&E@W`bJ~p_e?2M0_3m]=:,v:P85mi§O|jWXZyk()k1fcz+0LmwsGby`T|');

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
