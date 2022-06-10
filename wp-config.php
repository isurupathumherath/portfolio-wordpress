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
define( 'DB_NAME', 'flixsril_isuru' );

/** Database username */
define( 'DB_USER', 'flixsril_isuru' );

/** Database password */
define( 'DB_PASSWORD', ']SwP27!6pW' );

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
define( 'AUTH_KEY',         'aawlewrdpjyntzxfkqumi4umpdthdvblypsu60boshogjwfghsyi3i9dtupbnnpc' );
define( 'SECURE_AUTH_KEY',  'nhjezuwxiedmqhtsi8fjvjk7ruxtun3iuyhdybmys69i9w2yy3n8vb3vfval6ezg' );
define( 'LOGGED_IN_KEY',    'nhnpglpxx9iq7zh4zpz5dk2xbijztfv3iuvg6at3oyauyc3npsukms3gbnoerxad' );
define( 'NONCE_KEY',        'jm6fybc1nfrklg3ynzngwwkofxn97apcaekgkqcxwockgavfryitjtpfpqcbma4o' );
define( 'AUTH_SALT',        'wgwyn5ienrv4uc2cae4itgklflx71zegouiaby9dojv8feigrbsuwb7cmuxponnc' );
define( 'SECURE_AUTH_SALT', 'hixknu6sv4hgt0tlsqyt8dzqexidn2oah2js0ccuus1p5zul4wamle20hih2qlfp' );
define( 'LOGGED_IN_SALT',   'kclvwi7j38xjjqmnqw4sohhv4qqzgo8xkveb22vbvekk1zhpd3ae6heqyhuxltrt' );
define( 'NONCE_SALT',       'rjx08bultxih5wx60ho9zckddlvo0hdcnksvijy7lap3wy3zv0twnh8krloiohcq' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpir_';

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
