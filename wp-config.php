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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'project1' );

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
define( 'AUTH_KEY',         'NaUB(~vQ4$SPJi4ONe,@r#DF*UIgR(8n$d.~g^}M3Dd`4> b+9w?8EU-4a`]t))r' );
define( 'SECURE_AUTH_KEY',  'jRfq^H}vnN2pdHe{uHR*0!@96ExdzY-fWG3g:l?u$?=s}BS%e}](xQvGvxkz:Li[' );
define( 'LOGGED_IN_KEY',    ' }Mh|xR%S3C|HS3+@i1iv[fO;L:#V!K~vU<+(kb[`A9c?q9[D+uW8=>cKQTe)@bi' );
define( 'NONCE_KEY',        'lk6v<SrUIO^1R6uB/g1tePugGbMJy<q!lHe-2WBnB@~&$Q1}MXY:yRxo/6*>#8Wq' );
define( 'AUTH_SALT',        'FTK;%Q]t1xY9j%upL%J+EH)p@{><-?6wP^YgpkW(C~8U6s-x(lkuWsz2r{42+=>$' );
define( 'SECURE_AUTH_SALT', 'd1!M:-]s<7wIk5e,H*o~%v,50XO%7g62`*+]4Tab2L2Vff!Hf#bV^ZbYaoUDDn2#' );
define( 'LOGGED_IN_SALT',   'V~F]V7zy8=|p[=7aOJvMq7&8Div}KQpxLzU9Rt2Ue%kCo!zQniHUx3C;^LEJDW%B' );
define( 'NONCE_SALT',       '&V4gc-_Sf;m<ZX8t7n{HRT-`Z+sw[Z]+.9F-(.e*S.O)|X5^B[d($bR_BC!$sE&s' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
