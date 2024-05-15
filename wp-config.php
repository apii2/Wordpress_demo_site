<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         'j.!otb8.da3)v_S{bb2AL`c+W3dWr0Rh:eqc,8(=W48R+|YJ6k]]+Po&6h+Q)k?Z' );
define( 'SECURE_AUTH_KEY',  'zbb^5x<%bY}g Q5Dn7dy%@X6Tc0@qzM$#Irde/Drc=:i]gYam^*@=5f >i`6DHY(' );
define( 'LOGGED_IN_KEY',    '51nai(QD,t?},4o$};Gzoc$|-/@+;PUrQfdPWjON1i?Y;4z3SO^2]wGD.LxP]}O2' );
define( 'NONCE_KEY',        '/v>(Rx&?;qyc2K.!9)3F|6BKhvE=,.J6*(T68Pv [4D2$ZV$-eK&-6P5rq6dOIMu' );
define( 'AUTH_SALT',        'E(E;R]3dL#ct_-4uIz]CVpNS%5l><)G(F6?4lM70x-yMN2rT es8AlypJgL7&0^4' );
define( 'SECURE_AUTH_SALT', 'Xjj$FUV4LVHvv3rk>Li?Pztgo^$yfdA=;~Oe.r|Z%.(HA5;.0V6fur QMxDcF/?Q' );
define( 'LOGGED_IN_SALT',   'M1ttTuidPuw$yjLHa)!Usl3&m$*C:p&G@3 +z2!+F<?Rgv1DOt+~.-MMmn|~s%j/' );
define( 'NONCE_SALT',       'h+Pb.P[.va}X:{F3VQ.yj8xNcB*-QUeVCeR4hr2un&VL?1+7 o{IQwF6 P86[ZIR' );

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
