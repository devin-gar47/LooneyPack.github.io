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
define( 'DB_NAME', 'Gabe' );

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
define( 'AUTH_KEY',         'jK(:YE6~OH>?UnpsXS20?3r;){Vc@^E0k=HcVRpdsP*krZQ_Y:v{}C[aGbWOpq&b' );
define( 'SECURE_AUTH_KEY',  'yje)X,x?v[qW4Jqb%&|.t- %Y&j[]C+H4=]Xm zN{:Ix|e%AprlI;&vPAI-ZZ52|' );
define( 'LOGGED_IN_KEY',    '?}c6J? <HB+`f;dMVAx%.4YDL[NA[/{tf%vM {t4 L7nQl{R_&l~oE6FjnBiKU8(' );
define( 'NONCE_KEY',        'YdN%Acqnzs/l6HNQqtzN4w:y+y,,fKCb-; B>ay{kABvB6A)rOq4-U5p_jn$WaF<' );
define( 'AUTH_SALT',        'vo/B{w5#`5NSxrx.yt=%BU~y<:g_X1Lg3d54_%M=CE]`!@y1fF4U2:Q;6q[$.8Z,' );
define( 'SECURE_AUTH_SALT', 'e4-,b+D5jx123xbI#K97d`P<JZ%tB/uiE6_c4v]NLPQ$5-sh6~L`9!.;y:_zTMHA' );
define( 'LOGGED_IN_SALT',   '~+Aq4c`~3>d7,!uH)jZVt|OT.$-Si(Tu?;4j]}$?^fPYP|eO;W,%}(Rm#ky0VD{G' );
define( 'NONCE_SALT',       'nT>{:K^^I9j+w):UZ@US(6r+9YqY4DZ!P:PhO]C3jIjm }qmgKNpd=s[0=*.sTMn' );

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
