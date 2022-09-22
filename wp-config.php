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
define( 'DB_NAME', 'maintenance_bd' );

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
define( 'AUTH_KEY',         'bB)YqZd]fi2`P&t1v65]I38C#ngFr6*wvoLN%dh!}fFiQwz9j@n<GNILeyZ><xTF' );
define( 'SECURE_AUTH_KEY',  'nV20-:rZ<S#3~66NfJ+%>T.=fpqeM`Gg<Rr/QFe_[8h)P$4?h#=vIN$dq;+k`hi ' );
define( 'LOGGED_IN_KEY',    'E)dg2p*>X[Lj`97huic jcvi&..B65;RhV-E^NV#SCij#C+n}/d[HSi|}(_~C{Y4' );
define( 'NONCE_KEY',        '*]A9F5;k{X8bB+))ow(M~hT9^e|Ydb-TM_LF7_=8IPVfa|+CS-vkVqT0`j#B)G1_' );
define( 'AUTH_SALT',        '{;3]M)BUN+X[6GX#5$--HDlB$t? #r8-xpT;4e?mlTkCQ./0SGhd|p]+y{Kajis-' );
define( 'SECURE_AUTH_SALT', 'gV2T@-_W=|hYhc1B06@`[5OQ^_kWW|<-c+yvqq-MO<csfLC9M4][X4AkrN i]ufR' );
define( 'LOGGED_IN_SALT',   'jnlPr,++,WX`f3d}(-qzsX0f=6UZ<-6J7nwsdTjEZdioH8!Qon-f SwK(JWZGu;P' );
define( 'NONCE_SALT',       ']fS_s_fkq^-LYT!we^#UixDTdW?Q9,xu:TLgHki*(WufyJu?o<6&UsYPYn;S6b5W' );

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
