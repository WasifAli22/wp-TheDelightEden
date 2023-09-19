<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings

define( 'ITSEC_ENCRYPTION_KEY', 'eH46Y1YsbDV3I1sySFpvd0s6RmtLRDBMfSUtUSZvJiVFTXJrKHAteipyemdVe0cwUHc8MFBReCpBa2NFeF0jVA==' );

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
define( 'DB_NAME', 'wasif' );

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
define( 'AUTH_KEY',         'CBuJdmg594;c^Z8<Kg@dQ_9q9wr{[))Bhc]_RzB)>Lg+Yu2f!Z^hUfca7)f:kZDE' );
define( 'SECURE_AUTH_KEY',  'EtsL#9Y$)mlNp63fT2Qqj`gU~`K%7,?|G{}4{b@(C%?[[2yQWFX?)A?!j7e]txDM' );
define( 'LOGGED_IN_KEY',    'C`ypPFJ6h%c9?7q]f.P_Z3yY8`s1:+|64vouj^Ga,DrjqWi5i1|(Y_(.sgbAW eF' );
define( 'NONCE_KEY',        '6%6ka^[q.3k;PIQ9(oY)%s8IJ);a6w~vc^Fm`,R:PdRaYc=.>$<9Hi&I.=W5a%>a' );
define( 'AUTH_SALT',        'R&0OG)pl-mQ9*eso|C+mZ__(l>z]A*u}}K9,Uf+o&#g].z&p@RPm[n#jlTa>G(BU' );
define( 'SECURE_AUTH_SALT', 'q5wY9O07rAA_z1~]4P1^+V#TIOt@97mdNtZwOj%yvQSjU#4O,I{xUPX}H`78<{=.' );
define( 'LOGGED_IN_SALT',   'F 6tr3/GCY]276=52jHn@9,dQx5t28Yr(?pd-u@1q89CJEythq=h^VQQi^@MbQW9' );
define( 'NONCE_SALT',       'A!dc7sU@p<4P/B5LQn:g`9uuKDL@LMX;3bcvK) PlO%}-jx!C@uC?zV1(UAU|]kt' );

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
