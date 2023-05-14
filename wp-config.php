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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Planty' );

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
define( 'AUTH_KEY',         'IaLdhAB+!]pPZ)5$H,avK_aAREdt`()|&iOP5uw2Mf]d9zgRa?yk[Wf?jNT2EdQL' );
define( 'SECURE_AUTH_KEY',  'hTEqI6Pq+lh%6`tDeV%%LD:Y+@/R1>]*P|0qO])v>vC=#&+:}cp!C`yJFQjvCR<A' );
define( 'LOGGED_IN_KEY',    'y8`?iHJd ?t+.H^aCI^&k;<%88Wevcxf>V9)PX!(DKmhP.B18{|S}kv46&+h|~k1' );
define( 'NONCE_KEY',        'dJi~42JH:*LS<H!#lf=0;-{p*!c1we>^d2)g2B<6>s`]W]c?92`21}]lu^CAJnA9' );
define( 'AUTH_SALT',        '];[+3PlwRod#(3Wc#yKgH1_dhb>US%*AN`K0|,!<Hia5R:MamPkt~*kXbuq`6Pn4' );
define( 'SECURE_AUTH_SALT', ')zg$LG70BZ.!5P`E|gXa#T__Dp1Zeas=F}ucn)^B=Nekg[xYZm{vQN>%Azl815Kl' );
define( 'LOGGED_IN_SALT',   '}If!7lM/jfMPoEwT%3>rXx<9u3){8f1iT3I1vz{e`;Pf7F7?8W]Fxn8$T^lU)$nn' );
define( 'NONCE_SALT',       'R0e/Nf5ELx;ecT?M24?nfAc=LTyj>c6<7;}9~*Ki2/3n`lP :-sS*o?s_JMf4T5u' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
