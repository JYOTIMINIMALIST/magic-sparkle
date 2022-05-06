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
define( 'DB_NAME', 'magicsparkle_db' );
/** MySQL database username */
define( 'DB_USER', 'root' );
/** MySQL database password */
define( 'DB_PASSWORD', 'root' );
/** MySQL hostname */
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
define( 'AUTH_KEY',         'D[~S.Vg IgV<B2y4i_X8Hmi@9>eLzLj5m5}(-*4_hpvW#l{&sF.+hbj,o?O}|NZr' );
define( 'SECURE_AUTH_KEY',  '@WK/6h=/wE=>VT5Ra_.D:aEGnoC~es&;wtQdf,1=`|9z-b 7;`PU_K0|N5r_-CXQ' );
define( 'LOGGED_IN_KEY',    '{,:6DVnK 8FiO6CM:S-5^]]C{NE{}A8)U~1AHa^+:*-gz~D[<3VGl9rYHTMKkS3P' );
define( 'NONCE_KEY',        'A(<=pEqBxlhqQaFP*[KgOW8#-!X >V3i8!*fwP|cHG[EJ{_+H8]4StT{lMkKSDx%' );
define( 'AUTH_SALT',        'UmW?JsPd#OP*y,LDCkAN(*>)F,z)pQ>n)d?BXwg~U/`V}e J8_.41F.eSM2mHnwU' );
define( 'SECURE_AUTH_SALT', '4)-X.wIZuo>A-,M^-2}%[b3]GE|!3]n{*5!pPasQJ;Rj*gvikv9QVbCkDiVTy0Zm' );
define( 'LOGGED_IN_SALT',   'Y)06[=Wk@MAmsfy:/]DjgXoU@MZP`^2EuHq`M:8mF. oTxh(V;gs? ;mo?=vYhEq' );
define( 'NONCE_SALT',       '| f2tnY_fz(u@o[%K UJL+]hx1q&&$>VXw^!L}pIuTbMv[*q<huY4p@?`J  5BOq' );
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