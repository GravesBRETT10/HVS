<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u732642418_9MHPV' );

/** MySQL database username */
define( 'DB_USER', 'u732642418_LLm3Z' );

/** MySQL database password */
define( 'DB_PASSWORD', 'hRXcTjxg7j' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',          'xt0rcnX(c!;iG0uzA!?.Oc2L0MIb<FagOg,b&4fa6:Lj(?=7~N,n_mKyEUJ@=LP)' );
define( 'SECURE_AUTH_KEY',   'W]R6~}dE>6wE%,d~%jun!kIm>_bZRZ-;tyVnmY3h|j/ms<%DCBd|>yKM-2}Lc %?' );
define( 'LOGGED_IN_KEY',     '}U3v>VbC!=,[AnJMjnnR#Udlx!tcK63#@8 1^Kc?^$6.H`Xmjh +QgEmp]61BD>:' );
define( 'NONCE_KEY',         '5@Y0h>oVCTbK-ZG[,k]/cekl@S6n$b}d1qyx`J?Pk+et:bQU]ET2i?gBLGPrdE1A' );
define( 'AUTH_SALT',         '5J9x+@e9BjP3.Pgdd5sksu5Y{YrWi;Bng7,F3<`D-Gs-C0SnlS^w,(3_P{7y/oRB' );
define( 'SECURE_AUTH_SALT',  'NuScG$*9pIM4E]`Yk;kn)CVH:aX?A~Kvri.,yI)8c*?4p}X9b:8Km:JO:^z3sy!y' );
define( 'LOGGED_IN_SALT',    '`LZ Au=ArBwfm#-mw93_VTR5z_hWKySEFfjlht1uKJ9m(ZUyj27s~V~N+1)w%Pd1' );
define( 'NONCE_SALT',        'gL `@ht3}`aP>G20&9kXajJ.mO1X>K(nDL5MSm`agB4DCI>ghpSGVih(o qlr+RL' );
define( 'WP_CACHE_KEY_SALT', 'K%:}q9(kSfk7]GCV[z%I30u~([c?lAEiwb@!7@^ME>wtb9-gHf,%Yr}}&(&isyw3' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
