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
define( 'DB_NAME', 'pierreetbr' );

/** MySQL database username */
define( 'DB_USER', 'pierreetbr' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Mauser1989' );

/** MySQL hostname */
define( 'DB_HOST', 'pierreetbr.mysql.db' );

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
define( 'AUTH_KEY',         ' )do[*S(53Z=>?Pq8kIsf/G}U[P`d,Y3eWBI] ,gr]YgAi}/p4?2WG~9)F_x#K4L' );
define( 'SECURE_AUTH_KEY',  '|]7L/#&fG=>0@7uWS/(OO)6[}+`dc0,-&Eh%JDc;y8<06Y<jYP{^%+^/p?B>xf2j' );
define( 'LOGGED_IN_KEY',    't7`tv}h| cWofkrc&.#!]l{Hz <n`Psr)X9BW:npFXna2Zp.1r4u6%a!BjUiPz,.' );
define( 'NONCE_KEY',        '?W9B+AYYE.he+w5+9ktW9HS,hxvou0L(ul#Kufk4j~+6Ro$x4]S~Y;`t$nx15QrT' );
define( 'AUTH_SALT',        'hK/Up/8F%nl]xW~xU@g~3!)NO4p^[SI}hpc?-hQOgM?i?SbML?eeun~c9f<)wiFT' );
define( 'SECURE_AUTH_SALT', '0o:5u.MAFUT1iV/QUe=T#C.65c65 a< C=s:,f&5&uvhxuJ^XAqpmG>wo50aMx&2' );
define( 'LOGGED_IN_SALT',   ']mBmY|x7`}9G+kc]!AGSZ`=e&ZVQv3?iB.VVL:,cJ{0~jpY jlFZneXhWR!Cd<%#' );
define( 'NONCE_SALT',       'K,aAqT97 4Vd?[W>:0GHyCXD{Jvw(TIt7V*F;)dFhs2{F;*3p>85=_7xjGeW7.@i' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_peblog';

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
