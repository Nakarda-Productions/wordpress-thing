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
define( 'DB_NAME', 'group3' );

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
define( 'AUTH_KEY',         '~gi882d=RJcu]#{g^},T30o+22n09{q+N{8WN:ol#l}Dgw4?;pbjjN6jBed>Raeh' );
define( 'SECURE_AUTH_KEY',  'H]>@E$yq__+gYv<T8J-QCd)[U^OQTm[RkVwB`yT0k+[u`3 B}P, ks_Js~zNO !o' );
define( 'LOGGED_IN_KEY',    '@7wMu`b9vnRY^Q0]Ga{RXxnK.M94S1Y,$/h?VneSD Yh;*|}x}hU:=8pgZigEeii' );
define( 'NONCE_KEY',        '=d99M}2Td/:EUk{u3]@r?>SKdxnXK~VM>t?)!pd2>ZNi7v0*.>yC7=F#IIMop{[U' );
define( 'AUTH_SALT',        ')Y$?es$_ OJAjoC[{NVP,jR.3&kO#`-odHz)>!`;^mB>r&dJjErHwL):%wjP0DJ6' );
define( 'SECURE_AUTH_SALT', '~FVSYSF)3qGd?FzJ($q lJxtj0**D*@1#Eys)=g-Oa(fe,bB([Wt9dEn2L!nN*G*' );
define( 'LOGGED_IN_SALT',   'V.Uhc7!#qEX7fFmP~R]g;*^bM`*s,:IV0lX=.}-rWF$>4+hgRTpx!6{wy[49<v r' );
define( 'NONCE_SALT',       'Xx;59;#D%j>{a`fBE/%=PipS,3..##e}Dx>O D3n O;Qc1WUGP)#v|RD71mfto[f' );

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
