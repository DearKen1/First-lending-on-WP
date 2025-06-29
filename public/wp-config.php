<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'finsweet_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'MySQL-8.2' );

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
define( 'AUTH_KEY',         '!e^jSAvptrAT>T4Z2&wzKd:EotoUz-~<7|E,n)Cx=QNjq(m;j-9kj}x>9%DH],>*' );
define( 'SECURE_AUTH_KEY',  '>v[=eb[(;czu[cQ9}YwlaEphPA.A`;*F(cNm1(kis|{G#:a8*+xg4t@j;ske[@WH' );
define( 'LOGGED_IN_KEY',    'GJpF:Fcs{)SU1kT(FzComJV}4$xLB^gx(78%(pYqTcX49COpx#D#ql|KCOLl1-S9' );
define( 'NONCE_KEY',        '+Db6EUDUT&,+?>l]{Zf?Ac#mgLlvBN%:!&9TJx}N$=e2W7h!FjdrtTGWSZnjACKF' );
define( 'AUTH_SALT',        'ed5aA.(?zfMV6z{S]K>&}&;6Fn<AUk7_9f22alvQI)H(:EAK{JOR])k jF>]6G`H' );
define( 'SECURE_AUTH_SALT', '/=uG(FV|VS}*Ehpep?Kgjg8}Q|_wwe0$,3,53LCc.#?;Gm}%<X!k<r3FMON9r1[&' );
define( 'LOGGED_IN_SALT',   '$ovTiW`Zq+cZaeRVdb3F/MTk3^11o8]hFEnigWX1?]S[l>|A9W7#Q}rZs98fA+[F' );
define( 'NONCE_SALT',       'rruC> 29/0!u:o;SrP)pxM6S*nK5pBv!c`X.M0 J..hG@a0m84iF%0ETjEXD+SN?' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
