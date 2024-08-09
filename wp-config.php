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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         ':1Cvg/dU]L,2o11<I[f]yXB>yp*uaFl_u,=!iwalW!aFo!0Nio}Lyzu$dsoiG4+&' );
define( 'SECURE_AUTH_KEY',  'qz47;4CcuZb!Zr`rbiX5OX:.vCH2BYd<L`;Unv.g-N<VNK-t_4QZ& HdsvIyE#^4' );
define( 'LOGGED_IN_KEY',    '9oDy a6Hov+mv}eFyupO.~i)Bt.0C7nXy<5qW&VFneoW719u,R-%V!X`VQUqro-I' );
define( 'NONCE_KEY',        'r*`%oD7t|#M.8)P>~i &k/namYnxAs`vF$NsmhPE_yV]th5{ghR@tOx}CP?UE+n{' );
define( 'AUTH_SALT',        '*Bfq@e5T[tZII2F!`=-+a+0vAcQe0(ao>.nkZR]l$g5T_y:nfY*7`Qr-o8R@(ps/' );
define( 'SECURE_AUTH_SALT', ' v.@2=>ZO2}gbeM>~WOiMz1`%Vh[IUT%s$}:+21PU$1V]*hDlURRYlk(U(WVmxlt' );
define( 'LOGGED_IN_SALT',   'D^(Oe9-rTR&NwR|LVoCG~:gh,@hK{R7m|abM*,w<#[jjY#uwLrU1+Bq0v(^_RN5c' );
define( 'NONCE_SALT',       'lGzB`i`1caKSq|Y#G4_u2RrlRDeCC|*;)@LR[vTCr0BqZ7TU}qIk*]TiR+-hIH^~' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
