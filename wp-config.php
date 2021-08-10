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
define( 'DB_NAME', 'Testwordpress_db' );

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
define( 'AUTH_KEY',         '{jyr4}WA]gOh/7[h*<?-oNiV;oItwb |jI5u!&7h6Gw5m(B]NqM,+k%-OV${|;{K' );
define( 'SECURE_AUTH_KEY',  'V&ZYqvh.}~I+CZ!Sa-C`$ugZCbggP#TuRfcio8xJfV5FQpF}nK#:wKeKYk rZs63' );
define( 'LOGGED_IN_KEY',    'fNs^oRc^`!prkfYZn@w@Z!HU0Y042orMRNpn?9W%;j/7a4Z2VX`#Hvf^b:;6`/^u' );
define( 'NONCE_KEY',        'Eyl`Rbx483 P)xnnefe7DE-|p;=b|tca<i;#e}}9=1cT&*,Ryr(dY8-C_-06?ag(' );
define( 'AUTH_SALT',        '({XORVi;/ [G#E^>VG;j6KJ]ZfaM#AP 5WB#TCJnm%8X*%pHypl;Uzb:/@Q(aD{3' );
define( 'SECURE_AUTH_SALT', '$PC`&*BC?}9Xa2XYz6Ovf&8LKi7qX?#~fXLfEKp[DnsNMzS.LdkR&G}|RbR3?i%q' );
define( 'LOGGED_IN_SALT',   '8 /4=$.h4-V;I?p3_;+z}%9;rqY~8r#ju(NwDa3*):sam0gPaok<#6@Yq*/8Q.}!' );
define( 'NONCE_SALT',       ';${=#&)J(BAh@^<@#}oC{9JEr4B)f<B|buI_Vr4K<?>zWn$7Eki4sbmd.-w;PC4P' );

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
