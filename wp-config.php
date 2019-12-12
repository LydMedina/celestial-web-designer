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
define( 'DB_NAME', 'celestialwebdesigner' );

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
define( 'AUTH_KEY',         'ZI]cFs0iYnJDhD/5yu_t[zc$cvfXtLR|>li&HC`tI&E@]F8G/?uAcE3?(W> c]Cu' );
define( 'SECURE_AUTH_KEY',  'QyRI9~T-cvc)c00s^~n>$d6|T_jS0Nkrg>S.tR40seuI;ZI/V+K;:7,xEvgYj)++' );
define( 'LOGGED_IN_KEY',    '+EHZIQtP^2dKZQQEl4Y8I hC$X_$fgVQ7lRPiS2n@le5ZuP+D.!4mrdlJI~:_98=' );
define( 'NONCE_KEY',        'n>boh:_GE+l,YHl}!}HT(vp40o4~>aE|2M(%!cos^dDf)xU5`N66?u7P?P44pn+[' );
define( 'AUTH_SALT',        '+?I+r`bZebx#taUM0UiLMoIir<rTq1PBrwTxL]Fltw7Op.w^}fk])Uu~8eK~F/h.' );
define( 'SECURE_AUTH_SALT', '@.K4|_LhnQ=;vd*dr&Drt61yMKXhrRUWKHC]F=w`(VbFuHv6DUHQ-iujH{z^.0x%' );
define( 'LOGGED_IN_SALT',   'dGSY<oc@=&It~?A b]%a_j{Qj%3Q3@A%o&Yja{KrC8CoyX<x)?8)Q1h@$VL2Id19' );
define( 'NONCE_SALT',       'nrA^K)2>E}uHGKv$SM2OQ:e7-ahjY@ey{+x%.2Tl}xd33ksh,kQc^WL%z5,N5@GM' );

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
