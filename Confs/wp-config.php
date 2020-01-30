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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpressuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Senha@123' );

/** MySQL hostname */
define( 'DB_HOST', '10.0.0.4' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '^+_zR-IQg_]K&koe^BHPLv&9P6`XqAtptb#:1|)iU~q2z_r|5&+o]1C;Sf-SwZ2*');
define('SECURE_AUTH_KEY',  'itDl>O-B-gduH-3El|LSVdw}@WRN]Eb-f5n{l+nEz5V/hEDqJ/;S/r]z.*MRv~x9');
define('LOGGED_IN_KEY',    '29^8w#m`]yu4Lt@]3yv%~33,W G)W[N]1u~q5A6U:Zh+%[Pn ;~VXD$K%{pP8I&l');
define('NONCE_KEY',        '&MTnkj`tbfAu/;2lS*l1{L*%$w_%.Lfau&bW[i&r8Otn3k$|lqcXQ@%41^Y=U)$`');
define('AUTH_SALT',        'zL}]u:Vg}TNxIdO-u<dffD&{GxJXlFyGdH9z[1S,&n+|}t[bgB!^,2Zf`->V;:uT');
define('SECURE_AUTH_SALT', '0Y>*]r vRv)}(+LV%gRBr&J|K:C3.ChZmn|;g:OpJl(7)]5.IdC_I;#U*T:Eb[l&');
define('LOGGED_IN_SALT',   'S,+-$e-88+-{,F@q[da{8;+5M*x*2h=mcs5PO0M>~Z}eu;(F+`B-![xjOPYT3W#b');
define('NONCE_SALT',       '2B;;cw[/f$BJx24ly6=B.&+S~++NK` 4rTmr@Z@s>{iQM(p<kk[7kBd+e>)&o)WZ');

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
