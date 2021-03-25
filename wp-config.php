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
define( 'DB_NAME', 'quiz' );

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
define( 'AUTH_KEY',         'v/dy;i3SO=)j43^(Zbcm{^wo`-7~RRk(AQ2yl{U+^{8)~`4 %#J3iA#= j{mu0oz' );
define( 'SECURE_AUTH_KEY',  'AdFIDj56M1@vGRnXg%{sNUtDjJRSWLxLXQ#xFEy$fVrGg`AmkW~Uq`Bi4>Z3+LsA' );
define( 'LOGGED_IN_KEY',    't.,?RbP7I B#`#H1_5F2(Y-$mreAQ29LB}AguTOu7IM5%C;)HQ+um;Zcu0IbaocC' );
define( 'NONCE_KEY',        '}^~jD/ixY%+a8q/cfO^I@[ <c2]1tm|e}}c^-wJao3xS|1 &xGs ;Ly5u2^n)7Vv' );
define( 'AUTH_SALT',        'LScoE|5@LU8|YZvIgnwj=J4Nl-Isr0V9kIlQz9@N#H5>z-laQ$k<uiukVl7h@0W2' );
define( 'SECURE_AUTH_SALT', '|{D3ilr+ (sLrp`UoPAvM7wHCs6l{Yz@S_#W5(brS2Dc5O,Q`tm(Iqv .7kmL|+c' );
define( 'LOGGED_IN_SALT',   'ro#Q(@{4*?>%`B1aYfAw57GE%-Ew&e`BPD8WRWMmg&p]7Bg|$/;cfWw]dHKwfyw ' );
define( 'NONCE_SALT',       'xg?q_^.vi1bRyOcq!! 3jRkqve31Re(9f&0}WiTn5fWDh}rN|Si(il}Efb,Cs~25' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'qz';

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
