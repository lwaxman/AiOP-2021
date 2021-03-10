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
define( 'DB_NAME', 'aiop_test' );

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
define( 'AUTH_KEY',         '#K~Z,q?>+3#]L2pE`:`YH2e%Ur9jEILN2$:>C%?D3MNmn;5F^1S<VZ1XL:3LBtzg' );
define( 'SECURE_AUTH_KEY',  'ld6FX)Yso:@EeQ0=n*M+SY R.N?j^>A{,9p3qc~?gv34Qqwb+s:*R.2e%#W_Q7e-' );
define( 'LOGGED_IN_KEY',    '.a<_@z@]ku &Sa,~]e18^chy/>H?Y[^95@#i8>pYqDpj{]~ESXmVs$cU~!WNk3lf' );
define( 'NONCE_KEY',        'p2L^L>Q5fiz~ldKB)C ib:-CLzY</ReI-uuV=>$IJBA+c49@cZCF`<_7M;6;`HH*' );
define( 'AUTH_SALT',        '!ta<J>=Kw#^HIL.h}t(m7{:Vw>vx-OD`v~xOVs|@9>E1l0~0yX4S>Kw$Ul??r*)?' );
define( 'SECURE_AUTH_SALT', '+AnhRqV;TrUXp(zx+St[@d@[w~j7/DP`9pHa4Q!0#fGP@iJ=kZ xKtP;`yz x`fg' );
define( 'LOGGED_IN_SALT',   'aD<LnC.4oM{cUS8*V4H!qFTp<EO[aMXel(<1A4d/F@~yR9J~UL/U{(!`p<{,LA0d' );
define( 'NONCE_SALT',       'Hu/Z>r%8?fSrSwz{BV-qf?n~;`x;ZTm]]|DnCtKWTK*Wnt+`somYw&7?K {&x652' );

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
