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
define( 'DB_NAME', 'i8197173_wp4' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '0mRhT9lBSOkd4axePswzveSANpFHetV84DShwnZ1EHJyPcFziaG1SRRdhmQmSPoT');
define('SECURE_AUTH_KEY',  'S7xfnl4pTwxhvNIIgbkieg9kA1pBVjqavUq1fY3FAdqVeeC83t8d6OtVLnZ9HllC');
define('LOGGED_IN_KEY',    'MsOjnHuZbir0fiVCeGOM9sP9whrFkHW0i0PjhpEsoExRmC9v0l7SBOUxNNzKDVbC');
define('NONCE_KEY',        'i5Ea1fKSDvXLazSMF6vYPIuOnoJtXs3nf2NxyH44P9aKHzjFBFyAwG6YvJsizjNM');
define('AUTH_SALT',        '3GdMBfRs0yzfPYhyxU1gpUYascQPeJRF2QYQ9oXrjwulpG2ejJ1AtvE4nlBNo0NW');
define('SECURE_AUTH_SALT', 'lGObVNc78ywg9e5T0ilu8XnVLzwp23qeUiwQ0iqx39ZIVEWJsz8ngJ5Fiolw4Dgj');
define('LOGGED_IN_SALT',   'D0o6LMBeVDvkf3zoWQK4lU4KlKFxRs7uQGG3KnYjEOGdLNTgopKwhdfAjEE5b9d0');
define('NONCE_SALT',       'jaT0VRdkePAK9ahP4nafSGbvLIB3BuMuO1EcaMATDdCT4huErl46glskcctPb9vA');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');
define('FS_CHMOD_DIR',0755);
define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed externally by Installatron.
 * If you remove this define() to re-enable WordPress's automatic background updating
 * then it's advised to disable auto-updating in Installatron.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


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
