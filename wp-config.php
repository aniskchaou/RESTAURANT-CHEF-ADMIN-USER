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
define( 'DB_NAME', 'restaurant_chef' );

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
define( 'AUTH_KEY',         '!J)uB_.S=a3&}XNf8e~rs@D~!rT1e(FRE0u,1|E.Cv9?fX3wvH:d,l$LNRDs:.#%' );
define( 'SECURE_AUTH_KEY',  'Y/)T__pjpD RFmVH0C~c>Zgt(s AdT$R);j>d$4ncXu9%,MnK?<|y%{<0IUk>2HM' );
define( 'LOGGED_IN_KEY',    ':]#:w%xjj9Zkl&H?7VT%M(DwGj2T6^Ao@m}xR-T*jA02XHRy;mpo5yRl:_xep-nM' );
define( 'NONCE_KEY',        'dT/H1b>Cd.G83CC?KwzGEEMIED7)3HM>WDt[-9uOjeSJo*b+REBP(+G2va.N5j_/' );
define( 'AUTH_SALT',        't.&$HpT:~H>35rfT#EwHm+HAVBPGEMgMbKr_c+l>4U.Xib[)beC+5Q3G8@Bv]THs' );
define( 'SECURE_AUTH_SALT', 'qKmv#c6IlZ&[UO<7Yf/JfE(`2%6.@}=R<IZJkU6yvdr`z3qFH6)`CWjB`OO~3-?d' );
define( 'LOGGED_IN_SALT',   '?t.WpKXQjH<*q}3ZNcc$Uk/F_yiY_62N:gmW2wkR1;@M_RV=20G&%}zh!7x})}^e' );
define( 'NONCE_SALT',       'Wj)nl-IQMfEULga}]6IM8l0<{Ql<<R|i=eG%`Vgz]n:yK_:sGfp=6idh?K:E#qz2' );

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
