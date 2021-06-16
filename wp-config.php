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
define( 'DB_NAME', 'ifern' );

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
define( 'AUTH_KEY',         'WlDk*h3,:Mq%+J;i7X$:V05}p$6m&:>dj96r*@Tx7}9V?TVGE)!<;:%NYCKq=@V6' );
define( 'SECURE_AUTH_KEY',  '&-f9mOQn#W}C%1=qowsZfL,cRvLC6H$s+`(pnrQiLe5hO`7[4*p4<epw!T!~c7R?' );
define( 'LOGGED_IN_KEY',    'qa4,>,@K5}A&yLb=}v/Aidybq82|s U87z]D3<9xt_/Ms}V-[W4i20Rt v%B{d_h' );
define( 'NONCE_KEY',        '~ bl^z.wO>^|8!$wbzna$Ev1VXGX,z|Gq[.*xVntaNn3/P9ZXG4WF4)`#@<*c>>G' );
define( 'AUTH_SALT',        'AZ1wga8o-!T^*@g@GnQ.7{a?DMTWA[fH:bOJligwVfmMsF,j/Ah`AQTp+$Wk1o u' );
define( 'SECURE_AUTH_SALT', '{7x#c=w_b~V6P.x<dXlm5Bt_K5n)uz.e!Y`FzfDXz0l:Njt/$F{^B|wX+IB!Uk<s' );
define( 'LOGGED_IN_SALT',   'Q<T@=QfP3!Nym^XuHRjA?<Bmv;lmq)8dI<0YWqYkEJql/AFR#@T8_tcVZDb~P`+i' );
define( 'NONCE_SALT',       'G{Wuou&js0u?1ZA1G2bCT}e#Wkp61-~oS=v+QRK5+mt&|RWS*;e&!+pu^}$@<=x1' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ifern_';

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
