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
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/var/www/rasmusthinghuustoft.dk/public_html/kea/tema_10/akva/wp-content/plugins/wp-super-cache/' );
define( 'DB_NAME', 'rasmusthinghuustoft_dk_db' );

/** MySQL database username */
define( 'DB_USER', 'rasmusthinghuustoft_dk' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Ras4mus4' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql88.unoeuro.com' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '73K+I-nX;!MFy%/H=<|jBwg[T*GJR}CfKUMk<(_m^_qVH-;,kc=UZ6()q5MC(Zyt' );
define( 'SECURE_AUTH_KEY',   'hJjDHT8V|&*[Vf}HmG5yvYj$6)-}LxS_}x]p)U%[Ka(.NtMw9C`~^!Zr^mBZ#,n+' );
define( 'LOGGED_IN_KEY',     'Z/iR$Ty&Me;pM$A8JX^Qq5~-Bf)O39,OTb<2oB98~yBu{rFf$QWz:<,40AB8%dQL' );
define( 'NONCE_KEY',         'k=k{(=WDnOn%![13dyY!Ii1Mw}?VUWz]*+`hCFD.)1p*T4xle&jzQh4C1jXRfS&6' );
define( 'AUTH_SALT',         ']m:Bw%<C$IdkAP@dCvS5x+,]h!EyUp?B$HgrT4bn@d5fLAQSwv.N]B-D&v[(C[NV' );
define( 'SECURE_AUTH_SALT',  'nYRrp};Y_{4}laCw2gsKE^w8duYTpGV1u_cixOrO+__5JwoG`xo8:J ^z3|vTr8^' );
define( 'LOGGED_IN_SALT',    'dp@)~gl1OQc$m}$ggXA}l0~IOfJI!;!V)z8>zy2``|y$)~_:%v4YXfF(b+(nY9rC' );
define( 'NONCE_SALT',        'U(6=.ZTE<0:;+EB<cz0i]Ucx?rem_]+S8rzA]jc>{BrzKFP_~&,IN|L<v[,:~_bj' );
define( 'WP_CACHE_KEY_SALT', 'Xl1RE;=4orcYlbFOf/8imQ<rr.5gRQzHL.s)6L*miQoss@r&r5As7A15/26TD(0;' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'clk_313c028a03_';




define( 'WP_MEMORY_LIMIT', ini_get('memory_limit') );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
