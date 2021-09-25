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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'Ww^s;J)d=D#qD=Vi=7BoI(93xHAal@4]|%cH9O3[>jG^lu_[;Ja@bARl]=>PxEnr' );
define( 'SECURE_AUTH_KEY',  '~3m|`G]w/e*_)qi}W_:A-h1&NC[H VY&[UT0Iso$!04Z}{9wtf2?te@na$t2|GZp' );
define( 'LOGGED_IN_KEY',    ':?b[&f?irJM8HXn<;$M-5H7r $,+dPjhk<x,#va1Pi1%EcJGaXk: aQ@#{6/6bcO' );
define( 'NONCE_KEY',        'G4h<^J_FrWp& 1hp]t$GX-,[$)B)JUZ]o|;Vg#}EP]:R,$W|Q*9_O&.`$oQa!JUR' );
define( 'AUTH_SALT',        'Nx(z{u(cgU/ZRa|M^[6Q_/li]B3!]8=O0)es9JMWhcU$h/#**uhK0C}j(~~p=-CG' );
define( 'SECURE_AUTH_SALT', '#)R2eORh@N.%.*T)03=1yuvm.Jv#V)m3|Xw!II3m4e{%]zsm~;Gh]Gq|^}nSiLHe' );
define( 'LOGGED_IN_SALT',   'Hl:.{BCQp=8zdp>fd{<R)7/Ee/E[;_Ypr9vBjdb}y`E;fv9YpvTXZmvb{$@s.HKa' );
define( 'NONCE_SALT',       '$(($orecUudAsfbsg?`M7vRdXH1230]$tMwT4?BKXu/Fn>vQIB(slcLOgI}dJvU6' );

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
