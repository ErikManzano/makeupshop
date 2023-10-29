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
define( 'DB_NAME', 'makeup' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'i{[uc_StES8HJFrYBg#-#`?Ge0$etm)G5(jsPyjg)`%|iq^/{1KO7qr~Goc4J: 9' );
define( 'SECURE_AUTH_KEY',  '%r+9ae|K;|U&xs1SSe>LKzY&BD:Z(37P#=gG_2wbOiA#)V.7Q@ol~./|*hK/8.[|' );
define( 'LOGGED_IN_KEY',    '|)szcbpz*/,|zyy^04iRt0>(#e!StqV,fi:T%W2*:P0#Ah?b])~O}$=7.-6s#8K,' );
define( 'NONCE_KEY',        'z4BEAk~~Y>uq9ow+;t8gR@^%<i7J<?1;I7UDr3me:vg<u_*nKu!$m!qg;;L]C]5p' );
define( 'AUTH_SALT',        'pJlzir(lHOzzJ5?npsjkhZ]aprRCRfH3n-1Ij8M%t&3l?bh7}Co|4Euw7|[G>NK`' );
define( 'SECURE_AUTH_SALT', '8;#nJ}1gdZ; F_<+njf?:+$#o_hG8Y0K;[fTd@LU$z_RU^`&Q/f~/ab5+85Y%e5:' );
define( 'LOGGED_IN_SALT',   'Xc]s#4;%9>Q`31Ja>,0LGP%3,=2LFp4d&[dw-y#*,7fD;/tti>+$`Hs*z63|F>6-' );
define( 'NONCE_SALT',       'c^jc4#F(VYOPM-^;wPt<d|FRA!*9s8C:H]afNr6vg[*}@h)0glMS NjUtWnT.MTA' );

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
